<?php

namespace EdgeStorageApiClient\Item\Item;

use EdgeStorageApiClient\Item\Item\Item\WithFileNameItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /{storageZoneName}/{+path}
*/
class WithPathItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EdgeStorageApiClient.item.item.item collection
     * @param string $fileName The name of the file that you wish to download.
     * @return WithFileNameItemRequestBuilder
    */
    public function byFileName(string $fileName): WithFileNameItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['fileName'] = $fileName;
        return new WithFileNameItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WithPathItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/{storageZoneName}/{+path}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
