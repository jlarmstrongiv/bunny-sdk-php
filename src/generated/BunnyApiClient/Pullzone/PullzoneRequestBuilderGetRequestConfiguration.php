<?php

namespace BunnyApiClient\Pullzone;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PullzoneRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PullzoneRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PullzoneRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PullzoneRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PullzoneRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PullzoneRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PullzoneRequestBuilderGetQueryParameters.
     * @param bool|null $includeCertificate Determines if the result hostnames should contain the SSL certificate
     * @param int|null $page 
     * @param int|null $perPage 
     * @param string|null $search The search term that will be used to filter the results
     * @return PullzoneRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $includeCertificate = null, ?int $page = null, ?int $perPage = null, ?string $search = null): PullzoneRequestBuilderGetQueryParameters {
        return new PullzoneRequestBuilderGetQueryParameters($includeCertificate, $page, $perPage, $search);
    }

}
