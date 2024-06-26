<?php

namespace BunnyApiClient\Dnszone\Item\Statistics;

use DateTime;

/**
 * [GetDnsQueryStatistics API Docs](https://docs.bunny.net/reference/dnszonepublic_statistics)
*/
class StatisticsRequestBuilderGetQueryParameters 
{
    /**
     * @var DateTime|null $dateFrom The start date of the statistics. If no value is passed, the last 30 days will be returned
    */
    public ?DateTime $dateFrom = null;
    
    /**
     * @var DateTime|null $dateTo The end date of the statistics. If no value is passed, the last 30 days will be returned
    */
    public ?DateTime $dateTo = null;
    
    /**
     * Instantiates a new StatisticsRequestBuilderGetQueryParameters and sets the default values.
     * @param DateTime|null $dateFrom The start date of the statistics. If no value is passed, the last 30 days will be returned
     * @param DateTime|null $dateTo The end date of the statistics. If no value is passed, the last 30 days will be returned
    */
    public function __construct(?DateTime $dateFrom = null, ?DateTime $dateTo = null) {
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
    }

}
