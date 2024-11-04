<?php

namespace BunnyApiClient\Shield\ShieldZone\GetByPullzone;

use BunnyApiClient\Shield\ShieldZone\GetByPullzone\Item\WithPullZoneItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /shield/shield-zone/get-by-pullzone
*/
class GetByPullzoneRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the BunnyApiClient.shield.shieldZone.getByPullzone.item collection
     * @param int $pullZoneId Unique identifier of the item
     * @return WithPullZoneItemRequestBuilder
    */
    public function byPullZoneId(int $pullZoneId): WithPullZoneItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['pullZoneId'] = $pullZoneId;
        return new WithPullZoneItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GetByPullzoneRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shield/shield-zone/get-by-pullzone');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
