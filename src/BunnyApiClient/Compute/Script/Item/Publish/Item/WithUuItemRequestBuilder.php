<?php

namespace BunnyApiClient\Compute\Script\Item\Publish\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /compute/script/{id}/publish/{uuid}
*/
class WithUuItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithUuItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/compute/script/{id}/publish/{uuid}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [PublishComputeScript API Docs](https://docs.bunny.net/reference/computeedgescriptpublic_publish)
     * @param WithUuPostRequestBody $body The request body
     * @param WithUuItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(WithUuPostRequestBody $body, ?WithUuItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * [PublishComputeScript API Docs](https://docs.bunny.net/reference/computeedgescriptpublic_publish)
     * @param WithUuPostRequestBody $body The request body
     * @param WithUuItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WithUuPostRequestBody $body, ?WithUuItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithUuItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithUuItemRequestBuilder {
        return new WithUuItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
