<?php

namespace BunnyApiClient\Dnszone\Item\Records;

use BunnyApiClient\Dnszone\Item\Records\Item\RecordsItemRequestBuilder;
use BunnyApiClient\Models\DnsZone\UpdateDnsRecord\DnsRecord;
use BunnyApiClient\Models\StructuredBadRequestResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /dnszone/{-id}/records
*/
class RecordsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the BunnyApiClient.dnszone.item.records.item collection
     * @param int $id The ID of the DNS record that will be updated.
     * @return RecordsItemRequestBuilder
    */
    public function byId(int $id): RecordsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new RecordsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RecordsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/dnszone/{%2Did}/records');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [AddDnsRecord API Docs](https://docs.bunny.net/reference/dnszonepublic_addrecord)
     * @param RecordsPutRequestBody $body The request body
     * @param RecordsRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DnsRecord|null>
     * @throws Exception
    */
    public function put(RecordsPutRequestBody $body, ?RecordsRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [StructuredBadRequestResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DnsRecord::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * [AddDnsRecord API Docs](https://docs.bunny.net/reference/dnszonepublic_addrecord)
     * @param RecordsPutRequestBody $body The request body
     * @param RecordsRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(RecordsPutRequestBody $body, ?RecordsRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return RecordsRequestBuilder
    */
    public function withUrl(string $rawUrl): RecordsRequestBuilder {
        return new RecordsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
