<?php

namespace LoggingApiClient\WithMmWithDdWithYy\WithPullZoneIdLog;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithPullZoneIdLogRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithPullZoneIdLogRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithPullZoneIdLogRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithPullZoneIdLogRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithPullZoneIdLogRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithPullZoneIdLogRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithPullZoneIdLogRequestBuilderGetQueryParameters.
     * @param int|null $end 
     * @param GetOrderQueryParameterType|null $order 
     * @param string|null $search 
     * @param int|null $start 
     * @param string|null $status 
     * @return WithPullZoneIdLogRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $end = null, ?GetOrderQueryParameterType $order = null, ?string $search = null, ?int $start = null, ?string $status = null): WithPullZoneIdLogRequestBuilderGetQueryParameters {
        return new WithPullZoneIdLogRequestBuilderGetQueryParameters($end, $order, $search, $start, $status);
    }

}
