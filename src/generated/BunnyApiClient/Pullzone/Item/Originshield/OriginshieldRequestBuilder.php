<?php

namespace BunnyApiClient\Pullzone\Item\Originshield;

use BunnyApiClient\Pullzone\Item\Originshield\Queuestatistics\QueuestatisticsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /pullzone/{-id}/originshield
*/
class OriginshieldRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The queuestatistics property
    */
    public function queuestatistics(): QueuestatisticsRequestBuilder {
        return new QueuestatisticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new OriginshieldRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/pullzone/{%2Did}/originshield');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
