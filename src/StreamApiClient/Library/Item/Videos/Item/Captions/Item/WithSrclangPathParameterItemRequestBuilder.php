<?php

namespace StreamApiClient\Library\Item\Videos\Item\Captions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use StreamApiClient\Models\StructuredSuccessResponse;

/**
 * Builds and executes requests for operations under /library/{libraryId}/videos/{videoId}/captions/{srclangPathParameter}
*/
class WithSrclangPathParameterItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithSrclangPathParameterItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/library/{libraryId}/videos/{videoId}/captions/{srclangPathParameter}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [DeleteCaption API Docs](https://docs.bunny.net/reference/video_deletecaption)
     * @param WithSrclangPathParameterItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StructuredSuccessResponse|null>
     * @throws Exception
    */
    public function delete(?WithSrclangPathParameterItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [StructuredSuccessResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [AddCaption API Docs](https://docs.bunny.net/reference/video_addcaption)
     * @param WithSrclangPathParameterPostRequestBody $body The request body
     * @param WithSrclangPathParameterItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StructuredSuccessResponse|null>
     * @throws Exception
    */
    public function post(WithSrclangPathParameterPostRequestBody $body, ?WithSrclangPathParameterItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [StructuredSuccessResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [DeleteCaption API Docs](https://docs.bunny.net/reference/video_deletecaption)
     * @param WithSrclangPathParameterItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithSrclangPathParameterItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * [AddCaption API Docs](https://docs.bunny.net/reference/video_addcaption)
     * @param WithSrclangPathParameterPostRequestBody $body The request body
     * @param WithSrclangPathParameterItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WithSrclangPathParameterPostRequestBody $body, ?WithSrclangPathParameterItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithSrclangPathParameterItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithSrclangPathParameterItemRequestBuilder {
        return new WithSrclangPathParameterItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
