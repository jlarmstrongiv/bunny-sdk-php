<?php

namespace BunnyApiClient\Pullzone\SetZoneSecurityEnabled;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /pullzone/setZoneSecurityEnabled
*/
class SetZoneSecurityEnabledRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SetZoneSecurityEnabledRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/pullzone/setZoneSecurityEnabled');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [SetZoneSecurityEnabled API Docs](https://toshy.github.io/BunnyNet-PHP/base-api/#set-zone-security-enabled)
     * @param SetZoneSecurityEnabledPostRequestBody $body The request body
     * @param SetZoneSecurityEnabledRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(SetZoneSecurityEnabledPostRequestBody $body, ?SetZoneSecurityEnabledRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * [SetZoneSecurityEnabled API Docs](https://toshy.github.io/BunnyNet-PHP/base-api/#set-zone-security-enabled)
     * @param SetZoneSecurityEnabledPostRequestBody $body The request body
     * @param SetZoneSecurityEnabledRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SetZoneSecurityEnabledPostRequestBody $body, ?SetZoneSecurityEnabledRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SetZoneSecurityEnabledRequestBuilder
    */
    public function withUrl(string $rawUrl): SetZoneSecurityEnabledRequestBuilder {
        return new SetZoneSecurityEnabledRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
