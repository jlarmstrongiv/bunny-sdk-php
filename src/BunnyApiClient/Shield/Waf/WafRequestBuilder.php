<?php

namespace BunnyApiClient\Shield\Waf;

use BunnyApiClient\Shield\Waf\CustomRule\CustomRuleRequestBuilder;
use BunnyApiClient\Shield\Waf\CustomRules\CustomRulesRequestBuilder;
use BunnyApiClient\Shield\Waf\EngineConfig\EngineConfigRequestBuilder;
use BunnyApiClient\Shield\Waf\Enums\EnumsRequestBuilder;
use BunnyApiClient\Shield\Waf\Profiles\ProfilesRequestBuilder;
use BunnyApiClient\Shield\Waf\Rules\RulesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /shield/waf
*/
class WafRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The customRule property
    */
    public function customRule(): CustomRuleRequestBuilder {
        return new CustomRuleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The customRules property
    */
    public function customRules(): CustomRulesRequestBuilder {
        return new CustomRulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The engineConfig property
    */
    public function engineConfig(): EngineConfigRequestBuilder {
        return new EngineConfigRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The enums property
    */
    public function enums(): EnumsRequestBuilder {
        return new EnumsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The profiles property
    */
    public function profiles(): ProfilesRequestBuilder {
        return new ProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The rules property
    */
    public function rules(): RulesRequestBuilder {
        return new RulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WafRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shield/waf');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
