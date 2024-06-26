<?php

namespace StreamApiClient\Library\Item\Statistics;

use DateTime;

/**
 * [GetVideoStatistics API Docs](https://docs.bunny.net/reference/video_getvideostatistics)
*/
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
     * @var string|null $videoGuid The GUID of the video for which the statistics will be returned
    */
    public ?string $videoGuid = null;
    
    /**
     * Instantiates a new StatisticsRequestBuilderGetQueryParameters and sets the default values.
     * @param DateTime|null $dateFrom The start date of the statistics. If no value is passed, the last 30 days will be returned.
     * @param DateTime|null $dateTo The end date of the statistics. If no value is passed, the last 30 days will be returned.
     * @param bool|null $hourly If true, the statistics data will be returned in hourly grouping.
     * @param string|null $videoGuid The GUID of the video for which the statistics will be returned
    */
    public function __construct(?DateTime $dateFrom = null, ?DateTime $dateTo = null, ?bool $hourly = null, ?string $videoGuid = null) {
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->hourly = $hourly;
        $this->videoGuid = $videoGuid;
    }

}
