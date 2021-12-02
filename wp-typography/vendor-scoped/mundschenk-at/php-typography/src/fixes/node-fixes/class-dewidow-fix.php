<?php

/**
 *  This file is part of PHP-Typography.
 *
 *  Copyright 2014-2019 Peter Putzer.
 *  Copyright 2009-2011 KINGdesk, LLC.
 *
 *  This program is free software; you can redistribute it and/or modify modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License along
 *  with this program; if not, write to the Free Software Foundation, Inc.,
 *  51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 *
 *  ***
 *
 *  @package mundschenk-at/php-typography
 *  @license http://www.gnu.org/licenses/gpl-2.0.html
 */
namespace PHP_Typography\Fixes\Node_Fixes;

use PHP_Typography\DOM;
use PHP_Typography\RE;
use PHP_Typography\Settings;
use PHP_Typography\Strings;
use PHP_Typography\U;
/**
 * Prevents widows (if enabled).
 *
 * @author Peter Putzer <github@mundschenk.at>
 *
 * @since 5.0.0
 */
class Dewidow_Fix extends \PHP_Typography\Fixes\Node_Fixes\Abstract_Node_Fix
{
    const SPACE_BETWEEN = '[\\s]+';
    // \s includes all special spaces (but not ZWSP) with the u flag.
    const WIDOW = '[\\w\\p{M}\\-' . \PHP_Typography\U::HYPHEN . \PHP_Typography\U::ZERO_WIDTH_SPACE . \PHP_Typography\U::SOFT_HYPHEN . ']+?';
    // \w includes all alphanumeric Unicode characters but not composed characters.
    // Mandatory UTF-8 modifer.
    const REGEX_START = '/
		(?:
			\\A
			|
			(?:
				(?<space_before>            # subpattern 1: space before (note: ZWSP is not a space)
					[\\s' . \PHP_Typography\U::ZERO_WIDTH_SPACE . \PHP_Typography\U::SOFT_HYPHEN . ']+
				)
				(?<neighbor>                # subpattern 2: neighbors widow (short as possible)
					[^\\s' . \PHP_Typography\U::ZERO_WIDTH_SPACE . \PHP_Typography\U::SOFT_HYPHEN . ']+?
				)
			)
		)
		(?<space_between>                   # subpattern 3: space between
			' . self::SPACE_BETWEEN . '
		)
		(?<widow>                           # subpattern 4: widow
			' . self::WIDOW . '
			(?:
				' . self::SPACE_BETWEEN . self::WIDOW . '
			){0,';
    // The maximum number of repetitions is missing.
    const REGEX_END = '})
		(?<trailing>                       # subpattern 5: any trailing punctuation or spaces
			[^\\w\\p{M}]*
		)
		\\Z
	/Sxu';
    const MASKED_NARROW_SPACE = '__NO_BREAK_NARROW_SPACE__';
    /**
     * Apply the fix to a given textnode.
     *
     * @param \DOMText $textnode Required.
     * @param Settings $settings Required.
     * @param bool     $is_title Optional. Default false.
     */
    public function apply(\DOMText $textnode, \PHP_Typography\Settings $settings, $is_title = \false)
    {
        // Intervening inline tags may interfere with widow identification, but that is a sacrifice of using the parser.
        // Intervening tags will only interfere if they separate the widow from previous or preceding whitespace.
        if (empty($settings[\PHP_Typography\Settings::DEWIDOW]) || empty($settings[\PHP_Typography\Settings::DEWIDOW_MAX_PULL]) || empty($settings[\PHP_Typography\Settings::DEWIDOW_MAX_LENGTH])) {
            return;
        }
        if ('' === \PHP_Typography\DOM::get_next_chr($textnode)) {
            // We have the last type "text" child of a block level element.
            $textnode->data = $this->dewidow($textnode->data, \PHP_Typography\Strings::functions($textnode->data), $settings[\PHP_Typography\Settings::DEWIDOW_MAX_PULL], $settings[\PHP_Typography\Settings::DEWIDOW_MAX_LENGTH], $settings[\PHP_Typography\Settings::DEWIDOW_WORD_NUMBER], \PHP_Typography\U::NO_BREAK_NARROW_SPACE);
        }
    }
    /**
     * Dewidow a given text fragment.
     *
     * @since 6.5.0 Parameter $narrow_space has been deprecated.
     *
     * @param  string $text         The text fragment to dewidow.
     * @param  array  $func         An array of string functions.
     * @param  int    $max_pull     Maximum number of characters pulled from previous line.
     * @param  int    $max_length   Maximum widow length.
     * @param  int    $word_number  Maximum number of words allowed in widow.
     * @param  string $deprecated   Ignored.
     *
     * @return string
     */
    protected function dewidow($text, array $func, $max_pull, $max_length, $word_number, $deprecated)
    {
        if ($word_number < 1) {
            return $text;
            // We are done.
        }
        // Do what we have to do.
        return \preg_replace_callback(self::REGEX_START . ($word_number - 1) . self::REGEX_END, function (array $widow) use($func, $max_pull, $max_length, $word_number) {
            // If we are here, we know that widows are being protected in some fashion
            // with that, we will assert that widows should never be hyphenated or wrapped
            // as such, we will strip soft hyphens and zero-width-spaces.
            $widow['widow'] = self::strip_breaking_characters($widow['widow']);
            $widow['trailing'] = self::strip_breaking_characters(self::make_space_nonbreaking($widow['trailing'], \PHP_Typography\U::NO_BREAK_NARROW_SPACE, $func['u']));
            if ('' === $widow['space_before'] || \false !== \strpos($widow['space_before'], \PHP_Typography\U::NO_BREAK_SPACE) || $func['strlen']($widow['neighbor']) > $max_pull || $func['strlen']($widow['widow']) > $max_length || self::is_narrow_space($widow['space_between'])) {
                return $widow['space_before'] . $widow['neighbor'] . $this->dewidow($widow['space_between'] . $widow['widow'] . $widow['trailing'], $func, $max_pull, $max_length, $word_number - 1, \PHP_Typography\U::NO_BREAK_NARROW_SPACE);
            }
            // Let's protect some widows!
            return $widow['space_before'] . $widow['neighbor'] . \PHP_Typography\U::NO_BREAK_SPACE . self::make_space_nonbreaking($widow['widow'], \PHP_Typography\U::NO_BREAK_NARROW_SPACE, $func['u']) . $widow['trailing'];
        }, $text);
    }
    /**
     * Strip zero-width space and soft hyphens from the given string.
     *
     * @param  string $string Required.
     *
     * @return string
     */
    protected static function strip_breaking_characters($string)
    {
        return \str_replace([\PHP_Typography\U::ZERO_WIDTH_SPACE, \PHP_Typography\U::SOFT_HYPHEN], '', $string);
    }
    /**
     * Is the given string one of the narrow space characters?
     *
     * @since 6.0.0
     *
     * @param  string $string The whitespace to test.
     *
     * @return bool
     */
    protected static function is_narrow_space($string)
    {
        return \PHP_Typography\U::THIN_SPACE === $string || \PHP_Typography\U::HAIR_SPACE === $string || \PHP_Typography\U::NO_BREAK_NARROW_SPACE === $string;
    }
    /**
     * Strip zero-width space and soft hyphens from the given string.
     *
     * @since 6.5.0 Parameter $narrow_space has been deprecated.
     *
     * @param  string $string     Required.
     * @param  string $deprecated Ignored.
     * @param  string $u          Either 'u' or the empty string.
     *
     * @return string
     */
    protected static function make_space_nonbreaking($string, $deprecated, $u)
    {
        return \preg_replace(['/\\s*(?:' . \PHP_Typography\U::THIN_SPACE . '|' . \PHP_Typography\U::NO_BREAK_NARROW_SPACE . ')\\s*/Su', "/\\s+/S{$u}", '/' . self::MASKED_NARROW_SPACE . "/S{$u}"], [self::MASKED_NARROW_SPACE, \PHP_Typography\U::NO_BREAK_SPACE, \PHP_Typography\U::NO_BREAK_NARROW_SPACE], $string);
    }
}
