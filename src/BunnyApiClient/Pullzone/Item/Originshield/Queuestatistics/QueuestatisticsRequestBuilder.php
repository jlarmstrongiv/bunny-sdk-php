<?php

namespace BunnyApiClient\Pullzone\Item\Originshield\Queuestatistics;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /pullzone/{-id}/originshield/queuestatistics
*/
class QueuestatisticsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new QueuestatisticsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/pullzone/{%2Did}/originshield/queuestatistics{?dateFrom*,dateTo*,hourly*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [GetOriginShieldQueueStatistics API Docs](https://docs.bunny.net/reference/pullzonepublic_originshieldconcurrencystatistics)
     * @param QueuestatisticsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<QueuestatisticsGetResponse|null>
     * @throws Exception
    */
    public function get(?QueuestatisticsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [QueuestatisticsGetResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [GetOriginShieldQueueStatistics API Docs](https://docs.bunny.net/reference/pullzonepublic_originshieldconcurrencystatistics)
     * @param QueuestatisticsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?QueuestatisticsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return QueuestatisticsRequestBuilder
    */
    public function withUrl(string $rawUrl): QueuestatisticsRequestBuilder {
        return new QueuestatisticsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
