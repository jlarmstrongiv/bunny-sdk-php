<?php

namespace BunnyApiClient\Pullzone\Item;

use BunnyApiClient\Models\PullZone\PullZone;
use BunnyApiClient\Models\PullZone\PullZoneCreate;
use BunnyApiClient\Pullzone\Item\AddAllowedReferrer\AddAllowedReferrerRequestBuilder;
use BunnyApiClient\Pullzone\Item\AddBlockedIp\AddBlockedIpRequestBuilder;
use BunnyApiClient\Pullzone\Item\AddBlockedReferrer\AddBlockedReferrerRequestBuilder;
use BunnyApiClient\Pullzone\Item\AddCertificate\AddCertificateRequestBuilder;
use BunnyApiClient\Pullzone\Item\AddHostname\AddHostnameRequestBuilder;
use BunnyApiClient\Pullzone\Item\Edgerules\EdgerulesRequestBuilder;
use BunnyApiClient\Pullzone\Item\Optimizer\OptimizerRequestBuilder;
use BunnyApiClient\Pullzone\Item\Originshield\OriginshieldRequestBuilder;
use BunnyApiClient\Pullzone\Item\PurgeCache\PurgeCacheRequestBuilder;
use BunnyApiClient\Pullzone\Item\RemoveAllowedReferrer\RemoveAllowedReferrerRequestBuilder;
use BunnyApiClient\Pullzone\Item\RemoveBlockedIp\RemoveBlockedIpRequestBuilder;
use BunnyApiClient\Pullzone\Item\RemoveBlockedReferrer\RemoveBlockedReferrerRequestBuilder;
use BunnyApiClient\Pullzone\Item\RemoveCertificate\RemoveCertificateRequestBuilder;
use BunnyApiClient\Pullzone\Item\RemoveHostname\RemoveHostnameRequestBuilder;
use BunnyApiClient\Pullzone\Item\ResetSecurityKey\ResetSecurityKeyRequestBuilder;
use BunnyApiClient\Pullzone\Item\Safehop\SafehopRequestBuilder;
use BunnyApiClient\Pullzone\Item\SetForceSSL\SetForceSSLRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /pullzone/{-id}
*/
class ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The addAllowedReferrer property
    */
    public function addAllowedReferrer(): AddAllowedReferrerRequestBuilder {
        return new AddAllowedReferrerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The addBlockedIp property
    */
    public function addBlockedIp(): AddBlockedIpRequestBuilder {
        return new AddBlockedIpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The addBlockedReferrer property
    */
    public function addBlockedReferrer(): AddBlockedReferrerRequestBuilder {
        return new AddBlockedReferrerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The addCertificate property
    */
    public function addCertificate(): AddCertificateRequestBuilder {
        return new AddCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The addHostname property
    */
    public function addHostname(): AddHostnameRequestBuilder {
        return new AddHostnameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The edgerules property
    */
    public function edgerules(): EdgerulesRequestBuilder {
        return new EdgerulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The optimizer property
    */
    public function optimizer(): OptimizerRequestBuilder {
        return new OptimizerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The originshield property
    */
    public function originshield(): OriginshieldRequestBuilder {
        return new OriginshieldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The purgeCache property
    */
    public function purgeCache(): PurgeCacheRequestBuilder {
        return new PurgeCacheRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The removeAllowedReferrer property
    */
    public function removeAllowedReferrer(): RemoveAllowedReferrerRequestBuilder {
        return new RemoveAllowedReferrerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The removeBlockedIp property
    */
    public function removeBlockedIp(): RemoveBlockedIpRequestBuilder {
        return new RemoveBlockedIpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The removeBlockedReferrer property
    */
    public function removeBlockedReferrer(): RemoveBlockedReferrerRequestBuilder {
        return new RemoveBlockedReferrerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The removeCertificate property
    */
    public function removeCertificate(): RemoveCertificateRequestBuilder {
        return new RemoveCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The removeHostname property
    */
    public function removeHostname(): RemoveHostnameRequestBuilder {
        return new RemoveHostnameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The resetSecurityKey property
    */
    public function resetSecurityKey(): ResetSecurityKeyRequestBuilder {
        return new ResetSecurityKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The safehop property
    */
    public function safehop(): SafehopRequestBuilder {
        return new SafehopRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The setForceSSL property
    */
    public function setForceSSL(): SetForceSSLRequestBuilder {
        return new SetForceSSLRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/pullzone/{%2Did}?includeCertificate={includeCertificate}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * [DeletePullZone API Docs](https://docs.bunny.net/reference/pullzonepublic_delete)
     * @param ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * [GetPullZone API Docs](https://docs.bunny.net/reference/pullzonepublic_index2)
     * @param ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PullZone|null>
     * @throws Exception
    */
    public function get(?ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [PullZone::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [UpdatePullZone API Docs](https://docs.bunny.net/reference/pullzonepublic_updatepullzone)
     * @param PullZoneCreate $body The request body
     * @param ItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PullZone|null>
     * @throws Exception
    */
    public function post(PullZoneCreate $body, ?ItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [PullZone::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * [DeletePullZone API Docs](https://docs.bunny.net/reference/pullzonepublic_delete)
     * @param ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/pullzone/{%2Did}';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * [GetPullZone API Docs](https://docs.bunny.net/reference/pullzonepublic_index2)
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
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * [UpdatePullZone API Docs](https://docs.bunny.net/reference/pullzonepublic_updatepullzone)
     * @param PullZoneCreate $body The request body
     * @param ItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PullZoneCreate $body, ?ItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/pullzone/{%2Did}';
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
