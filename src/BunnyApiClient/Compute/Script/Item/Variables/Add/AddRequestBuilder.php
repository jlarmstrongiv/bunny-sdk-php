<?php

namespace BunnyApiClient\Compute\Script\Item\Variables\Add;

use BunnyApiClient\Models\Compute\EdgeScriptVariable;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /compute/script/{id}/variables/add
*/
class AddRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AddRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/compute/script/{id}/variables/add');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [AddComputeScriptVariable API Docs](https://docs.bunny.net/reference/computeedgescriptpublic_addvariable)
     * @param EdgeScriptVariable $body The request body
     * @param AddRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EdgeScriptVariable|null>
     * @throws Exception
    */
    public function post(EdgeScriptVariable $body, ?AddRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [EdgeScriptVariable::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [AddComputeScriptVariable API Docs](https://docs.bunny.net/reference/computeedgescriptpublic_addvariable)
     * @param EdgeScriptVariable $body The request body
     * @param AddRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EdgeScriptVariable $body, ?AddRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AddRequestBuilder
    */
    public function withUrl(string $rawUrl): AddRequestBuilder {
        return new AddRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
