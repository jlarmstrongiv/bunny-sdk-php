<?php

namespace BunnyApiClient\Pullzone\LoadFreeCertificate;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LoadFreeCertificateRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LoadFreeCertificateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LoadFreeCertificateRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LoadFreeCertificateRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LoadFreeCertificateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LoadFreeCertificateRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LoadFreeCertificateRequestBuilderGetQueryParameters.
     * @param string|null $hostname The hostname that the certificate will be loaded for
     * @return LoadFreeCertificateRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $hostname = null): LoadFreeCertificateRequestBuilderGetQueryParameters {
        return new LoadFreeCertificateRequestBuilderGetQueryParameters($hostname);
    }

}
