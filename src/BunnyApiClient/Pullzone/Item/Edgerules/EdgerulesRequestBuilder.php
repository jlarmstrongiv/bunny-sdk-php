<?php

namespace BunnyApiClient\Pullzone\Item\Edgerules;

use BunnyApiClient\Pullzone\Item\Edgerules\AddOrUpdate\AddOrUpdateRequestBuilder;
use BunnyApiClient\Pullzone\Item\Edgerules\Item\WithEdgeRuleItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /pullzone/{-id}/edgerules
*/
class EdgerulesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The addOrUpdate property
    */
    public function addOrUpdate(): AddOrUpdateRequestBuilder {
        return new AddOrUpdateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the BunnyApiClient.pullzone.item.edgerules.item collection
     * @param string $edgeRuleId The ID of the Edge Rule that should be deleted
     * @return WithEdgeRuleItemRequestBuilder
    */
    public function byEdgeRuleId(string $edgeRuleId): WithEdgeRuleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['edgeRuleId'] = $edgeRuleId;
        return new WithEdgeRuleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EdgerulesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/pullzone/{%2Did}/edgerules');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
