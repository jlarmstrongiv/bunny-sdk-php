<?php

namespace BunnyApiClient\Pullzone\Item\RemoveBlockedIp;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /pullzone/{-id}/removeBlockedIp
*/
class RemoveBlockedIpRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RemoveBlockedIpRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/pullzone/{%2Did}/removeBlockedIp');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [RemoveBlockedIp API Docs](https://docs.bunny.net/reference/pullzonepublic_removeblockedip)
     * @param RemoveBlockedIpPostRequestBody $body The request body
     * @param RemoveBlockedIpRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(RemoveBlockedIpPostRequestBody $body, ?RemoveBlockedIpRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * [RemoveBlockedIp API Docs](https://docs.bunny.net/reference/pullzonepublic_removeblockedip)
     * @param RemoveBlockedIpPostRequestBody $body The request body
     * @param RemoveBlockedIpRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RemoveBlockedIpPostRequestBody $body, ?RemoveBlockedIpRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RemoveBlockedIpRequestBuilder
    */
    public function withUrl(string $rawUrl): RemoveBlockedIpRequestBuilder {
        return new RemoveBlockedIpRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
