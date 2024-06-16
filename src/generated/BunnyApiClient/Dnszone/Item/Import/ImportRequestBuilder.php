<?php

namespace BunnyApiClient\Dnszone\Item\Import;

use BunnyApiClient\Models\StructuredBadRequestResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /dnszone/{-id}/import
*/
class ImportRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ImportRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/dnszone/{%2Did}/import');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [ImportDnsRecords API Docs](https://docs.bunny.net/reference/dnszonepublic_import)
     * @param StreamInterface $body Binary request body
     * @param ImportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ImportPostResponse|null>
     * @throws Exception
    */
    public function post(StreamInterface $body, ?ImportRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [StructuredBadRequestResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ImportPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * [ImportDnsRecords API Docs](https://docs.bunny.net/reference/dnszonepublic_import)
     * @param StreamInterface $body Binary request body
     * @param ImportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(StreamInterface $body, ?ImportRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setStreamContent($body, "application/octet-stream");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ImportRequestBuilder
    */
    public function withUrl(string $rawUrl): ImportRequestBuilder {
        return new ImportRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
