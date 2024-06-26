<?php

namespace BunnyApiClient\Dnszone;

use BunnyApiClient\Dnszone\Checkavailability\CheckavailabilityRequestBuilder;
use BunnyApiClient\Dnszone\Item\ItemRequestBuilder;
use BunnyApiClient\Models\DnsZone\DnsZone;
use BunnyApiClient\Models\StructuredBadRequestResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /dnszone
*/
class DnszoneRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The checkavailability property
    */
    public function checkavailability(): CheckavailabilityRequestBuilder {
        return new CheckavailabilityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the BunnyApiClient.dnszone.item collection
     * @param int $id The ID of the DNS Zone that will be returned
     * @return ItemRequestBuilder
    */
    public function byId(int $id): ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['%2Did'] = $id;
        return new ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DnszoneRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/dnszone?page={page}&perPage={perPage}&search={search}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [ListDnsZones API Docs](https://docs.bunny.net/reference/dnszonepublic_index)
     * @param DnszoneRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DnszoneGetResponse|null>
     * @throws Exception
    */
    public function get(?DnszoneRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [DnszoneGetResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [AddDnsZone API Docs](https://docs.bunny.net/reference/dnszonepublic_add)
     * @param DnszonePostRequestBody $body The request body
     * @param DnszoneRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DnsZone|null>
     * @throws Exception
    */
    public function post(DnszonePostRequestBody $body, ?DnszoneRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [StructuredBadRequestResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DnsZone::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * [ListDnsZones API Docs](https://docs.bunny.net/reference/dnszonepublic_index)
     * @param DnszoneRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DnszoneRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * [AddDnsZone API Docs](https://docs.bunny.net/reference/dnszonepublic_add)
     * @param DnszonePostRequestBody $body The request body
     * @param DnszoneRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DnszonePostRequestBody $body, ?DnszoneRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/dnszone';
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
     * @return DnszoneRequestBuilder
    */
    public function withUrl(string $rawUrl): DnszoneRequestBuilder {
        return new DnszoneRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
