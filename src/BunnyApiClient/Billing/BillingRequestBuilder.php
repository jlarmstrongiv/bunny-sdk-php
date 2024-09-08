<?php

namespace BunnyApiClient\Billing;

use BunnyApiClient\Billing\Affiliate\AffiliateRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /billing
*/
class BillingRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The affiliate property
    */
    public function affiliate(): AffiliateRequestBuilder {
        return new AffiliateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new BillingRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/billing');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
