<?php

namespace BunnyApiClient\Shield\ShieldZone;

use BunnyApiClient\Models\Shield\CreateShieldZoneRequest;
use BunnyApiClient\Models\Shield\CreateShieldZoneResponse;
use BunnyApiClient\Models\Shield\UnauthorizedResult;
use BunnyApiClient\Models\Shield\UpdateShieldZoneRequest;
use BunnyApiClient\Shield\ShieldZone\GetByPullzone\GetByPullzoneRequestBuilder;
use BunnyApiClient\Shield\ShieldZone\Item\WithShieldZoneItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /shield/shield-zone
*/
class ShieldZoneRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The getByPullzone property
    */
    public function getByPullzone(): GetByPullzoneRequestBuilder {
        return new GetByPullzoneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the BunnyApiClient.shield.shieldZone.item collection
     * @param int $shieldZoneId Unique identifier of the item
     * @return WithShieldZoneItemRequestBuilder
    */
    public function byShieldZoneId(int $shieldZoneId): WithShieldZoneItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['shieldZoneId'] = $shieldZoneId;
        return new WithShieldZoneItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ShieldZoneRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shield/shield-zone');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * @param UpdateShieldZoneRequest $body The request body
     * @param ShieldZoneRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateShieldZoneResponse|null>
     * @throws Exception
    */
    public function patch(UpdateShieldZoneRequest $body, ?ShieldZoneRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '401' => [UnauthorizedResult::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CreateShieldZoneResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * @param CreateShieldZoneRequest $body The request body
     * @param ShieldZoneRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateShieldZoneResponse|null>
     * @throws Exception
    */
    public function post(CreateShieldZoneRequest $body, ?ShieldZoneRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '401' => [UnauthorizedResult::class, 'createFromDiscriminatorValue'],
                '403' => [CreateShieldZoneResponse::class, 'createFromDiscriminatorValue'],
                '409' => [CreateShieldZoneResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CreateShieldZoneResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * @param UpdateShieldZoneRequest $body The request body
     * @param ShieldZoneRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UpdateShieldZoneRequest $body, ?ShieldZoneRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, text/plain;q=0.9");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * @param CreateShieldZoneRequest $body The request body
     * @param ShieldZoneRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateShieldZoneRequest $body, ?ShieldZoneRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, text/plain;q=0.9");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ShieldZoneRequestBuilder
    */
    public function withUrl(string $rawUrl): ShieldZoneRequestBuilder {
        return new ShieldZoneRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
