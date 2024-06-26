<?php

namespace StreamApiClient\Library\Item\Videos\Item\Captions;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use StreamApiClient\Library\Item\Videos\Item\Captions\Item\WithSrclangPathParameterItemRequestBuilder;

/**
 * Builds and executes requests for operations under /library/{libraryId}/videos/{videoId}/captions
*/
class CaptionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the StreamApiClient.library.item.videos.item.captions.item collection
     * @param string $srclangPathParameter srclang specified as a path parameter
     * @return WithSrclangPathParameterItemRequestBuilder
    */
    public function bySrclangPathParameter(string $srclangPathParameter): WithSrclangPathParameterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['srclangPathParameter'] = $srclangPathParameter;
        return new WithSrclangPathParameterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CaptionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/library/{libraryId}/videos/{videoId}/captions');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
