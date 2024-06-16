<?php

namespace BunnyApiClient\Videolibrary\Item;

use BunnyApiClient\Models\StreamVideoLibrary\VideoLibrary;
use BunnyApiClient\Videolibrary\Item\AddAllowedReferrer\AddAllowedReferrerRequestBuilder;
use BunnyApiClient\Videolibrary\Item\AddBlockedReferrer\AddBlockedReferrerRequestBuilder;
use BunnyApiClient\Videolibrary\Item\RemoveAllowedReferrer\RemoveAllowedReferrerRequestBuilder;
use BunnyApiClient\Videolibrary\Item\RemoveBlockedReferrer\RemoveBlockedReferrerRequestBuilder;
use BunnyApiClient\Videolibrary\Item\ResetApiKey\ResetApiKeyRequestBuilder;
use BunnyApiClient\Videolibrary\Item\Watermark\WatermarkRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /videolibrary/{id}
*/
class VideolibraryItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The addAllowedReferrer property
    */
    public function addAllowedReferrer(): AddAllowedReferrerRequestBuilder {
        return new AddAllowedReferrerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The addBlockedReferrer property
    */
    public function addBlockedReferrer(): AddBlockedReferrerRequestBuilder {
        return new AddBlockedReferrerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The removeAllowedReferrer property
    */
    public function removeAllowedReferrer(): RemoveAllowedReferrerRequestBuilder {
        return new RemoveAllowedReferrerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The removeBlockedReferrer property
    */
    public function removeBlockedReferrer(): RemoveBlockedReferrerRequestBuilder {
        return new RemoveBlockedReferrerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The resetApiKey property
    */
    public function resetApiKey(): ResetApiKeyRequestBuilder {
        return new ResetApiKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The watermark property
    */
    public function watermark(): WatermarkRequestBuilder {
        return new WatermarkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new VideolibraryItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/videolibrary/{id}?includeAccessKey={includeAccessKey}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [DeleteVideoLibrary API Docs](https://docs.bunny.net/reference/videolibrarypublic_delete)
     * @param VideolibraryItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?VideolibraryItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * [GetVideoLibrary API Docs](https://docs.bunny.net/reference/videolibrarypublic_index2)
     * @param VideolibraryItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VideoLibrary|null>
     * @throws Exception
    */
    public function get(?VideolibraryItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [VideoLibrary::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [UpdateVideoLibrary API Docs](https://docs.bunny.net/reference/videolibrarypublic_update)
     * @param VideolibraryPostRequestBody $body The template for adding optional properties.
     * @param VideolibraryItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VideoLibrary|null>
     * @throws Exception
    */
    public function post(VideolibraryPostRequestBody $body, ?VideolibraryItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [VideoLibrary::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [DeleteVideoLibrary API Docs](https://docs.bunny.net/reference/videolibrarypublic_delete)
     * @param VideolibraryItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?VideolibraryItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/videolibrary/{id}';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * [GetVideoLibrary API Docs](https://docs.bunny.net/reference/videolibrarypublic_index2)
     * @param VideolibraryItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?VideolibraryItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * [UpdateVideoLibrary API Docs](https://docs.bunny.net/reference/videolibrarypublic_update)
     * @param VideolibraryPostRequestBody $body The template for adding optional properties.
     * @param VideolibraryItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(VideolibraryPostRequestBody $body, ?VideolibraryItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/videolibrary/{id}';
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
     * @return VideolibraryItemRequestBuilder
    */
    public function withUrl(string $rawUrl): VideolibraryItemRequestBuilder {
        return new VideolibraryItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
