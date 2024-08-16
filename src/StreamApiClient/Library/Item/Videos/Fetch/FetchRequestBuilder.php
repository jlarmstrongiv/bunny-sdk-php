<?php

namespace StreamApiClient\Library\Item\Videos\Fetch;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use StreamApiClient\Models\StructuredSuccessResponse;

/**
 * Builds and executes requests for operations under /library/{libraryId}/videos/fetch
*/
class FetchRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FetchRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/library/{libraryId}/videos/fetch{?collectionId,thumbnailTime}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [FetchVideo API Docs](https://docs.bunny.net/reference/video_fetchnewvideo)
     * @param FetchPostRequestBody $body The request body
     * @param FetchRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StructuredSuccessResponse|null>
     * @throws Exception
    */
    public function post(FetchPostRequestBody $body, ?FetchRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [StructuredSuccessResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [FetchVideo API Docs](https://docs.bunny.net/reference/video_fetchnewvideo)
     * @param FetchPostRequestBody $body The request body
     * @param FetchRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(FetchPostRequestBody $body, ?FetchRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return FetchRequestBuilder
    */
    public function withUrl(string $rawUrl): FetchRequestBuilder {
        return new FetchRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
