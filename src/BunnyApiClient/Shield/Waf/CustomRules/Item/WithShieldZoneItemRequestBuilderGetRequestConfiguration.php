<?php

namespace BunnyApiClient\Shield\Waf\CustomRules\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithShieldZoneItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithShieldZoneItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithShieldZoneItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithShieldZoneItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithShieldZoneItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithShieldZoneItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithShieldZoneItemRequestBuilderGetQueryParameters.
     * @param int|null $page 
     * @param int|null $perPage 
     * @return WithShieldZoneItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page = null, ?int $perPage = null): WithShieldZoneItemRequestBuilderGetQueryParameters {
        return new WithShieldZoneItemRequestBuilderGetQueryParameters($page, $perPage);
    }

}
