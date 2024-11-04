<?php

namespace BunnyApiClient\Shield\RateLimit;

use BunnyApiClient\Models\Shield\CreateWafRateLimitRequest;
use BunnyApiClient\Models\Shield\CustomWafRule;
use BunnyApiClient\Models\Shield\UnauthorizedResult;
use BunnyApiClient\Shield\RateLimit\Item\RateLimitItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /shield/rate-limit
*/
class RateLimitRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the BunnyApiClient.shield.rateLimit.item collection
     * @param int $id Unique identifier of the item
     * @return RateLimitItemRequestBuilder
    */
    public function byId(int $id): RateLimitItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new RateLimitItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RateLimitRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shield/rate-limit');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * @param CreateWafRateLimitRequest $body The request body
     * @param RateLimitRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomWafRule|null>
     * @throws Exception
    */
    public function post(CreateWafRateLimitRequest $body, ?RateLimitRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '401' => [UnauthorizedResult::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomWafRule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * @param CreateWafRateLimitRequest $body The request body
     * @param RateLimitRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateWafRateLimitRequest $body, ?RateLimitRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, text/plain;q=0.9");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RateLimitRequestBuilder
    */
    public function withUrl(string $rawUrl): RateLimitRequestBuilder {
        return new RateLimitRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
