<?php

namespace BunnyApiClient\Statistics;

use DateTime;

/**
 * [GetStatistics API Docs](https://docs.bunny.net/reference/statisticspublic_index)
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
     * @var bool|null $hourly 
    */
    public ?bool $hourly = null;
    
    /**
     * @var bool|null $loadErrors 
    */
    public ?bool $loadErrors = null;
    
    /**
     * @var int|null $pullZone 
    */
    public ?int $pullZone = null;
    
    /**
     * @var int|null $serverZoneId 
    */
    public ?int $serverZoneId = null;
    
    /**
     * Instantiates a new StatisticsRequestBuilderGetQueryParameters and sets the default values.
     * @param DateTime|null $dateFrom 
     * @param DateTime|null $dateTo 
     * @param bool|null $hourly 
     * @param bool|null $loadErrors 
     * @param int|null $pullZone 
     * @param int|null $serverZoneId 
    */
    public function __construct(?DateTime $dateFrom = null, ?DateTime $dateTo = null, ?bool $hourly = null, ?bool $loadErrors = null, ?int $pullZone = null, ?int $serverZoneId = null) {
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->hourly = $hourly;
        $this->loadErrors = $loadErrors;
        $this->pullZone = $pullZone;
        $this->serverZoneId = $serverZoneId;
    }

}
