<?php
namespace AwsWPTC\AppConfig;

use AwsWPTC\AwsClient;

/**
 * This client is used to interact with the **Amazon AppConfig** service.
 * @method \AwsWPTC\Result createApplication(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createApplicationAsync(array $args = [])
 * @method \AwsWPTC\Result createConfigurationProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createConfigurationProfileAsync(array $args = [])
 * @method \AwsWPTC\Result createDeploymentStrategy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createDeploymentStrategyAsync(array $args = [])
 * @method \AwsWPTC\Result createEnvironment(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createEnvironmentAsync(array $args = [])
 * @method \AwsWPTC\Result createHostedConfigurationVersion(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createHostedConfigurationVersionAsync(array $args = [])
 * @method \AwsWPTC\Result deleteApplication(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \AwsWPTC\Result deleteConfigurationProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteConfigurationProfileAsync(array $args = [])
 * @method \AwsWPTC\Result deleteDeploymentStrategy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteDeploymentStrategyAsync(array $args = [])
 * @method \AwsWPTC\Result deleteEnvironment(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteEnvironmentAsync(array $args = [])
 * @method \AwsWPTC\Result deleteHostedConfigurationVersion(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteHostedConfigurationVersionAsync(array $args = [])
 * @method \AwsWPTC\Result getApplication(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getApplicationAsync(array $args = [])
 * @method \AwsWPTC\Result getConfiguration(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getConfigurationAsync(array $args = [])
 * @method \AwsWPTC\Result getConfigurationProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getConfigurationProfileAsync(array $args = [])
 * @method \AwsWPTC\Result getDeployment(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getDeploymentAsync(array $args = [])
 * @method \AwsWPTC\Result getDeploymentStrategy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getDeploymentStrategyAsync(array $args = [])
 * @method \AwsWPTC\Result getEnvironment(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getEnvironmentAsync(array $args = [])
 * @method \AwsWPTC\Result getHostedConfigurationVersion(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getHostedConfigurationVersionAsync(array $args = [])
 * @method \AwsWPTC\Result listApplications(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \AwsWPTC\Result listConfigurationProfiles(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listConfigurationProfilesAsync(array $args = [])
 * @method \AwsWPTC\Result listDeploymentStrategies(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listDeploymentStrategiesAsync(array $args = [])
 * @method \AwsWPTC\Result listDeployments(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listDeploymentsAsync(array $args = [])
 * @method \AwsWPTC\Result listEnvironments(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listEnvironmentsAsync(array $args = [])
 * @method \AwsWPTC\Result listHostedConfigurationVersions(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listHostedConfigurationVersionsAsync(array $args = [])
 * @method \AwsWPTC\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \AwsWPTC\Result startDeployment(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise startDeploymentAsync(array $args = [])
 * @method \AwsWPTC\Result stopDeployment(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise stopDeploymentAsync(array $args = [])
 * @method \AwsWPTC\Result tagResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise tagResourceAsync(array $args = [])
 * @method \AwsWPTC\Result untagResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise untagResourceAsync(array $args = [])
 * @method \AwsWPTC\Result updateApplication(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateApplicationAsync(array $args = [])
 * @method \AwsWPTC\Result updateConfigurationProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateConfigurationProfileAsync(array $args = [])
 * @method \AwsWPTC\Result updateDeploymentStrategy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateDeploymentStrategyAsync(array $args = [])
 * @method \AwsWPTC\Result updateEnvironment(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateEnvironmentAsync(array $args = [])
 * @method \AwsWPTC\Result validateConfiguration(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise validateConfigurationAsync(array $args = [])
 */
class AppConfigClient extends AwsClient {}