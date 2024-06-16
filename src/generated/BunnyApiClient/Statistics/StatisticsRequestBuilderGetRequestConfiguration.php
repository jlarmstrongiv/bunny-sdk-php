<?php

namespace BunnyApiClient\Statistics;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class StatisticsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var StatisticsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?StatisticsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new StatisticsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param StatisticsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?StatisticsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new StatisticsRequestBuilderGetQueryParameters.
     * @param DateTime|null $dateFrom 
     * @param DateTime|null $dateTo 
     * @param bool|null $hourly 
     * @param bool|null $loadErrors 
     * @param int|null $pullZone 
     * @param int|null $serverZoneId 
     * @return StatisticsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?DateTime $dateFrom = null, ?DateTime $dateTo = null, ?bool $hourly = null, ?bool $loadErrors = null, ?int $pullZone = null, ?int $serverZoneId = null): StatisticsRequestBuilderGetQueryParameters {
        return new StatisticsRequestBuilderGetQueryParameters($dateFrom, $dateTo, $hourly, $loadErrors, $pullZone, $serverZoneId);
    }

}
