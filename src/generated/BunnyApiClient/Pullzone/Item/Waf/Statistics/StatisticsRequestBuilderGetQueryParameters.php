<?php

namespace BunnyApiClient\Pullzone\Item\Waf\Statistics;

use DateTime;

class StatisticsRequestBuilderGetQueryParameters 
{
    /**
     * @var DateTime|null $dateFrom The start date of the statistics. If no value is passed, the last 30 days will be returned.
    */
    public ?DateTime $dateFrom = null;
    
    /**
     * @var DateTime|null $dateTo The end date of the statistics. If no value is passed, the last 30 days will be returned.
    */
    public ?DateTime $dateTo = null;
    
    /**
     * @var bool|null $hourly If true, the statistics data will be returned in hourly grouping.
    */
    public ?bool $hourly = null;
    
    /**
     * Instantiates a new StatisticsRequestBuilderGetQueryParameters and sets the default values.
     * @param DateTime|null $dateFrom The start date of the statistics. If no value is passed, the last 30 days will be returned.
     * @param DateTime|null $dateTo The end date of the statistics. If no value is passed, the last 30 days will be returned.
     * @param bool|null $hourly If true, the statistics data will be returned in hourly grouping.
    */
    public function __construct(?DateTime $dateFrom = null, ?DateTime $dateTo = null, ?bool $hourly = null) {
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->hourly = $hourly;
    }

}
