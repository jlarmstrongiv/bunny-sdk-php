<?php

namespace BunnyApiClient\Pullzone\Item\RemoveCertificate;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /pullzone/{-id}/removeCertificate
*/
class RemoveCertificateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RemoveCertificateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/pullzone/{%2Did}/removeCertificate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [RemoveCertificate API Docs](https://docs.bunny.net/reference/pullzonepublic_removecertificate)
     * @param RemoveCertificateDeleteRequestBody $body The request body
     * @param RemoveCertificateRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(RemoveCertificateDeleteRequestBody $body, ?RemoveCertificateRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * [RemoveCertificate API Docs](https://docs.bunny.net/reference/pullzonepublic_removecertificate)
     * @param RemoveCertificateDeleteRequestBody $body The request body
     * @param RemoveCertificateRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(RemoveCertificateDeleteRequestBody $body, ?RemoveCertificateRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RemoveCertificateRequestBuilder
    */
    public function withUrl(string $rawUrl): RemoveCertificateRequestBuilder {
        return new RemoveCertificateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
