<?php

namespace BunnyApiClient\Shield\Metrics\Waf\Triggered;

use BunnyApiClient\Shield\Metrics\Waf\Triggered\Item\WithShieldZoneItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /shield/metrics/waf/triggered
*/
class TriggeredRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the BunnyApiClient.shield.metrics.waf.triggered.item collection
     * @param int $shieldZoneId Unique identifier of the item
     * @return WithShieldZoneItemRequestBuilder
    */
    public function byShieldZoneId(int $shieldZoneId): WithShieldZoneItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['shieldZoneId'] = $shieldZoneId;
        return new WithShieldZoneItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TriggeredRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shield/metrics/waf/triggered');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}