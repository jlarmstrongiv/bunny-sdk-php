<?php

namespace StreamApiClient\Library\Item\Videos;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use StreamApiClient\Library\Item\Videos\Fetch\FetchRequestBuilder;
use StreamApiClient\Library\Item\Videos\Item\WithVideoItemRequestBuilder;
use StreamApiClient\Models\ManageVideos\Video;
use StreamApiClient\Models\ManageVideos\VideoCreate;

/**
 * Builds and executes requests for operations under /library/{libraryId}/videos
*/
class VideosRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The fetch property
    */
    public function fetch(): FetchRequestBuilder {
        return new FetchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the StreamApiClient.library.item.videos.item collection
     * @param string $videoId Unique identifier of the item
     * @return WithVideoItemRequestBuilder
    */
    public function byVideoId(string $videoId): WithVideoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['videoId'] = $videoId;
        return new WithVideoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new VideosRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/library/{libraryId}/videos?itemsPerPage={itemsPerPage}&orderBy={orderBy}&page={page}{&collection*,search*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [ListVideos API Docs](https://docs.bunny.net/reference/video_list)
     * @param VideosRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VideosGetResponse|null>
     * @throws Exception
    */
    public function get(?VideosRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [VideosGetResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [CreateVideo API Docs](https://docs.bunny.net/reference/video_createvideo)
     * @param VideoCreate $body The request body
     * @param VideosRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Video|null>
     * @throws Exception
    */
    public function post(VideoCreate $body, ?VideosRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Video::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [ListVideos API Docs](https://docs.bunny.net/reference/video_list)
     * @param VideosRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?VideosRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * [CreateVideo API Docs](https://docs.bunny.net/reference/video_createvideo)
     * @param VideoCreate $body The request body
     * @param VideosRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(VideoCreate $body, ?VideosRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/library/{libraryId}/videos';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return VideosRequestBuilder
    */
    public function withUrl(string $rawUrl): VideosRequestBuilder {
        return new VideosRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
