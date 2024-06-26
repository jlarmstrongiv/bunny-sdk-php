<?php

namespace LoggingApiClient\WithMmWithDdWithYy\WithPullZoneIdLog;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /{mm}-{dd}-{yy}/{pullZoneId}.log
*/
class WithPullZoneIdLogRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithPullZoneIdLogRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param int|null $pullZoneId The path parameter: pullZoneId
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?int $pullZoneId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/{mm}-{dd}-{yy}/{pullZoneId}.log?end={end}&order={order}&search={search}&start={start}&status={status}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['pullZoneId'] = $pullZoneId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [LoggingApi API Docs](https://docs.bunny.net/docs/cdn-logging-api)
     * @param WithPullZoneIdLogRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function get(?WithPullZoneIdLogRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, null);
        return $result;
    }

    /**
     * [LoggingApi API Docs](https://docs.bunny.net/docs/cdn-logging-api)
     * @param WithPullZoneIdLogRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithPullZoneIdLogRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/gzip");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithPullZoneIdLogRequestBuilder
    */
    public function withUrl(string $rawUrl): WithPullZoneIdLogRequestBuilder {
        return new WithPullZoneIdLogRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
