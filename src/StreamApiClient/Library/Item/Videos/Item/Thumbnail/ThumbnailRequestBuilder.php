<?php

namespace StreamApiClient\Library\Item\Videos\Item\Thumbnail;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;
use StreamApiClient\Models\StructuredSuccessResponse;

/**
 * Builds and executes requests for operations under /library/{libraryId}/videos/{videoId}/thumbnail
*/
class ThumbnailRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ThumbnailRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/library/{libraryId}/videos/{videoId}/thumbnail{?thumbnailUrl}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [SetThumbnail API Docs](https://docs.bunny.net/reference/video_setthumbnail)
     * @param StreamInterface $body Binary request body
     * @param ThumbnailRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StructuredSuccessResponse|null>
     * @throws Exception
    */
    public function post(StreamInterface $body, ?ThumbnailRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [StructuredSuccessResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [SetThumbnail API Docs](https://docs.bunny.net/reference/video_setthumbnail)
     * @param StreamInterface $body Binary request body
     * @param ThumbnailRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(StreamInterface $body, ?ThumbnailRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->setStreamContent($body, "image/*");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ThumbnailRequestBuilder
    */
    public function withUrl(string $rawUrl): ThumbnailRequestBuilder {
        return new ThumbnailRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
