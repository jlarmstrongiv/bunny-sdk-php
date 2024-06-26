<?php

namespace BunnyApiClient\Dnszone\Item\Dismissnameservercheck;

use BunnyApiClient\Models\DnsZone\DnsZone;
use BunnyApiClient\Models\StructuredBadRequestResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /dnszone/{-id}/dismissnameservercheck
*/
class DismissnameservercheckRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DismissnameservercheckRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/dnszone/{%2Did}/dismissnameservercheck');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [DismissDnsConfigurationNotice API Docs](https://docs.bunny.net/reference/dnszonepublic_dismissnameservercheck)
     * @param DismissnameservercheckRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DnsZone|null>
     * @throws Exception
    */
    public function post(?DismissnameservercheckRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [StructuredBadRequestResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DnsZone::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * [DismissDnsConfigurationNotice API Docs](https://docs.bunny.net/reference/dnszonepublic_dismissnameservercheck)
     * @param DismissnameservercheckRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?DismissnameservercheckRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return DismissnameservercheckRequestBuilder
    */
    public function withUrl(string $rawUrl): DismissnameservercheckRequestBuilder {
        return new DismissnameservercheckRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
