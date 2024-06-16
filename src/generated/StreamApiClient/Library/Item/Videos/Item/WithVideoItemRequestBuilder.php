<?php

namespace StreamApiClient\Library\Item\Videos\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use StreamApiClient\Library\Item\Videos\Item\Captions\CaptionsRequestBuilder;
use StreamApiClient\Library\Item\Videos\Item\Heatmap\HeatmapRequestBuilder;
use StreamApiClient\Library\Item\Videos\Item\Play\PlayRequestBuilder;
use StreamApiClient\Library\Item\Videos\Item\Reencode\ReencodeRequestBuilder;
use StreamApiClient\Library\Item\Videos\Item\Repackage\RepackageRequestBuilder;
use StreamApiClient\Library\Item\Videos\Item\Thumbnail\ThumbnailRequestBuilder;
use StreamApiClient\Library\Item\Videos\Item\Transcribe\TranscribeRequestBuilder;
use StreamApiClient\Models\ManageVideos\Video;
use StreamApiClient\Models\ManageVideos\VideoCreate;
use StreamApiClient\Models\StructuredSuccessResponse;

/**
 * Builds and executes requests for operations under /library/{libraryId}/videos/{videoId}
*/
class WithVideoItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The captions property
    */
    public function captions(): CaptionsRequestBuilder {
        return new CaptionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The heatmap property
    */
    public function heatmap(): HeatmapRequestBuilder {
        return new HeatmapRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The play property
    */
    public function play(): PlayRequestBuilder {
        return new PlayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reencode property
    */
    public function reencode(): ReencodeRequestBuilder {
        return new ReencodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The repackage property
    */
    public function repackage(): RepackageRequestBuilder {
        return new RepackageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The thumbnail property
    */
    public function thumbnail(): ThumbnailRequestBuilder {
        return new ThumbnailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The transcribe property
    */
    public function transcribe(): TranscribeRequestBuilder {
        return new TranscribeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithVideoItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/library/{libraryId}/videos/{videoId}{?enabledResolutions*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [DeleteVideo API Docs](https://docs.bunny.net/reference/video_deletevideo)
     * @param WithVideoItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StructuredSuccessResponse|null>
     * @throws Exception
    */
    public function delete(?WithVideoItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [StructuredSuccessResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [GetVideo API Docs](https://docs.bunny.net/reference/video_getvideo)
     * @param WithVideoItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Video|null>
     * @throws Exception
    */
    public function get(?WithVideoItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Video::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [UpdateVideo API Docs](https://docs.bunny.net/reference/video_updatevideo)
     * @param VideoCreate $body The request body
     * @param WithVideoItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StructuredSuccessResponse|null>
     * @throws Exception
    */
    public function post(VideoCreate $body, ?WithVideoItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [StructuredSuccessResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [UploadVideo API Docs](https://docs.bunny.net/reference/video_uploadvideo)
     * @param WithVideoItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StructuredSuccessResponse|null>
     * @throws Exception
    */
    public function put(?WithVideoItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [StructuredSuccessResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [DeleteVideo API Docs](https://docs.bunny.net/reference/video_deletevideo)
     * @param WithVideoItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithVideoItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * [GetVideo API Docs](https://docs.bunny.net/reference/video_getvideo)
     * @param WithVideoItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithVideoItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * [UpdateVideo API Docs](https://docs.bunny.net/reference/video_updatevideo)
     * @param VideoCreate $body The request body
     * @param WithVideoItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(VideoCreate $body, ?WithVideoItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
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
     * [UploadVideo API Docs](https://docs.bunny.net/reference/video_uploadvideo)
     * @param WithVideoItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(?WithVideoItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithVideoItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithVideoItemRequestBuilder {
        return new WithVideoItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
