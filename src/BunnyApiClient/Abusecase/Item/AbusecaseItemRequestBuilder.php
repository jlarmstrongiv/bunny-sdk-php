<?php

namespace BunnyApiClient\Abusecase\Item;

use BunnyApiClient\Abusecase\Item\Check\CheckRequestBuilder;
use BunnyApiClient\Abusecase\Item\Resolve\ResolveRequestBuilder;
use BunnyApiClient\Models\AbuseCases\AbuseCase;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /abusecase/{id}
*/
class AbusecaseItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The check property
    */
    public function check(): CheckRequestBuilder {
        return new CheckRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The resolve property
    */
    public function resolve(): ResolveRequestBuilder {
        return new ResolveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AbusecaseItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/abusecase/{id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [GetAbuseCase API Docs](https://docs.bunny.net/reference/abusecasepublic_getabusecase2)
     * @param AbusecaseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AbuseCase|null>
     * @throws Exception
    */
    public function get(?AbusecaseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [AbuseCase::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [GetAbuseCase API Docs](https://docs.bunny.net/reference/abusecasepublic_getabusecase2)
     * @param AbusecaseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AbusecaseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AbusecaseItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AbusecaseItemRequestBuilder {
        return new AbusecaseItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
