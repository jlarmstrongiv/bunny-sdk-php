<?php

namespace BunnyApiClient\Pullzone;

use BunnyApiClient\Models\PullZone\PullZone;
use BunnyApiClient\Models\PullZone\PullZoneCreate;
use BunnyApiClient\Pullzone\Checkavailability\CheckavailabilityRequestBuilder;
use BunnyApiClient\Pullzone\Item\ItemRequestBuilder;
use BunnyApiClient\Pullzone\LoadFreeCertificate\LoadFreeCertificateRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /pullzone
*/
class PullzoneRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The checkavailability property
    */
    public function checkavailability(): CheckavailabilityRequestBuilder {
        return new CheckavailabilityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The loadFreeCertificate property
    */
    public function loadFreeCertificate(): LoadFreeCertificateRequestBuilder {
        return new LoadFreeCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the BunnyApiClient.pullzone.item collection
     * @param int $id The ID of the Pull Zone that should be returned
     * @return ItemRequestBuilder
    */
    public function byId(int $id): ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['%2Did'] = $id;
        return new ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PullzoneRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/pullzone?includeCertificate={includeCertificate}&page={page}&perPage={perPage}{&search*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [ListPullZones API Docs](https://docs.bunny.net/reference/pullzonepublic_index)
     * @param PullzoneRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<PullZone>|null>
     * @throws Exception
    */
    public function get(?PullzoneRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [PullZone::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [AddPullZone API Docs](https://docs.bunny.net/reference/pullzonepublic_add)
     * @param PullZoneCreate $body The request body
     * @param PullzoneRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PullZone|null>
     * @throws Exception
    */
    public function post(PullZoneCreate $body, ?PullzoneRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [PullZone::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [ListPullZones API Docs](https://docs.bunny.net/reference/pullzonepublic_index)
     * @param PullzoneRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PullzoneRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * [AddPullZone API Docs](https://docs.bunny.net/reference/pullzonepublic_add)
     * @param PullZoneCreate $body The request body
     * @param PullzoneRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PullZoneCreate $body, ?PullzoneRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/pullzone';
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
     * @return PullzoneRequestBuilder
    */
    public function withUrl(string $rawUrl): PullzoneRequestBuilder {
        return new PullzoneRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
