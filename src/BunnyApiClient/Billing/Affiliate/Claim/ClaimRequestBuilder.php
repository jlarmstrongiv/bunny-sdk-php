<?php

namespace BunnyApiClient\Billing\Affiliate\Claim;

use BunnyApiClient\Models\Billing\ClaimAffiliateCredits\ClaimAffiliateCreditsResult;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /billing/affiliate/claim
*/
class ClaimRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ClaimRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/billing/affiliate/claim');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [ClaimAffiliateCredits API Docs](https://docs.bunny.net/reference/billingpublic_affiliateclaim)
     * @param ClaimRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ClaimAffiliateCreditsResult|null>
     * @throws Exception
    */
    public function post(?ClaimRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ClaimAffiliateCreditsResult::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [ClaimAffiliateCredits API Docs](https://docs.bunny.net/reference/billingpublic_affiliateclaim)
     * @param ClaimRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?ClaimRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return ClaimRequestBuilder
    */
    public function withUrl(string $rawUrl): ClaimRequestBuilder {
        return new ClaimRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
