<?php

namespace BunnyApiClient\Storagezone\Checkavailability;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /storagezone/checkavailability
*/
class CheckavailabilityRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CheckavailabilityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/storagezone/checkavailability');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [CheckTheStorageZoneAvailability API Docs](https://docs.bunny.net/reference/storagezonepublic_checkavailability)
     * @param CheckavailabilityPostRequestBody $body The request body
     * @param CheckavailabilityRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CheckavailabilityPostResponse|null>
     * @throws Exception
    */
    public function post(CheckavailabilityPostRequestBody $body, ?CheckavailabilityRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CheckavailabilityPostResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [CheckTheStorageZoneAvailability API Docs](https://docs.bunny.net/reference/storagezonepublic_checkavailability)
     * @param CheckavailabilityPostRequestBody $body The request body
     * @param CheckavailabilityRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CheckavailabilityPostRequestBody $body, ?CheckavailabilityRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CheckavailabilityRequestBuilder
    */
    public function withUrl(string $rawUrl): CheckavailabilityRequestBuilder {
        return new CheckavailabilityRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
