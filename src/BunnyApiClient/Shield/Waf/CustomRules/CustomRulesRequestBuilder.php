<?php

namespace BunnyApiClient\Shield\Waf\CustomRules;

use BunnyApiClient\Shield\Waf\CustomRules\Item\WithShieldZoneItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /shield/waf/custom-rules
*/
class CustomRulesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the BunnyApiClient.shield.waf.customRules.item collection
     * @param int $shieldZoneId Unique identifier of the item
     * @return WithShieldZoneItemRequestBuilder
    */
    public function byShieldZoneId(int $shieldZoneId): WithShieldZoneItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['shieldZoneId'] = $shieldZoneId;
        return new WithShieldZoneItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CustomRulesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shield/waf/custom-rules');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
