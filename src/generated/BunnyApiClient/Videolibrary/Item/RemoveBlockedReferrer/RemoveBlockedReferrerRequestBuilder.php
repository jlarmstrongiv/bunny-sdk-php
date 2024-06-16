<?php

namespace BunnyApiClient\Videolibrary\Item\RemoveBlockedReferrer;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /videolibrary/{id}/removeBlockedReferrer
*/
class RemoveBlockedReferrerRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RemoveBlockedReferrerRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/videolibrary/{id}/removeBlockedReferrer');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [RemoveBlockedReferer API Docs](https://docs.bunny.net/reference/videolibrarypublic_removeblockedreferrer)
     * @param RemoveBlockedReferrerPostRequestBody $body The request body
     * @param RemoveBlockedReferrerRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(RemoveBlockedReferrerPostRequestBody $body, ?RemoveBlockedReferrerRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * [RemoveBlockedReferer API Docs](https://docs.bunny.net/reference/videolibrarypublic_removeblockedreferrer)
     * @param RemoveBlockedReferrerPostRequestBody $body The request body
     * @param RemoveBlockedReferrerRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RemoveBlockedReferrerPostRequestBody $body, ?RemoveBlockedReferrerRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RemoveBlockedReferrerRequestBuilder
    */
    public function withUrl(string $rawUrl): RemoveBlockedReferrerRequestBuilder {
        return new RemoveBlockedReferrerRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
