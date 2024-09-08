<?php

namespace StreamApiClient\Library\Item\Videos\Item\Resolutions\Cleanup;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use StreamApiClient\Models\ManageVideos\CleanupUnconfiguredResolutions\CleanupUnconfiguredResolutionsResult;

/**
 * Builds and executes requests for operations under /library/{libraryId}/videos/{videoId}/resolutions/cleanup
*/
class CleanupRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CleanupRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/library/{libraryId}/videos/{videoId}/resolutions/cleanup{?deleteMp4Files,deleteNonConfiguredResolutions,deleteOriginal,resolutionsToDelete}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [CleanupUnconfiguredResolutions API Docs](https://docs.bunny.net/reference/video_deleteresolutions)
     * @param CleanupRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CleanupUnconfiguredResolutionsResult|null>
     * @throws Exception
    */
    public function post(?CleanupRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CleanupUnconfiguredResolutionsResult::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [CleanupUnconfiguredResolutions API Docs](https://docs.bunny.net/reference/video_deleteresolutions)
     * @param CleanupRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?CleanupRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return CleanupRequestBuilder
    */
    public function withUrl(string $rawUrl): CleanupRequestBuilder {
        return new CleanupRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
