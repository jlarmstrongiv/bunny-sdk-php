<?php

namespace BunnyApiClient\Shield\Metrics\Waf;

use BunnyApiClient\Shield\Metrics\Waf\Blocked\BlockedRequestBuilder;
use BunnyApiClient\Shield\Metrics\Waf\Logged\LoggedRequestBuilder;
use BunnyApiClient\Shield\Metrics\Waf\Processed\ProcessedRequestBuilder;
use BunnyApiClient\Shield\Metrics\Waf\Triggered\TriggeredRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /shield/metrics/waf
*/
class WafRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The blocked property
    */
    public function blocked(): BlockedRequestBuilder {
        return new BlockedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The logged property
    */
    public function logged(): LoggedRequestBuilder {
        return new LoggedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The processed property
    */
    public function processed(): ProcessedRequestBuilder {
        return new ProcessedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The triggered property
    */
    public function triggered(): TriggeredRequestBuilder {
        return new TriggeredRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WafRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shield/metrics/waf');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
