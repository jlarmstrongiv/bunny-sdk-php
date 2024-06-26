<?php

namespace BunnyApiClient\Pullzone\Item\Originshield\Queuestatistics;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class QueuestatisticsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var QueuestatisticsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?QueuestatisticsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new QueuestatisticsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param QueuestatisticsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?QueuestatisticsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new QueuestatisticsRequestBuilderGetQueryParameters.
     * @param DateTime|null $dateFrom The start date of the statistics. If no value is passed, the last 30 days will be returned.
     * @param DateTime|null $dateTo The end date of the statistics. If no value is passed, the last 30 days will be returned.
     * @param bool|null $hourly If true, the statistics data will be returned in hourly grouping.
     * @return QueuestatisticsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?DateTime $dateFrom = null, ?DateTime $dateTo = null, ?bool $hourly = null): QueuestatisticsRequestBuilderGetQueryParameters {
        return new QueuestatisticsRequestBuilderGetQueryParameters($dateFrom, $dateTo, $hourly);
    }

}
