<?php

namespace BunnyApiClient\Billing\Affiliate;

use BunnyApiClient\Billing\Affiliate\Claim\ClaimRequestBuilder;
use BunnyApiClient\Models\Billing\GetAffiliateDetails\AffiliateDetailsResult;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /billing/affiliate
*/
class AffiliateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The claim property
    */
    public function claim(): ClaimRequestBuilder {
        return new ClaimRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AffiliateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/billing/affiliate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [GetAffiliateDetails API Docs](https://docs.bunny.net/reference/billingpublic_affiliatedetails)
     * @param AffiliateRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AffiliateDetailsResult|null>
     * @throws Exception
    */
    public function get(?AffiliateRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [AffiliateDetailsResult::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [GetAffiliateDetails API Docs](https://docs.bunny.net/reference/billingpublic_affiliatedetails)
     * @param AffiliateRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AffiliateRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AffiliateRequestBuilder
    */
    public function withUrl(string $rawUrl): AffiliateRequestBuilder {
        return new AffiliateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
