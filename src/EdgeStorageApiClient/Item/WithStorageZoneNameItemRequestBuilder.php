<?php

namespace EdgeStorageApiClient\Item;

use EdgeStorageApiClient\Item\Item\WithPathItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /{storageZoneName}
*/
class WithStorageZoneNameItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EdgeStorageApiClient.item.item collection
     * @param string $path The directory path that you want to list.
     * @return WithPathItemRequestBuilder
    */
    public function byPath(string $path): WithPathItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['path'] = $path;
        return new WithPathItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WithStorageZoneNameItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/{storageZoneName}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
