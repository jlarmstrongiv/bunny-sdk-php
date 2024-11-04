<?php

namespace BunnyApiClient\Pullzone\SetZoneSecurityIncludeHashRemoteIPEnabled;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /pullzone/setZoneSecurityIncludeHashRemoteIPEnabled
*/
class SetZoneSecurityIncludeHashRemoteIPEnabledRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SetZoneSecurityIncludeHashRemoteIPEnabledRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/pullzone/setZoneSecurityIncludeHashRemoteIPEnabled');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [TokenIpValidation API Docs](https://toshy.github.io/BunnyNet-PHP/base-api/#set-zone-security-include-hash-remote-ip-enabled)
     * @param SetZoneSecurityIncludeHashRemoteIPEnabledPostRequestBody $body The request body
     * @param SetZoneSecurityIncludeHashRemoteIPEnabledRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(SetZoneSecurityIncludeHashRemoteIPEnabledPostRequestBody $body, ?SetZoneSecurityIncludeHashRemoteIPEnabledRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * [TokenIpValidation API Docs](https://toshy.github.io/BunnyNet-PHP/base-api/#set-zone-security-include-hash-remote-ip-enabled)
     * @param SetZoneSecurityIncludeHashRemoteIPEnabledPostRequestBody $body The request body
     * @param SetZoneSecurityIncludeHashRemoteIPEnabledRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SetZoneSecurityIncludeHashRemoteIPEnabledPostRequestBody $body, ?SetZoneSecurityIncludeHashRemoteIPEnabledRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SetZoneSecurityIncludeHashRemoteIPEnabledRequestBuilder
    */
    public function withUrl(string $rawUrl): SetZoneSecurityIncludeHashRemoteIPEnabledRequestBuilder {
        return new SetZoneSecurityIncludeHashRemoteIPEnabledRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
