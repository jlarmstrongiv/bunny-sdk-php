<?php

namespace BunnyApiClient\Compute\Script\Item;

use BunnyApiClient\Compute\Script\Item\Code\CodeRequestBuilder;
use BunnyApiClient\Compute\Script\Item\Publish\PublishRequestBuilder;
use BunnyApiClient\Compute\Script\Item\Releases\ReleasesRequestBuilder;
use BunnyApiClient\Compute\Script\Item\Variables\VariablesRequestBuilder;
use BunnyApiClient\Models\Compute\Script;
use BunnyApiClient\Models\Compute\ScriptCreate;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /compute/script/{id}
*/
class ScriptItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The code property
    */
    public function code(): CodeRequestBuilder {
        return new CodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The publish property
    */
    public function publish(): PublishRequestBuilder {
        return new PublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The releases property
    */
    public function releases(): ReleasesRequestBuilder {
        return new ReleasesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The variables property
    */
    public function variables(): VariablesRequestBuilder {
        return new VariablesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ScriptItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/compute/script/{id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [DeleteComputeScript API Docs](https://docs.bunny.net/reference/computeedgescriptpublic_delete)
     * @param ScriptItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ScriptItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * [GetComputeScript API Docs](https://docs.bunny.net/reference/computeedgescriptpublic_index2)
     * @param ScriptItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Script|null>
     * @throws Exception
    */
    public function get(?ScriptItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Script::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [UpdateComputeScript API Docs](https://docs.bunny.net/reference/computeedgescriptpublic_update)
     * @param ScriptCreate $body The request body
     * @param ScriptItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Script|null>
     * @throws Exception
    */
    public function post(ScriptCreate $body, ?ScriptItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Script::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [DeleteComputeScript API Docs](https://docs.bunny.net/reference/computeedgescriptpublic_delete)
     * @param ScriptItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ScriptItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * [GetComputeScript API Docs](https://docs.bunny.net/reference/computeedgescriptpublic_index2)
     * @param ScriptItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ScriptItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * [UpdateComputeScript API Docs](https://docs.bunny.net/reference/computeedgescriptpublic_update)
     * @param ScriptCreate $body The request body
     * @param ScriptItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ScriptCreate $body, ?ScriptItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ScriptItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ScriptItemRequestBuilder {
        return new ScriptItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
