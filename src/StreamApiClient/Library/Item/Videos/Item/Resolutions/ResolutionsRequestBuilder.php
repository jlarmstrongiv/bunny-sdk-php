<?php

namespace StreamApiClient\Library\Item\Videos\Item\Resolutions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use StreamApiClient\Library\Item\Videos\Item\Resolutions\Cleanup\CleanupRequestBuilder;
use StreamApiClient\Models\ManageVideos\VideoResolutionsInfo\VideoResolutionsInfoResult;

/**
 * Builds and executes requests for operations under /library/{libraryId}/videos/{videoId}/resolutions
*/
class ResolutionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The cleanup property
    */
    public function cleanup(): CleanupRequestBuilder {
        return new CleanupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ResolutionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/library/{libraryId}/videos/{videoId}/resolutions');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [VideoResolutionsInfo API Docs](https://docs.bunny.net/reference/video_getvideoresolutions)
     * @param ResolutionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VideoResolutionsInfoResult|null>
     * @throws Exception
    */
    public function get(?ResolutionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [VideoResolutionsInfoResult::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [VideoResolutionsInfo API Docs](https://docs.bunny.net/reference/video_getvideoresolutions)
     * @param ResolutionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ResolutionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ResolutionsRequestBuilder
    */
    public function withUrl(string $rawUrl): ResolutionsRequestBuilder {
        return new ResolutionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
