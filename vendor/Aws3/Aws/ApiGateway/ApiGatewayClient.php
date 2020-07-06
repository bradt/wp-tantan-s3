<?php
namespace Aws\ApiGateway;

use Aws\AwsClient;
use Aws\CommandInterface;
use DeliciousBrains\WP_Offload_Media\Aws3\Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **AWS API Gateway** service.
 *
 * @method \Aws\Result createApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApiKeyAsync(array $args = [])
 * @method \Aws\Result createAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAuthorizerAsync(array $args = [])
 * @method \Aws\Result createBasePathMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBasePathMappingAsync(array $args = [])
 * @method \Aws\Result createDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \Aws\Result createDocumentationPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDocumentationPartAsync(array $args = [])
 * @method \Aws\Result createDocumentationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDocumentationVersionAsync(array $args = [])
 * @method \Aws\Result createDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainNameAsync(array $args = [])
 * @method \Aws\Result createModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createModelAsync(array $args = [])
 * @method \Aws\Result createRequestValidator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRequestValidatorAsync(array $args = [])
 * @method \Aws\Result createResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceAsync(array $args = [])
 * @method \Aws\Result createRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRestApiAsync(array $args = [])
 * @method \Aws\Result createStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStageAsync(array $args = [])
 * @method \Aws\Result createUsagePlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUsagePlanAsync(array $args = [])
 * @method \Aws\Result createUsagePlanKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUsagePlanKeyAsync(array $args = [])
 * @method \Aws\Result createVpcLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcLinkAsync(array $args = [])
 * @method \Aws\Result deleteApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApiKeyAsync(array $args = [])
 * @method \Aws\Result deleteAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAuthorizerAsync(array $args = [])
 * @method \Aws\Result deleteBasePathMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBasePathMappingAsync(array $args = [])
 * @method \Aws\Result deleteClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClientCertificateAsync(array $args = [])
 * @method \Aws\Result deleteDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeploymentAsync(array $args = [])
 * @method \Aws\Result deleteDocumentationPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDocumentationPartAsync(array $args = [])
 * @method \Aws\Result deleteDocumentationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDocumentationVersionAsync(array $args = [])
 * @method \Aws\Result deleteDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainNameAsync(array $args = [])
 * @method \Aws\Result deleteGatewayResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGatewayResponseAsync(array $args = [])
 * @method \Aws\Result deleteIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIntegrationAsync(array $args = [])
 * @method \Aws\Result deleteIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIntegrationResponseAsync(array $args = [])
 * @method \Aws\Result deleteMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMethodAsync(array $args = [])
 * @method \Aws\Result deleteMethodResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMethodResponseAsync(array $args = [])
 * @method \Aws\Result deleteModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelAsync(array $args = [])
 * @method \Aws\Result deleteRequestValidator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRequestValidatorAsync(array $args = [])
 * @method \Aws\Result deleteResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceAsync(array $args = [])
 * @method \Aws\Result deleteRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRestApiAsync(array $args = [])
 * @method \Aws\Result deleteStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStageAsync(array $args = [])
 * @method \Aws\Result deleteUsagePlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUsagePlanAsync(array $args = [])
 * @method \Aws\Result deleteUsagePlanKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUsagePlanKeyAsync(array $args = [])
 * @method \Aws\Result deleteVpcLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcLinkAsync(array $args = [])
 * @method \Aws\Result flushStageAuthorizersCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise flushStageAuthorizersCacheAsync(array $args = [])
 * @method \Aws\Result flushStageCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise flushStageCacheAsync(array $args = [])
 * @method \Aws\Result generateClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateClientCertificateAsync(array $args = [])
 * @method \Aws\Result getAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountAsync(array $args = [])
 * @method \Aws\Result getApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApiKeyAsync(array $args = [])
 * @method \Aws\Result getApiKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApiKeysAsync(array $args = [])
 * @method \Aws\Result getAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizerAsync(array $args = [])
 * @method \Aws\Result getAuthorizers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizersAsync(array $args = [])
 * @method \Aws\Result getBasePathMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBasePathMappingAsync(array $args = [])
 * @method \Aws\Result getBasePathMappings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBasePathMappingsAsync(array $args = [])
 * @method \Aws\Result getClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClientCertificateAsync(array $args = [])
 * @method \Aws\Result getClientCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClientCertificatesAsync(array $args = [])
 * @method \Aws\Result getDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentAsync(array $args = [])
 * @method \Aws\Result getDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentsAsync(array $args = [])
 * @method \Aws\Result getDocumentationPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentationPartAsync(array $args = [])
 * @method \Aws\Result getDocumentationParts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentationPartsAsync(array $args = [])
 * @method \Aws\Result getDocumentationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentationVersionAsync(array $args = [])
 * @method \Aws\Result getDocumentationVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentationVersionsAsync(array $args = [])
 * @method \Aws\Result getDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainNameAsync(array $args = [])
 * @method \Aws\Result getDomainNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainNamesAsync(array $args = [])
 * @method \Aws\Result getExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExportAsync(array $args = [])
 * @method \Aws\Result getGatewayResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGatewayResponseAsync(array $args = [])
 * @method \Aws\Result getGatewayResponses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGatewayResponsesAsync(array $args = [])
 * @method \Aws\Result getIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntegrationAsync(array $args = [])
 * @method \Aws\Result getIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntegrationResponseAsync(array $args = [])
 * @method \Aws\Result getMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMethodAsync(array $args = [])
 * @method \Aws\Result getMethodResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMethodResponseAsync(array $args = [])
 * @method \Aws\Result getModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelAsync(array $args = [])
 * @method \Aws\Result getModelTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelTemplateAsync(array $args = [])
 * @method \Aws\Result getModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelsAsync(array $args = [])
 * @method \Aws\Result getRequestValidator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRequestValidatorAsync(array $args = [])
 * @method \Aws\Result getRequestValidators(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRequestValidatorsAsync(array $args = [])
 * @method \Aws\Result getResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceAsync(array $args = [])
 * @method \Aws\Result getResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcesAsync(array $args = [])
 * @method \Aws\Result getRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRestApiAsync(array $args = [])
 * @method \Aws\Result getRestApis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRestApisAsync(array $args = [])
 * @method \Aws\Result getSdk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSdkAsync(array $args = [])
 * @method \Aws\Result getSdkType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSdkTypeAsync(array $args = [])
 * @method \Aws\Result getSdkTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSdkTypesAsync(array $args = [])
 * @method \Aws\Result getStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStageAsync(array $args = [])
 * @method \Aws\Result getStages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStagesAsync(array $args = [])
 * @method \Aws\Result getTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagsAsync(array $args = [])
 * @method \Aws\Result getUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsageAsync(array $args = [])
 * @method \Aws\Result getUsagePlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsagePlanAsync(array $args = [])
 * @method \Aws\Result getUsagePlanKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsagePlanKeyAsync(array $args = [])
 * @method \Aws\Result getUsagePlanKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsagePlanKeysAsync(array $args = [])
 * @method \Aws\Result getUsagePlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsagePlansAsync(array $args = [])
 * @method \Aws\Result getVpcLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcLinkAsync(array $args = [])
 * @method \Aws\Result getVpcLinks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVpcLinksAsync(array $args = [])
 * @method \Aws\Result importApiKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importApiKeysAsync(array $args = [])
 * @method \Aws\Result importDocumentationParts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importDocumentationPartsAsync(array $args = [])
 * @method \Aws\Result importRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importRestApiAsync(array $args = [])
 * @method \Aws\Result putGatewayResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putGatewayResponseAsync(array $args = [])
 * @method \Aws\Result putIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putIntegrationAsync(array $args = [])
 * @method \Aws\Result putIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putIntegrationResponseAsync(array $args = [])
 * @method \Aws\Result putMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMethodAsync(array $args = [])
 * @method \Aws\Result putMethodResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMethodResponseAsync(array $args = [])
 * @method \Aws\Result putRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRestApiAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result testInvokeAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testInvokeAuthorizerAsync(array $args = [])
 * @method \Aws\Result testInvokeMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testInvokeMethodAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountAsync(array $args = [])
 * @method \Aws\Result updateApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApiKeyAsync(array $args = [])
 * @method \Aws\Result updateAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAuthorizerAsync(array $args = [])
 * @method \Aws\Result updateBasePathMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBasePathMappingAsync(array $args = [])
 * @method \Aws\Result updateClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClientCertificateAsync(array $args = [])
 * @method \Aws\Result updateDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeploymentAsync(array $args = [])
 * @method \Aws\Result updateDocumentationPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentationPartAsync(array $args = [])
 * @method \Aws\Result updateDocumentationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentationVersionAsync(array $args = [])
 * @method \Aws\Result updateDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainNameAsync(array $args = [])
 * @method \Aws\Result updateGatewayResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGatewayResponseAsync(array $args = [])
 * @method \Aws\Result updateIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIntegrationAsync(array $args = [])
 * @method \Aws\Result updateIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIntegrationResponseAsync(array $args = [])
 * @method \Aws\Result updateMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMethodAsync(array $args = [])
 * @method \Aws\Result updateMethodResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMethodResponseAsync(array $args = [])
 * @method \Aws\Result updateModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateModelAsync(array $args = [])
 * @method \Aws\Result updateRequestValidator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRequestValidatorAsync(array $args = [])
 * @method \Aws\Result updateResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceAsync(array $args = [])
 * @method \Aws\Result updateRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRestApiAsync(array $args = [])
 * @method \Aws\Result updateStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStageAsync(array $args = [])
 * @method \Aws\Result updateUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUsageAsync(array $args = [])
 * @method \Aws\Result updateUsagePlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUsagePlanAsync(array $args = [])
 * @method \Aws\Result updateVpcLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVpcLinkAsync(array $args = [])
 */
class ApiGatewayClient extends AwsClient
{
    public function __construct(array $args)
    {
        parent::__construct($args);
        $stack = $this->getHandlerList();
        $stack->appendBuild([__CLASS__, '_add_accept_header']);
    }

    public static function _add_accept_header(callable $handler)
    {
        return function (
            CommandInterface $command,
            RequestInterface $request
        ) use ($handler) {
            $request = $request->withHeader('Accept', 'application/json');

            return $handler($command, $request);
        };
    }
}
