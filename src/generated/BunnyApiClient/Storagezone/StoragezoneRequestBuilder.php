<?php

namespace BunnyApiClient\Storagezone;

use BunnyApiClient\Models\StorageZone\StorageZone;
use BunnyApiClient\Models\StorageZone\StorageZoneCreate;
use BunnyApiClient\Storagezone\Checkavailability\CheckavailabilityRequestBuilder;
use BunnyApiClient\Storagezone\Item\StoragezoneItemRequestBuilder;
use BunnyApiClient\Storagezone\ResetReadOnlyPassword\ResetReadOnlyPasswordRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /storagezone
*/
class StoragezoneRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The checkavailability property
    */
    public function checkavailability(): CheckavailabilityRequestBuilder {
        return new CheckavailabilityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The resetReadOnlyPassword property
    */
    public function resetReadOnlyPassword(): ResetReadOnlyPasswordRequestBuilder {
        return new ResetReadOnlyPasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the BunnyApiClient.storagezone.item collection
     * @param int $id Unique identifier of the item
     * @return StoragezoneItemRequestBuilder
    */
    public function byId(int $id): StoragezoneItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new StoragezoneItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new StoragezoneRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/storagezone?includeDeleted={includeDeleted}&page={page}&perPage={perPage}{&search*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [ListStorageZones API Docs](https://docs.bunny.net/reference/storagezonepublic_index)
     * @param StoragezoneRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StoragezoneGetResponse|null>
     * @throws Exception
    */
    public function get(?StoragezoneRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [StoragezoneGetResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [AddStorageZone API Docs](https://docs.bunny.net/reference/storagezonepublic_add)
     * @param StorageZoneCreate $body The request body
     * @param StoragezoneRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StorageZone|null>
     * @throws Exception
    */
    public function post(StorageZoneCreate $body, ?StoragezoneRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [StorageZone::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [ListStorageZones API Docs](https://docs.bunny.net/reference/storagezonepublic_index)
     * @param StoragezoneRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?StoragezoneRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * [AddStorageZone API Docs](https://docs.bunny.net/reference/storagezonepublic_add)
     * @param StorageZoneCreate $body The request body
     * @param StoragezoneRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(StorageZoneCreate $body, ?StoragezoneRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/storagezone';
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
     * @return StoragezoneRequestBuilder
    */
    public function withUrl(string $rawUrl): StoragezoneRequestBuilder {
        return new StoragezoneRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
