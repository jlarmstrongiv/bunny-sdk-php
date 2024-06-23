<?php

namespace BunnyApiClient\Compute\Script\Item\Variables;

use BunnyApiClient\Compute\Script\Item\Variables\Add\AddRequestBuilder;
use BunnyApiClient\Compute\Script\Item\Variables\Item\WithVariableItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /compute/script/{id}/variables
*/
class VariablesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The add property
    */
    public function add(): AddRequestBuilder {
        return new AddRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the BunnyApiClient.compute.script.item.variables.item collection
     * @param int $variableId The ID of the Environment Variable that will be updated
     * @return WithVariableItemRequestBuilder
    */
    public function byVariableId(int $variableId): WithVariableItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['variableId'] = $variableId;
        return new WithVariableItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new VariablesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/compute/script/{id}/variables');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
