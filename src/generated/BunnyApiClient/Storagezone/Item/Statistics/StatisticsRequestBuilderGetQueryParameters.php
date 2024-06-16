<?php

namespace BunnyApiClient\Storagezone\Item\Statistics;

use DateTime;

/**
 * [GetStorageZoneStatistics API Docs](https://docs.bunny.net/reference/storagezonepublic_storagezonestatistics)
*/
class StatisticsRequestBuilderGetQueryParameters 
{
    /**
     * @var DateTime|null $dateFrom 
    */
    public ?DateTime $dateFrom = null;
    
    /**
     * @var DateTime|null $dateTo 
    */
    public ?DateTime $dateTo = null;
    
    /**
     * Instantiates a new StatisticsRequestBuilderGetQueryParameters and sets the default values.
     * @param DateTime|null $dateFrom 
     * @param DateTime|null $dateTo 
    */
    public function __construct(?DateTime $dateFrom = null, ?DateTime $dateTo = null) {
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
    }

}
