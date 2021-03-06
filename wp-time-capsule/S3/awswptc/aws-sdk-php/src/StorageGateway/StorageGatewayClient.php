<?php
namespace AwsWPTC\StorageGateway;

use AwsWPTC\AwsClient;

/**
 * AWS Storage Gateway client.
 *
 * @method \AwsWPTC\Result activateGateway(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise activateGatewayAsync(array $args = [])
 * @method \AwsWPTC\Result addCache(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise addCacheAsync(array $args = [])
 * @method \AwsWPTC\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \AwsWPTC\Result addUploadBuffer(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise addUploadBufferAsync(array $args = [])
 * @method \AwsWPTC\Result addWorkingStorage(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise addWorkingStorageAsync(array $args = [])
 * @method \AwsWPTC\Result assignTapePool(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise assignTapePoolAsync(array $args = [])
 * @method \AwsWPTC\Result associateFileSystem(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise associateFileSystemAsync(array $args = [])
 * @method \AwsWPTC\Result attachVolume(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise attachVolumeAsync(array $args = [])
 * @method \AwsWPTC\Result cancelArchival(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise cancelArchivalAsync(array $args = [])
 * @method \AwsWPTC\Result cancelRetrieval(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise cancelRetrievalAsync(array $args = [])
 * @method \AwsWPTC\Result createCachediSCSIVolume(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createCachediSCSIVolumeAsync(array $args = [])
 * @method \AwsWPTC\Result createNFSFileShare(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createNFSFileShareAsync(array $args = [])
 * @method \AwsWPTC\Result createSMBFileShare(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createSMBFileShareAsync(array $args = [])
 * @method \AwsWPTC\Result createSnapshot(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \AwsWPTC\Result createSnapshotFromVolumeRecoveryPoint(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createSnapshotFromVolumeRecoveryPointAsync(array $args = [])
 * @method \AwsWPTC\Result createStorediSCSIVolume(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createStorediSCSIVolumeAsync(array $args = [])
 * @method \AwsWPTC\Result createTapePool(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createTapePoolAsync(array $args = [])
 * @method \AwsWPTC\Result createTapeWithBarcode(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createTapeWithBarcodeAsync(array $args = [])
 * @method \AwsWPTC\Result createTapes(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createTapesAsync(array $args = [])
 * @method \AwsWPTC\Result deleteAutomaticTapeCreationPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteAutomaticTapeCreationPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result deleteBandwidthRateLimit(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteBandwidthRateLimitAsync(array $args = [])
 * @method \AwsWPTC\Result deleteChapCredentials(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteChapCredentialsAsync(array $args = [])
 * @method \AwsWPTC\Result deleteFileShare(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteFileShareAsync(array $args = [])
 * @method \AwsWPTC\Result deleteGateway(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteGatewayAsync(array $args = [])
 * @method \AwsWPTC\Result deleteSnapshotSchedule(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteSnapshotScheduleAsync(array $args = [])
 * @method \AwsWPTC\Result deleteTape(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteTapeAsync(array $args = [])
 * @method \AwsWPTC\Result deleteTapeArchive(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteTapeArchiveAsync(array $args = [])
 * @method \AwsWPTC\Result deleteTapePool(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteTapePoolAsync(array $args = [])
 * @method \AwsWPTC\Result deleteVolume(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteVolumeAsync(array $args = [])
 * @method \AwsWPTC\Result describeAvailabilityMonitorTest(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeAvailabilityMonitorTestAsync(array $args = [])
 * @method \AwsWPTC\Result describeBandwidthRateLimit(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeBandwidthRateLimitAsync(array $args = [])
 * @method \AwsWPTC\Result describeBandwidthRateLimitSchedule(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeBandwidthRateLimitScheduleAsync(array $args = [])
 * @method \AwsWPTC\Result describeCache(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeCacheAsync(array $args = [])
 * @method \AwsWPTC\Result describeCachediSCSIVolumes(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeCachediSCSIVolumesAsync(array $args = [])
 * @method \AwsWPTC\Result describeChapCredentials(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeChapCredentialsAsync(array $args = [])
 * @method \AwsWPTC\Result describeFileSystemAssociations(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeFileSystemAssociationsAsync(array $args = [])
 * @method \AwsWPTC\Result describeGatewayInformation(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeGatewayInformationAsync(array $args = [])
 * @method \AwsWPTC\Result describeMaintenanceStartTime(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeMaintenanceStartTimeAsync(array $args = [])
 * @method \AwsWPTC\Result describeNFSFileShares(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeNFSFileSharesAsync(array $args = [])
 * @method \AwsWPTC\Result describeSMBFileShares(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeSMBFileSharesAsync(array $args = [])
 * @method \AwsWPTC\Result describeSMBSettings(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeSMBSettingsAsync(array $args = [])
 * @method \AwsWPTC\Result describeSnapshotSchedule(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeSnapshotScheduleAsync(array $args = [])
 * @method \AwsWPTC\Result describeStorediSCSIVolumes(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeStorediSCSIVolumesAsync(array $args = [])
 * @method \AwsWPTC\Result describeTapeArchives(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeTapeArchivesAsync(array $args = [])
 * @method \AwsWPTC\Result describeTapeRecoveryPoints(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeTapeRecoveryPointsAsync(array $args = [])
 * @method \AwsWPTC\Result describeTapes(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeTapesAsync(array $args = [])
 * @method \AwsWPTC\Result describeUploadBuffer(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeUploadBufferAsync(array $args = [])
 * @method \AwsWPTC\Result describeVTLDevices(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeVTLDevicesAsync(array $args = [])
 * @method \AwsWPTC\Result describeWorkingStorage(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeWorkingStorageAsync(array $args = [])
 * @method \AwsWPTC\Result detachVolume(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise detachVolumeAsync(array $args = [])
 * @method \AwsWPTC\Result disableGateway(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disableGatewayAsync(array $args = [])
 * @method \AwsWPTC\Result disassociateFileSystem(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disassociateFileSystemAsync(array $args = [])
 * @method \AwsWPTC\Result joinDomain(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise joinDomainAsync(array $args = [])
 * @method \AwsWPTC\Result listAutomaticTapeCreationPolicies(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listAutomaticTapeCreationPoliciesAsync(array $args = [])
 * @method \AwsWPTC\Result listFileShares(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listFileSharesAsync(array $args = [])
 * @method \AwsWPTC\Result listFileSystemAssociations(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listFileSystemAssociationsAsync(array $args = [])
 * @method \AwsWPTC\Result listGateways(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listGatewaysAsync(array $args = [])
 * @method \AwsWPTC\Result listLocalDisks(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listLocalDisksAsync(array $args = [])
 * @method \AwsWPTC\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \AwsWPTC\Result listTapePools(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listTapePoolsAsync(array $args = [])
 * @method \AwsWPTC\Result listTapes(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listTapesAsync(array $args = [])
 * @method \AwsWPTC\Result listVolumeInitiators(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listVolumeInitiatorsAsync(array $args = [])
 * @method \AwsWPTC\Result listVolumeRecoveryPoints(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listVolumeRecoveryPointsAsync(array $args = [])
 * @method \AwsWPTC\Result listVolumes(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listVolumesAsync(array $args = [])
 * @method \AwsWPTC\Result notifyWhenUploaded(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise notifyWhenUploadedAsync(array $args = [])
 * @method \AwsWPTC\Result refreshCache(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise refreshCacheAsync(array $args = [])
 * @method \AwsWPTC\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \AwsWPTC\Result resetCache(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise resetCacheAsync(array $args = [])
 * @method \AwsWPTC\Result retrieveTapeArchive(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise retrieveTapeArchiveAsync(array $args = [])
 * @method \AwsWPTC\Result retrieveTapeRecoveryPoint(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise retrieveTapeRecoveryPointAsync(array $args = [])
 * @method \AwsWPTC\Result setLocalConsolePassword(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise setLocalConsolePasswordAsync(array $args = [])
 * @method \AwsWPTC\Result setSMBGuestPassword(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise setSMBGuestPasswordAsync(array $args = [])
 * @method \AwsWPTC\Result shutdownGateway(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise shutdownGatewayAsync(array $args = [])
 * @method \AwsWPTC\Result startAvailabilityMonitorTest(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise startAvailabilityMonitorTestAsync(array $args = [])
 * @method \AwsWPTC\Result startGateway(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise startGatewayAsync(array $args = [])
 * @method \AwsWPTC\Result updateAutomaticTapeCreationPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateAutomaticTapeCreationPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result updateBandwidthRateLimit(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateBandwidthRateLimitAsync(array $args = [])
 * @method \AwsWPTC\Result updateBandwidthRateLimitSchedule(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateBandwidthRateLimitScheduleAsync(array $args = [])
 * @method \AwsWPTC\Result updateChapCredentials(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateChapCredentialsAsync(array $args = [])
 * @method \AwsWPTC\Result updateFileSystemAssociation(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateFileSystemAssociationAsync(array $args = [])
 * @method \AwsWPTC\Result updateGatewayInformation(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateGatewayInformationAsync(array $args = [])
 * @method \AwsWPTC\Result updateGatewaySoftwareNow(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateGatewaySoftwareNowAsync(array $args = [])
 * @method \AwsWPTC\Result updateMaintenanceStartTime(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateMaintenanceStartTimeAsync(array $args = [])
 * @method \AwsWPTC\Result updateNFSFileShare(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateNFSFileShareAsync(array $args = [])
 * @method \AwsWPTC\Result updateSMBFileShare(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateSMBFileShareAsync(array $args = [])
 * @method \AwsWPTC\Result updateSMBFileShareVisibility(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateSMBFileShareVisibilityAsync(array $args = [])
 * @method \AwsWPTC\Result updateSMBSecurityStrategy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateSMBSecurityStrategyAsync(array $args = [])
 * @method \AwsWPTC\Result updateSnapshotSchedule(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateSnapshotScheduleAsync(array $args = [])
 * @method \AwsWPTC\Result updateVTLDeviceType(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateVTLDeviceTypeAsync(array $args = [])
 */
class StorageGatewayClient extends AwsClient {}
