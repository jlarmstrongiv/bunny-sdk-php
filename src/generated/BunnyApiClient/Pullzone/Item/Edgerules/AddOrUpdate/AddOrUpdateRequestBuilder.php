<?php

namespace BunnyApiClient\Pullzone\Item\Edgerules\AddOrUpdate;

use BunnyApiClient\Models\PullZone\EdgeRule\EdgeRule;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /pullzone/{-id}/edgerules/addOrUpdate
*/
class AddOrUpdateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AddOrUpdateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/pullzone/{%2Did}/edgerules/addOrUpdate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [AddUpdateEdgeRule API Docs](https://docs.bunny.net/reference/pullzonepublic_addedgerule)
     * @param EdgeRule $body The request body
     * @param AddOrUpdateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EdgeRule|null>
     * @throws Exception
    */
    public function post(EdgeRule $body, ?AddOrUpdateRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [EdgeRule::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [AddUpdateEdgeRule API Docs](https://docs.bunny.net/reference/pullzonepublic_addedgerule)
     * @param EdgeRule $body The request body
     * @param AddOrUpdateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EdgeRule $body, ?AddOrUpdateRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AddOrUpdateRequestBuilder
    */
    public function withUrl(string $rawUrl): AddOrUpdateRequestBuilder {
        return new AddOrUpdateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
