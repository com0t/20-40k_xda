<?php
namespace AwsWPTC\DirectoryService;

use AwsWPTC\AwsClient;

/**
 * AWS Directory Service client
 *
 * @method \AwsWPTC\Result acceptSharedDirectory(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise acceptSharedDirectoryAsync(array $args = [])
 * @method \AwsWPTC\Result addIpRoutes(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise addIpRoutesAsync(array $args = [])
 * @method \AwsWPTC\Result addRegion(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise addRegionAsync(array $args = [])
 * @method \AwsWPTC\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \AwsWPTC\Result cancelSchemaExtension(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise cancelSchemaExtensionAsync(array $args = [])
 * @method \AwsWPTC\Result connectDirectory(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise connectDirectoryAsync(array $args = [])
 * @method \AwsWPTC\Result createAlias(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createAliasAsync(array $args = [])
 * @method \AwsWPTC\Result createComputer(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createComputerAsync(array $args = [])
 * @method \AwsWPTC\Result createConditionalForwarder(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createConditionalForwarderAsync(array $args = [])
 * @method \AwsWPTC\Result createDirectory(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createDirectoryAsync(array $args = [])
 * @method \AwsWPTC\Result createLogSubscription(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createLogSubscriptionAsync(array $args = [])
 * @method \AwsWPTC\Result createMicrosoftAD(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createMicrosoftADAsync(array $args = [])
 * @method \AwsWPTC\Result createSnapshot(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \AwsWPTC\Result createTrust(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createTrustAsync(array $args = [])
 * @method \AwsWPTC\Result deleteConditionalForwarder(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteConditionalForwarderAsync(array $args = [])
 * @method \AwsWPTC\Result deleteDirectory(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteDirectoryAsync(array $args = [])
 * @method \AwsWPTC\Result deleteLogSubscription(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteLogSubscriptionAsync(array $args = [])
 * @method \AwsWPTC\Result deleteSnapshot(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteSnapshotAsync(array $args = [])
 * @method \AwsWPTC\Result deleteTrust(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteTrustAsync(array $args = [])
 * @method \AwsWPTC\Result deregisterCertificate(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deregisterCertificateAsync(array $args = [])
 * @method \AwsWPTC\Result deregisterEventTopic(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deregisterEventTopicAsync(array $args = [])
 * @method \AwsWPTC\Result describeCertificate(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeCertificateAsync(array $args = [])
 * @method \AwsWPTC\Result describeConditionalForwarders(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeConditionalForwardersAsync(array $args = [])
 * @method \AwsWPTC\Result describeDirectories(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeDirectoriesAsync(array $args = [])
 * @method \AwsWPTC\Result describeDomainControllers(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeDomainControllersAsync(array $args = [])
 * @method \AwsWPTC\Result describeEventTopics(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeEventTopicsAsync(array $args = [])
 * @method \AwsWPTC\Result describeLDAPSSettings(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeLDAPSSettingsAsync(array $args = [])
 * @method \AwsWPTC\Result describeRegions(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeRegionsAsync(array $args = [])
 * @method \AwsWPTC\Result describeSharedDirectories(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeSharedDirectoriesAsync(array $args = [])
 * @method \AwsWPTC\Result describeSnapshots(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeSnapshotsAsync(array $args = [])
 * @method \AwsWPTC\Result describeTrusts(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeTrustsAsync(array $args = [])
 * @method \AwsWPTC\Result disableClientAuthentication(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disableClientAuthenticationAsync(array $args = [])
 * @method \AwsWPTC\Result disableLDAPS(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disableLDAPSAsync(array $args = [])
 * @method \AwsWPTC\Result disableRadius(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disableRadiusAsync(array $args = [])
 * @method \AwsWPTC\Result disableSso(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disableSsoAsync(array $args = [])
 * @method \AwsWPTC\Result enableClientAuthentication(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise enableClientAuthenticationAsync(array $args = [])
 * @method \AwsWPTC\Result enableLDAPS(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise enableLDAPSAsync(array $args = [])
 * @method \AwsWPTC\Result enableRadius(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise enableRadiusAsync(array $args = [])
 * @method \AwsWPTC\Result enableSso(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise enableSsoAsync(array $args = [])
 * @method \AwsWPTC\Result getDirectoryLimits(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getDirectoryLimitsAsync(array $args = [])
 * @method \AwsWPTC\Result getSnapshotLimits(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getSnapshotLimitsAsync(array $args = [])
 * @method \AwsWPTC\Result listCertificates(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listCertificatesAsync(array $args = [])
 * @method \AwsWPTC\Result listIpRoutes(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listIpRoutesAsync(array $args = [])
 * @method \AwsWPTC\Result listLogSubscriptions(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listLogSubscriptionsAsync(array $args = [])
 * @method \AwsWPTC\Result listSchemaExtensions(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listSchemaExtensionsAsync(array $args = [])
 * @method \AwsWPTC\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \AwsWPTC\Result registerCertificate(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise registerCertificateAsync(array $args = [])
 * @method \AwsWPTC\Result registerEventTopic(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise registerEventTopicAsync(array $args = [])
 * @method \AwsWPTC\Result rejectSharedDirectory(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise rejectSharedDirectoryAsync(array $args = [])
 * @method \AwsWPTC\Result removeIpRoutes(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise removeIpRoutesAsync(array $args = [])
 * @method \AwsWPTC\Result removeRegion(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise removeRegionAsync(array $args = [])
 * @method \AwsWPTC\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \AwsWPTC\Result resetUserPassword(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise resetUserPasswordAsync(array $args = [])
 * @method \AwsWPTC\Result restoreFromSnapshot(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise restoreFromSnapshotAsync(array $args = [])
 * @method \AwsWPTC\Result shareDirectory(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise shareDirectoryAsync(array $args = [])
 * @method \AwsWPTC\Result startSchemaExtension(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise startSchemaExtensionAsync(array $args = [])
 * @method \AwsWPTC\Result unshareDirectory(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise unshareDirectoryAsync(array $args = [])
 * @method \AwsWPTC\Result updateConditionalForwarder(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateConditionalForwarderAsync(array $args = [])
 * @method \AwsWPTC\Result updateNumberOfDomainControllers(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateNumberOfDomainControllersAsync(array $args = [])
 * @method \AwsWPTC\Result updateRadius(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateRadiusAsync(array $args = [])
 * @method \AwsWPTC\Result updateTrust(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateTrustAsync(array $args = [])
 * @method \AwsWPTC\Result verifyTrust(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise verifyTrustAsync(array $args = [])
 */
class DirectoryServiceClient extends AwsClient {}