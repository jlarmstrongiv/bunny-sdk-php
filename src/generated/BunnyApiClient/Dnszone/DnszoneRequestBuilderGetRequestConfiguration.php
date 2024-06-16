<?php

namespace BunnyApiClient\Dnszone;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DnszoneRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DnszoneRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DnszoneRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DnszoneRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DnszoneRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DnszoneRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DnszoneRequestBuilderGetQueryParameters.
     * @param int|null $page 
     * @param int|null $perPage 
     * @param string|null $search The search term that will be used to filter the results
     * @return DnszoneRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page = null, ?int $perPage = null, ?string $search = null): DnszoneRequestBuilderGetQueryParameters {
        return new DnszoneRequestBuilderGetQueryParameters($page, $perPage, $search);
    }

}
