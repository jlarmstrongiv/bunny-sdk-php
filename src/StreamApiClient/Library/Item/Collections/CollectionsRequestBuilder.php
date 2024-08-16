<?php

namespace StreamApiClient\Library\Item\Collections;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use StreamApiClient\Library\Item\Collections\Item\WithCollectionItemRequestBuilder;
use StreamApiClient\Models\ManageCollections\Collection;

/**
 * Builds and executes requests for operations under /library/{libraryId}/collections
*/
class CollectionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the StreamApiClient.library.item.collections.item collection
     * @param string $collectionId Unique identifier of the item
     * @return WithCollectionItemRequestBuilder
    */
    public function byCollectionId(string $collectionId): WithCollectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['collectionId'] = $collectionId;
        return new WithCollectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CollectionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/library/{libraryId}/collections?includeThumbnails={includeThumbnails}&itemsPerPage={itemsPerPage}&orderBy={orderBy}&page={page}{&search}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [GetCollectionList API Docs](https://docs.bunny.net/reference/collection_list)
     * @param CollectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CollectionsGetResponse|null>
     * @throws Exception
    */
    public function get(?CollectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CollectionsGetResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [CreateCollection API Docs](https://docs.bunny.net/reference/collection_createcollection)
     * @param Collection $body The request body
     * @param CollectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Collection|null>
     * @throws Exception
    */
    public function post(Collection $body, ?CollectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Collection::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [GetCollectionList API Docs](https://docs.bunny.net/reference/collection_list)
     * @param CollectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CollectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * [CreateCollection API Docs](https://docs.bunny.net/reference/collection_createcollection)
     * @param Collection $body The request body
     * @param CollectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(Collection $body, ?CollectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/library/{libraryId}/collections';
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
     * @return CollectionsRequestBuilder
    */
    public function withUrl(string $rawUrl): CollectionsRequestBuilder {
        return new CollectionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
