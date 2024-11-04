<?php

namespace EdgeStorageApiClient\Item\Item;

use EdgeStorageApiClient\Models\File;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /{storageZoneName}/{+path}/
*/
class WithPathSlashRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithPathSlashRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $path The directory path that you want to list.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $path = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/{storageZoneName}/{+path}/');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['path'] = $path;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [ListFiles API Docs](https://docs.bunny.net/reference/get_-storagezonename-path-)
     * @param WithPathSlashRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<File>|null>
     * @throws Exception
    */
    public function get(?WithPathSlashRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [File::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [ListFiles API Docs](https://docs.bunny.net/reference/get_-storagezonename-path-)
     * @param WithPathSlashRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithPathSlashRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithPathSlashRequestBuilder
    */
    public function withUrl(string $rawUrl): WithPathSlashRequestBuilder {
        return new WithPathSlashRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
