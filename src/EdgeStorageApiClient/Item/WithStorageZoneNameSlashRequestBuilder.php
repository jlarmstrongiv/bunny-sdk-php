<?php

namespace EdgeStorageApiClient\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /{storageZoneName}/
*/
class WithStorageZoneNameSlashRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithStorageZoneNameSlashRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $storageZoneName The name of your storage zone where you are connecting to.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $storageZoneName = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/{storageZoneName}/');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['storageZoneName'] = $storageZoneName;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [DownloadZip API Docs](https://toshy.github.io/BunnyNet-PHP/edge-storage-api/#download-zip)
     * @param WithStorageZoneNameSlashPostRequestBody $body The request body
     * @param WithStorageZoneNameSlashRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function post(WithStorageZoneNameSlashPostRequestBody $body, ?WithStorageZoneNameSlashRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, null);
        return $result;
    }

    /**
     * [DownloadZip API Docs](https://toshy.github.io/BunnyNet-PHP/edge-storage-api/#download-zip)
     * @param WithStorageZoneNameSlashPostRequestBody $body The request body
     * @param WithStorageZoneNameSlashRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WithStorageZoneNameSlashPostRequestBody $body, ?WithStorageZoneNameSlashRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/octet-stream");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithStorageZoneNameSlashRequestBuilder
    */
    public function withUrl(string $rawUrl): WithStorageZoneNameSlashRequestBuilder {
        return new WithStorageZoneNameSlashRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
