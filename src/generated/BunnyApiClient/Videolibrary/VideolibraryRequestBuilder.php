<?php

namespace BunnyApiClient\Videolibrary;

use BunnyApiClient\Models\StreamVideoLibrary\VideoLibrary;
use BunnyApiClient\Videolibrary\Item\VideolibraryItemRequestBuilder;
use BunnyApiClient\Videolibrary\Languages\LanguagesRequestBuilder;
use BunnyApiClient\Videolibrary\ResetApiKey\ResetApiKeyRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /videolibrary
*/
class VideolibraryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The languages property
    */
    public function languages(): LanguagesRequestBuilder {
        return new LanguagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The resetApiKey property
    */
    public function resetApiKey(): ResetApiKeyRequestBuilder {
        return new ResetApiKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the BunnyApiClient.videolibrary.item collection
     * @param int $id The ID of the Video Library that will be returned
     * @return VideolibraryItemRequestBuilder
    */
    public function byId(int $id): VideolibraryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new VideolibraryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new VideolibraryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/videolibrary?includeAccessKey={includeAccessKey}&page={page}&perPage={perPage}&search={search}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [ListVideoLibraries API Docs](https://docs.bunny.net/reference/videolibrarypublic_index)
     * @param VideolibraryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VideolibraryGetResponse|null>
     * @throws Exception
    */
    public function get(?VideolibraryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [VideolibraryGetResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [AddVideoLibrary API Docs](https://docs.bunny.net/reference/videolibrarypublic_add)
     * @param VideolibraryPostRequestBody $body The request body
     * @param VideolibraryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VideoLibrary|null>
     * @throws Exception
    */
    public function post(VideolibraryPostRequestBody $body, ?VideolibraryRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [VideoLibrary::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [ListVideoLibraries API Docs](https://docs.bunny.net/reference/videolibrarypublic_index)
     * @param VideolibraryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?VideolibraryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * [AddVideoLibrary API Docs](https://docs.bunny.net/reference/videolibrarypublic_add)
     * @param VideolibraryPostRequestBody $body The request body
     * @param VideolibraryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(VideolibraryPostRequestBody $body, ?VideolibraryRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/videolibrary';
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
     * @return VideolibraryRequestBuilder
    */
    public function withUrl(string $rawUrl): VideolibraryRequestBuilder {
        return new VideolibraryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
