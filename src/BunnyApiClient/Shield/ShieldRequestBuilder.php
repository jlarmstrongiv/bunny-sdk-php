<?php

namespace BunnyApiClient\Shield;

use BunnyApiClient\Shield\Metrics\MetricsRequestBuilder;
use BunnyApiClient\Shield\RateLimit\RateLimitRequestBuilder;
use BunnyApiClient\Shield\RateLimits\RateLimitsRequestBuilder;
use BunnyApiClient\Shield\ShieldZone\ShieldZoneRequestBuilder;
use BunnyApiClient\Shield\ShieldZones\ShieldZonesRequestBuilder;
use BunnyApiClient\Shield\Waf\WafRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /shield
*/
class ShieldRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The metrics property
    */
    public function metrics(): MetricsRequestBuilder {
        return new MetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The rateLimit property
    */
    public function rateLimit(): RateLimitRequestBuilder {
        return new RateLimitRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The rateLimits property
    */
    public function rateLimits(): RateLimitsRequestBuilder {
        return new RateLimitsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The shieldZone property
    */
    public function shieldZone(): ShieldZoneRequestBuilder {
        return new ShieldZoneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The shieldZones property
    */
    public function shieldZones(): ShieldZonesRequestBuilder {
        return new ShieldZonesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The waf property
    */
    public function waf(): WafRequestBuilder {
        return new WafRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ShieldRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shield');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
