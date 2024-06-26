<?php

namespace StreamApiClient\Library\Item;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use StreamApiClient\Library\Item\Collections\CollectionsRequestBuilder;
use StreamApiClient\Library\Item\Statistics\StatisticsRequestBuilder;
use StreamApiClient\Library\Item\Videos\VideosRequestBuilder;

/**
 * Builds and executes requests for operations under /library/{libraryId}
*/
class WithLibraryItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The collections property
    */
    public function collections(): CollectionsRequestBuilder {
        return new CollectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The statistics property
    */
    public function statistics(): StatisticsRequestBuilder {
        return new StatisticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The videos property
    */
    public function videos(): VideosRequestBuilder {
        return new VideosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithLibraryItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/library/{libraryId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
