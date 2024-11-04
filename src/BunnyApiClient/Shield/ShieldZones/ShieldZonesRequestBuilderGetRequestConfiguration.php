<?php

namespace BunnyApiClient\Shield\ShieldZones;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ShieldZonesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ShieldZonesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ShieldZonesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ShieldZonesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ShieldZonesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ShieldZonesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ShieldZonesRequestBuilderGetQueryParameters.
     * @param int|null $page 
     * @param int|null $perPage 
     * @return ShieldZonesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page = null, ?int $perPage = null): ShieldZonesRequestBuilderGetQueryParameters {
        return new ShieldZonesRequestBuilderGetQueryParameters($page, $perPage);
    }

}
