<?php

namespace BunnyApiClient\Dnszone\Item;

use BunnyApiClient\Dnszone\Item\Dismissnameservercheck\DismissnameservercheckRequestBuilder;
use BunnyApiClient\Dnszone\Item\Export\ExportRequestBuilder;
use BunnyApiClient\Dnszone\Item\Import\ImportRequestBuilder;
use BunnyApiClient\Dnszone\Item\Recheckdns\RecheckdnsRequestBuilder;
use BunnyApiClient\Dnszone\Item\Records\RecordsRequestBuilder;
use BunnyApiClient\Dnszone\Item\Statistics\StatisticsRequestBuilder;
use BunnyApiClient\Models\DnsZone\DnsZone;
use BunnyApiClient\Models\StructuredBadRequestResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /dnszone/{-id}
*/
class ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The dismissnameservercheck property
    */
    public function dismissnameservercheck(): DismissnameservercheckRequestBuilder {
        return new DismissnameservercheckRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The export property
    */
    public function export(): ExportRequestBuilder {
        return new ExportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The import property
    */
    public function import(): ImportRequestBuilder {
        return new ImportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The recheckdns property
    */
    public function recheckdns(): RecheckdnsRequestBuilder {
        return new RecheckdnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The records property
    */
    public function records(): RecordsRequestBuilder {
        return new RecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The statistics property
    */
    public function statistics(): StatisticsRequestBuilder {
        return new StatisticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/dnszone/{%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [DeleteDnsZone API Docs](https://docs.bunny.net/reference/dnszonepublic_delete)
     * @param ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [StructuredBadRequestResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * [GetDnsZone API Docs](https://docs.bunny.net/reference/dnszonepublic_index2)
     * @param ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DnsZone|null>
     * @throws Exception
    */
    public function get(?ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [DnsZone::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [UpdateDnsZone API Docs](https://docs.bunny.net/reference/dnszonepublic_update)
     * @param PostRequestBody $body The template for adding optional properties.
     * @param ItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DnsZone|null>
     * @throws Exception
    */
    public function post(PostRequestBody $body, ?ItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [DnsZone::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [DeleteDnsZone API Docs](https://docs.bunny.net/reference/dnszonepublic_delete)
     * @param ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * [GetDnsZone API Docs](https://docs.bunny.net/reference/dnszonepublic_index2)
     * @param ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * [UpdateDnsZone API Docs](https://docs.bunny.net/reference/dnszonepublic_update)
     * @param PostRequestBody $body The template for adding optional properties.
     * @param ItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PostRequestBody $body, ?ItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ItemRequestBuilder {
        return new ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
