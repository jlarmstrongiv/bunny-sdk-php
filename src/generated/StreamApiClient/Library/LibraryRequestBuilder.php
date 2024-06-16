<?php

namespace StreamApiClient\Library;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use StreamApiClient\Library\Item\WithLibraryItemRequestBuilder;

/**
 * Builds and executes requests for operations under /library
*/
class LibraryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the StreamApiClient.library.item collection
     * @param int $libraryId Unique identifier of the item
     * @return WithLibraryItemRequestBuilder
    */
    public function byLibraryId(int $libraryId): WithLibraryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['libraryId'] = $libraryId;
        return new WithLibraryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LibraryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/library');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
