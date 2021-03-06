<?php
namespace AwsWPTC\Connect;

use AwsWPTC\AwsClient;

/**
 * This client is used to interact with the **Amazon Connect Service** service.
 * @method \AwsWPTC\Result associateApprovedOrigin(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise associateApprovedOriginAsync(array $args = [])
 * @method \AwsWPTC\Result associateBot(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise associateBotAsync(array $args = [])
 * @method \AwsWPTC\Result associateInstanceStorageConfig(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise associateInstanceStorageConfigAsync(array $args = [])
 * @method \AwsWPTC\Result associateLambdaFunction(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise associateLambdaFunctionAsync(array $args = [])
 * @method \AwsWPTC\Result associateLexBot(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise associateLexBotAsync(array $args = [])
 * @method \AwsWPTC\Result associateQueueQuickConnects(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise associateQueueQuickConnectsAsync(array $args = [])
 * @method \AwsWPTC\Result associateRoutingProfileQueues(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise associateRoutingProfileQueuesAsync(array $args = [])
 * @method \AwsWPTC\Result associateSecurityKey(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise associateSecurityKeyAsync(array $args = [])
 * @method \AwsWPTC\Result createContactFlow(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createContactFlowAsync(array $args = [])
 * @method \AwsWPTC\Result createInstance(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createInstanceAsync(array $args = [])
 * @method \AwsWPTC\Result createIntegrationAssociation(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createIntegrationAssociationAsync(array $args = [])
 * @method \AwsWPTC\Result createQueue(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createQueueAsync(array $args = [])
 * @method \AwsWPTC\Result createQuickConnect(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createQuickConnectAsync(array $args = [])
 * @method \AwsWPTC\Result createRoutingProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createRoutingProfileAsync(array $args = [])
 * @method \AwsWPTC\Result createUseCase(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createUseCaseAsync(array $args = [])
 * @method \AwsWPTC\Result createUser(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createUserAsync(array $args = [])
 * @method \AwsWPTC\Result createUserHierarchyGroup(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createUserHierarchyGroupAsync(array $args = [])
 * @method \AwsWPTC\Result deleteInstance(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \AwsWPTC\Result deleteIntegrationAssociation(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteIntegrationAssociationAsync(array $args = [])
 * @method \AwsWPTC\Result deleteQuickConnect(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteQuickConnectAsync(array $args = [])
 * @method \AwsWPTC\Result deleteUseCase(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteUseCaseAsync(array $args = [])
 * @method \AwsWPTC\Result deleteUser(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteUserAsync(array $args = [])
 * @method \AwsWPTC\Result deleteUserHierarchyGroup(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteUserHierarchyGroupAsync(array $args = [])
 * @method \AwsWPTC\Result describeContactFlow(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeContactFlowAsync(array $args = [])
 * @method \AwsWPTC\Result describeHoursOfOperation(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeHoursOfOperationAsync(array $args = [])
 * @method \AwsWPTC\Result describeInstance(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \AwsWPTC\Result describeInstanceAttribute(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeInstanceAttributeAsync(array $args = [])
 * @method \AwsWPTC\Result describeInstanceStorageConfig(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeInstanceStorageConfigAsync(array $args = [])
 * @method \AwsWPTC\Result describeQueue(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeQueueAsync(array $args = [])
 * @method \AwsWPTC\Result describeQuickConnect(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeQuickConnectAsync(array $args = [])
 * @method \AwsWPTC\Result describeRoutingProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeRoutingProfileAsync(array $args = [])
 * @method \AwsWPTC\Result describeUser(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeUserAsync(array $args = [])
 * @method \AwsWPTC\Result describeUserHierarchyGroup(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeUserHierarchyGroupAsync(array $args = [])
 * @method \AwsWPTC\Result describeUserHierarchyStructure(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeUserHierarchyStructureAsync(array $args = [])
 * @method \AwsWPTC\Result disassociateApprovedOrigin(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disassociateApprovedOriginAsync(array $args = [])
 * @method \AwsWPTC\Result disassociateBot(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disassociateBotAsync(array $args = [])
 * @method \AwsWPTC\Result disassociateInstanceStorageConfig(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disassociateInstanceStorageConfigAsync(array $args = [])
 * @method \AwsWPTC\Result disassociateLambdaFunction(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disassociateLambdaFunctionAsync(array $args = [])
 * @method \AwsWPTC\Result disassociateLexBot(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disassociateLexBotAsync(array $args = [])
 * @method \AwsWPTC\Result disassociateQueueQuickConnects(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disassociateQueueQuickConnectsAsync(array $args = [])
 * @method \AwsWPTC\Result disassociateRoutingProfileQueues(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disassociateRoutingProfileQueuesAsync(array $args = [])
 * @method \AwsWPTC\Result disassociateSecurityKey(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disassociateSecurityKeyAsync(array $args = [])
 * @method \AwsWPTC\Result getContactAttributes(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getContactAttributesAsync(array $args = [])
 * @method \AwsWPTC\Result getCurrentMetricData(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getCurrentMetricDataAsync(array $args = [])
 * @method \AwsWPTC\Result getFederationToken(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getFederationTokenAsync(array $args = [])
 * @method \AwsWPTC\Result getMetricData(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getMetricDataAsync(array $args = [])
 * @method \AwsWPTC\Result listApprovedOrigins(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listApprovedOriginsAsync(array $args = [])
 * @method \AwsWPTC\Result listBots(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listBotsAsync(array $args = [])
 * @method \AwsWPTC\Result listContactFlows(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listContactFlowsAsync(array $args = [])
 * @method \AwsWPTC\Result listHoursOfOperations(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listHoursOfOperationsAsync(array $args = [])
 * @method \AwsWPTC\Result listInstanceAttributes(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listInstanceAttributesAsync(array $args = [])
 * @method \AwsWPTC\Result listInstanceStorageConfigs(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listInstanceStorageConfigsAsync(array $args = [])
 * @method \AwsWPTC\Result listInstances(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listInstancesAsync(array $args = [])
 * @method \AwsWPTC\Result listIntegrationAssociations(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listIntegrationAssociationsAsync(array $args = [])
 * @method \AwsWPTC\Result listLambdaFunctions(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listLambdaFunctionsAsync(array $args = [])
 * @method \AwsWPTC\Result listLexBots(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listLexBotsAsync(array $args = [])
 * @method \AwsWPTC\Result listPhoneNumbers(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listPhoneNumbersAsync(array $args = [])
 * @method \AwsWPTC\Result listPrompts(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listPromptsAsync(array $args = [])
 * @method \AwsWPTC\Result listQueueQuickConnects(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listQueueQuickConnectsAsync(array $args = [])
 * @method \AwsWPTC\Result listQueues(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listQueuesAsync(array $args = [])
 * @method \AwsWPTC\Result listQuickConnects(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listQuickConnectsAsync(array $args = [])
 * @method \AwsWPTC\Result listRoutingProfileQueues(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listRoutingProfileQueuesAsync(array $args = [])
 * @method \AwsWPTC\Result listRoutingProfiles(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listRoutingProfilesAsync(array $args = [])
 * @method \AwsWPTC\Result listSecurityKeys(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listSecurityKeysAsync(array $args = [])
 * @method \AwsWPTC\Result listSecurityProfiles(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listSecurityProfilesAsync(array $args = [])
 * @method \AwsWPTC\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \AwsWPTC\Result listUseCases(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listUseCasesAsync(array $args = [])
 * @method \AwsWPTC\Result listUserHierarchyGroups(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listUserHierarchyGroupsAsync(array $args = [])
 * @method \AwsWPTC\Result listUsers(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listUsersAsync(array $args = [])
 * @method \AwsWPTC\Result resumeContactRecording(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise resumeContactRecordingAsync(array $args = [])
 * @method \AwsWPTC\Result startChatContact(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise startChatContactAsync(array $args = [])
 * @method \AwsWPTC\Result startContactRecording(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise startContactRecordingAsync(array $args = [])
 * @method \AwsWPTC\Result startOutboundVoiceContact(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise startOutboundVoiceContactAsync(array $args = [])
 * @method \AwsWPTC\Result startTaskContact(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise startTaskContactAsync(array $args = [])
 * @method \AwsWPTC\Result stopContact(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise stopContactAsync(array $args = [])
 * @method \AwsWPTC\Result stopContactRecording(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise stopContactRecordingAsync(array $args = [])
 * @method \AwsWPTC\Result suspendContactRecording(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise suspendContactRecordingAsync(array $args = [])
 * @method \AwsWPTC\Result tagResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise tagResourceAsync(array $args = [])
 * @method \AwsWPTC\Result untagResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise untagResourceAsync(array $args = [])
 * @method \AwsWPTC\Result updateContactAttributes(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateContactAttributesAsync(array $args = [])
 * @method \AwsWPTC\Result updateContactFlowContent(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateContactFlowContentAsync(array $args = [])
 * @method \AwsWPTC\Result updateContactFlowName(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateContactFlowNameAsync(array $args = [])
 * @method \AwsWPTC\Result updateInstanceAttribute(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateInstanceAttributeAsync(array $args = [])
 * @method \AwsWPTC\Result updateInstanceStorageConfig(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateInstanceStorageConfigAsync(array $args = [])
 * @method \AwsWPTC\Result updateQueueHoursOfOperation(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateQueueHoursOfOperationAsync(array $args = [])
 * @method \AwsWPTC\Result updateQueueMaxContacts(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateQueueMaxContactsAsync(array $args = [])
 * @method \AwsWPTC\Result updateQueueName(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateQueueNameAsync(array $args = [])
 * @method \AwsWPTC\Result updateQueueOutboundCallerConfig(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateQueueOutboundCallerConfigAsync(array $args = [])
 * @method \AwsWPTC\Result updateQueueStatus(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateQueueStatusAsync(array $args = [])
 * @method \AwsWPTC\Result updateQuickConnectConfig(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateQuickConnectConfigAsync(array $args = [])
 * @method \AwsWPTC\Result updateQuickConnectName(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateQuickConnectNameAsync(array $args = [])
 * @method \AwsWPTC\Result updateRoutingProfileConcurrency(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateRoutingProfileConcurrencyAsync(array $args = [])
 * @method \AwsWPTC\Result updateRoutingProfileDefaultOutboundQueue(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateRoutingProfileDefaultOutboundQueueAsync(array $args = [])
 * @method \AwsWPTC\Result updateRoutingProfileName(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateRoutingProfileNameAsync(array $args = [])
 * @method \AwsWPTC\Result updateRoutingProfileQueues(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateRoutingProfileQueuesAsync(array $args = [])
 * @method \AwsWPTC\Result updateUserHierarchy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateUserHierarchyAsync(array $args = [])
 * @method \AwsWPTC\Result updateUserHierarchyGroupName(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateUserHierarchyGroupNameAsync(array $args = [])
 * @method \AwsWPTC\Result updateUserHierarchyStructure(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateUserHierarchyStructureAsync(array $args = [])
 * @method \AwsWPTC\Result updateUserIdentityInfo(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateUserIdentityInfoAsync(array $args = [])
 * @method \AwsWPTC\Result updateUserPhoneConfig(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateUserPhoneConfigAsync(array $args = [])
 * @method \AwsWPTC\Result updateUserRoutingProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateUserRoutingProfileAsync(array $args = [])
 * @method \AwsWPTC\Result updateUserSecurityProfiles(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateUserSecurityProfilesAsync(array $args = [])
 */
class ConnectClient extends AwsClient {}
