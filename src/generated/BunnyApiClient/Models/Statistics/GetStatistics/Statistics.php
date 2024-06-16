<?php

namespace BunnyApiClient\Models\Statistics\GetStatistics;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Statistics implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $averageOriginResponseTime The AverageOriginResponseTime property
    */
    private ?int $averageOriginResponseTime = null;
    
    /**
     * @var Statistics_BandwidthCachedChart|null $bandwidthCachedChart The BandwidthCachedChart property
    */
    private ?Statistics_BandwidthCachedChart $bandwidthCachedChart = null;
    
    /**
     * @var Statistics_BandwidthUsedChart|null $bandwidthUsedChart The BandwidthUsedChart property
    */
    private ?Statistics_BandwidthUsedChart $bandwidthUsedChart = null;
    
    /**
     * @var float|null $cacheHitRate The CacheHitRate property
    */
    private ?float $cacheHitRate = null;
    
    /**
     * @var Statistics_CacheHitRateChart|null $cacheHitRateChart The CacheHitRateChart property
    */
    private ?Statistics_CacheHitRateChart $cacheHitRateChart = null;
    
    /**
     * @var Statistics_Error3xxChart|null $error3xxChart The Error3xxChart property
    */
    private ?Statistics_Error3xxChart $error3xxChart = null;
    
    /**
     * @var Statistics_Error4xxChart|null $error4xxChart The Error4xxChart property
    */
    private ?Statistics_Error4xxChart $error4xxChart = null;
    
    /**
     * @var Statistics_Error5xxChart|null $error5xxChart The Error5xxChart property
    */
    private ?Statistics_Error5xxChart $error5xxChart = null;
    
    /**
     * @var Statistics_GeoTrafficDistribution|null $geoTrafficDistribution The GeoTrafficDistribution property
    */
    private ?Statistics_GeoTrafficDistribution $geoTrafficDistribution = null;
    
    /**
     * @var Statistics_OriginResponseTimeChart|null $originResponseTimeChart The OriginResponseTimeChart property
    */
    private ?Statistics_OriginResponseTimeChart $originResponseTimeChart = null;
    
    /**
     * @var Statistics_OriginShieldBandwidthUsedChart|null $originShieldBandwidthUsedChart The OriginShieldBandwidthUsedChart property
    */
    private ?Statistics_OriginShieldBandwidthUsedChart $originShieldBandwidthUsedChart = null;
    
    /**
     * @var Statistics_OriginShieldInternalBandwidthUsedChart|null $originShieldInternalBandwidthUsedChart The OriginShieldInternalBandwidthUsedChart property
    */
    private ?Statistics_OriginShieldInternalBandwidthUsedChart $originShieldInternalBandwidthUsedChart = null;
    
    /**
     * @var Statistics_OriginTrafficChart|null $originTrafficChart The OriginTrafficChart property
    */
    private ?Statistics_OriginTrafficChart $originTrafficChart = null;
    
    /**
     * @var Statistics_PullRequestsPulledChart|null $pullRequestsPulledChart The PullRequestsPulledChart property
    */
    private ?Statistics_PullRequestsPulledChart $pullRequestsPulledChart = null;
    
    /**
     * @var Statistics_RequestsServedChart|null $requestsServedChart The RequestsServedChart property
    */
    private ?Statistics_RequestsServedChart $requestsServedChart = null;
    
    /**
     * @var int|null $totalBandwidthUsed The TotalBandwidthUsed property
    */
    private ?int $totalBandwidthUsed = null;
    
    /**
     * @var int|null $totalOriginTraffic The TotalOriginTraffic property
    */
    private ?int $totalOriginTraffic = null;
    
    /**
     * @var int|null $totalRequestsServed The TotalRequestsServed property
    */
    private ?int $totalRequestsServed = null;
    
    /**
     * @var Statistics_UserBalanceHistoryChart|null $userBalanceHistoryChart The UserBalanceHistoryChart property
    */
    private ?Statistics_UserBalanceHistoryChart $userBalanceHistoryChart = null;
    
    /**
     * Instantiates a new Statistics and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Statistics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Statistics {
        return new Statistics();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the AverageOriginResponseTime property value. The AverageOriginResponseTime property
     * @return int|null
    */
    public function getAverageOriginResponseTime(): ?int {
        return $this->averageOriginResponseTime;
    }

    /**
     * Gets the BandwidthCachedChart property value. The BandwidthCachedChart property
     * @return Statistics_BandwidthCachedChart|null
    */
    public function getBandwidthCachedChart(): ?Statistics_BandwidthCachedChart {
        return $this->bandwidthCachedChart;
    }

    /**
     * Gets the BandwidthUsedChart property value. The BandwidthUsedChart property
     * @return Statistics_BandwidthUsedChart|null
    */
    public function getBandwidthUsedChart(): ?Statistics_BandwidthUsedChart {
        return $this->bandwidthUsedChart;
    }

    /**
     * Gets the CacheHitRate property value. The CacheHitRate property
     * @return float|null
    */
    public function getCacheHitRate(): ?float {
        return $this->cacheHitRate;
    }

    /**
     * Gets the CacheHitRateChart property value. The CacheHitRateChart property
     * @return Statistics_CacheHitRateChart|null
    */
    public function getCacheHitRateChart(): ?Statistics_CacheHitRateChart {
        return $this->cacheHitRateChart;
    }

    /**
     * Gets the Error3xxChart property value. The Error3xxChart property
     * @return Statistics_Error3xxChart|null
    */
    public function getError3xxChart(): ?Statistics_Error3xxChart {
        return $this->error3xxChart;
    }

    /**
     * Gets the Error4xxChart property value. The Error4xxChart property
     * @return Statistics_Error4xxChart|null
    */
    public function getError4xxChart(): ?Statistics_Error4xxChart {
        return $this->error4xxChart;
    }

    /**
     * Gets the Error5xxChart property value. The Error5xxChart property
     * @return Statistics_Error5xxChart|null
    */
    public function getError5xxChart(): ?Statistics_Error5xxChart {
        return $this->error5xxChart;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'AverageOriginResponseTime' => fn(ParseNode $n) => $o->setAverageOriginResponseTime($n->getIntegerValue()),
            'BandwidthCachedChart' => fn(ParseNode $n) => $o->setBandwidthCachedChart($n->getObjectValue([Statistics_BandwidthCachedChart::class, 'createFromDiscriminatorValue'])),
            'BandwidthUsedChart' => fn(ParseNode $n) => $o->setBandwidthUsedChart($n->getObjectValue([Statistics_BandwidthUsedChart::class, 'createFromDiscriminatorValue'])),
            'CacheHitRate' => fn(ParseNode $n) => $o->setCacheHitRate($n->getFloatValue()),
            'CacheHitRateChart' => fn(ParseNode $n) => $o->setCacheHitRateChart($n->getObjectValue([Statistics_CacheHitRateChart::class, 'createFromDiscriminatorValue'])),
            'Error3xxChart' => fn(ParseNode $n) => $o->setError3xxChart($n->getObjectValue([Statistics_Error3xxChart::class, 'createFromDiscriminatorValue'])),
            'Error4xxChart' => fn(ParseNode $n) => $o->setError4xxChart($n->getObjectValue([Statistics_Error4xxChart::class, 'createFromDiscriminatorValue'])),
            'Error5xxChart' => fn(ParseNode $n) => $o->setError5xxChart($n->getObjectValue([Statistics_Error5xxChart::class, 'createFromDiscriminatorValue'])),
            'GeoTrafficDistribution' => fn(ParseNode $n) => $o->setGeoTrafficDistribution($n->getObjectValue([Statistics_GeoTrafficDistribution::class, 'createFromDiscriminatorValue'])),
            'OriginResponseTimeChart' => fn(ParseNode $n) => $o->setOriginResponseTimeChart($n->getObjectValue([Statistics_OriginResponseTimeChart::class, 'createFromDiscriminatorValue'])),
            'OriginShieldBandwidthUsedChart' => fn(ParseNode $n) => $o->setOriginShieldBandwidthUsedChart($n->getObjectValue([Statistics_OriginShieldBandwidthUsedChart::class, 'createFromDiscriminatorValue'])),
            'OriginShieldInternalBandwidthUsedChart' => fn(ParseNode $n) => $o->setOriginShieldInternalBandwidthUsedChart($n->getObjectValue([Statistics_OriginShieldInternalBandwidthUsedChart::class, 'createFromDiscriminatorValue'])),
            'OriginTrafficChart' => fn(ParseNode $n) => $o->setOriginTrafficChart($n->getObjectValue([Statistics_OriginTrafficChart::class, 'createFromDiscriminatorValue'])),
            'PullRequestsPulledChart' => fn(ParseNode $n) => $o->setPullRequestsPulledChart($n->getObjectValue([Statistics_PullRequestsPulledChart::class, 'createFromDiscriminatorValue'])),
            'RequestsServedChart' => fn(ParseNode $n) => $o->setRequestsServedChart($n->getObjectValue([Statistics_RequestsServedChart::class, 'createFromDiscriminatorValue'])),
            'TotalBandwidthUsed' => fn(ParseNode $n) => $o->setTotalBandwidthUsed($n->getIntegerValue()),
            'TotalOriginTraffic' => fn(ParseNode $n) => $o->setTotalOriginTraffic($n->getIntegerValue()),
            'TotalRequestsServed' => fn(ParseNode $n) => $o->setTotalRequestsServed($n->getIntegerValue()),
            'UserBalanceHistoryChart' => fn(ParseNode $n) => $o->setUserBalanceHistoryChart($n->getObjectValue([Statistics_UserBalanceHistoryChart::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the GeoTrafficDistribution property value. The GeoTrafficDistribution property
     * @return Statistics_GeoTrafficDistribution|null
    */
    public function getGeoTrafficDistribution(): ?Statistics_GeoTrafficDistribution {
        return $this->geoTrafficDistribution;
    }

    /**
     * Gets the OriginResponseTimeChart property value. The OriginResponseTimeChart property
     * @return Statistics_OriginResponseTimeChart|null
    */
    public function getOriginResponseTimeChart(): ?Statistics_OriginResponseTimeChart {
        return $this->originResponseTimeChart;
    }

    /**
     * Gets the OriginShieldBandwidthUsedChart property value. The OriginShieldBandwidthUsedChart property
     * @return Statistics_OriginShieldBandwidthUsedChart|null
    */
    public function getOriginShieldBandwidthUsedChart(): ?Statistics_OriginShieldBandwidthUsedChart {
        return $this->originShieldBandwidthUsedChart;
    }

    /**
     * Gets the OriginShieldInternalBandwidthUsedChart property value. The OriginShieldInternalBandwidthUsedChart property
     * @return Statistics_OriginShieldInternalBandwidthUsedChart|null
    */
    public function getOriginShieldInternalBandwidthUsedChart(): ?Statistics_OriginShieldInternalBandwidthUsedChart {
        return $this->originShieldInternalBandwidthUsedChart;
    }

    /**
     * Gets the OriginTrafficChart property value. The OriginTrafficChart property
     * @return Statistics_OriginTrafficChart|null
    */
    public function getOriginTrafficChart(): ?Statistics_OriginTrafficChart {
        return $this->originTrafficChart;
    }

    /**
     * Gets the PullRequestsPulledChart property value. The PullRequestsPulledChart property
     * @return Statistics_PullRequestsPulledChart|null
    */
    public function getPullRequestsPulledChart(): ?Statistics_PullRequestsPulledChart {
        return $this->pullRequestsPulledChart;
    }

    /**
     * Gets the RequestsServedChart property value. The RequestsServedChart property
     * @return Statistics_RequestsServedChart|null
    */
    public function getRequestsServedChart(): ?Statistics_RequestsServedChart {
        return $this->requestsServedChart;
    }

    /**
     * Gets the TotalBandwidthUsed property value. The TotalBandwidthUsed property
     * @return int|null
    */
    public function getTotalBandwidthUsed(): ?int {
        return $this->totalBandwidthUsed;
    }

    /**
     * Gets the TotalOriginTraffic property value. The TotalOriginTraffic property
     * @return int|null
    */
    public function getTotalOriginTraffic(): ?int {
        return $this->totalOriginTraffic;
    }

    /**
     * Gets the TotalRequestsServed property value. The TotalRequestsServed property
     * @return int|null
    */
    public function getTotalRequestsServed(): ?int {
        return $this->totalRequestsServed;
    }

    /**
     * Gets the UserBalanceHistoryChart property value. The UserBalanceHistoryChart property
     * @return Statistics_UserBalanceHistoryChart|null
    */
    public function getUserBalanceHistoryChart(): ?Statistics_UserBalanceHistoryChart {
        return $this->userBalanceHistoryChart;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('AverageOriginResponseTime', $this->getAverageOriginResponseTime());
        $writer->writeObjectValue('BandwidthCachedChart', $this->getBandwidthCachedChart());
        $writer->writeObjectValue('BandwidthUsedChart', $this->getBandwidthUsedChart());
        $writer->writeFloatValue('CacheHitRate', $this->getCacheHitRate());
        $writer->writeObjectValue('CacheHitRateChart', $this->getCacheHitRateChart());
        $writer->writeObjectValue('Error3xxChart', $this->getError3xxChart());
        $writer->writeObjectValue('Error4xxChart', $this->getError4xxChart());
        $writer->writeObjectValue('Error5xxChart', $this->getError5xxChart());
        $writer->writeObjectValue('GeoTrafficDistribution', $this->getGeoTrafficDistribution());
        $writer->writeObjectValue('OriginResponseTimeChart', $this->getOriginResponseTimeChart());
        $writer->writeObjectValue('OriginShieldBandwidthUsedChart', $this->getOriginShieldBandwidthUsedChart());
        $writer->writeObjectValue('OriginShieldInternalBandwidthUsedChart', $this->getOriginShieldInternalBandwidthUsedChart());
        $writer->writeObjectValue('OriginTrafficChart', $this->getOriginTrafficChart());
        $writer->writeObjectValue('PullRequestsPulledChart', $this->getPullRequestsPulledChart());
        $writer->writeObjectValue('RequestsServedChart', $this->getRequestsServedChart());
        $writer->writeIntegerValue('TotalBandwidthUsed', $this->getTotalBandwidthUsed());
        $writer->writeIntegerValue('TotalOriginTraffic', $this->getTotalOriginTraffic());
        $writer->writeIntegerValue('TotalRequestsServed', $this->getTotalRequestsServed());
        $writer->writeObjectValue('UserBalanceHistoryChart', $this->getUserBalanceHistoryChart());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the AverageOriginResponseTime property value. The AverageOriginResponseTime property
     * @param int|null $value Value to set for the AverageOriginResponseTime property.
    */
    public function setAverageOriginResponseTime(?int $value): void {
        $this->averageOriginResponseTime = $value;
    }

    /**
     * Sets the BandwidthCachedChart property value. The BandwidthCachedChart property
     * @param Statistics_BandwidthCachedChart|null $value Value to set for the BandwidthCachedChart property.
    */
    public function setBandwidthCachedChart(?Statistics_BandwidthCachedChart $value): void {
        $this->bandwidthCachedChart = $value;
    }

    /**
     * Sets the BandwidthUsedChart property value. The BandwidthUsedChart property
     * @param Statistics_BandwidthUsedChart|null $value Value to set for the BandwidthUsedChart property.
    */
    public function setBandwidthUsedChart(?Statistics_BandwidthUsedChart $value): void {
        $this->bandwidthUsedChart = $value;
    }

    /**
     * Sets the CacheHitRate property value. The CacheHitRate property
     * @param float|null $value Value to set for the CacheHitRate property.
    */
    public function setCacheHitRate(?float $value): void {
        $this->cacheHitRate = $value;
    }

    /**
     * Sets the CacheHitRateChart property value. The CacheHitRateChart property
     * @param Statistics_CacheHitRateChart|null $value Value to set for the CacheHitRateChart property.
    */
    public function setCacheHitRateChart(?Statistics_CacheHitRateChart $value): void {
        $this->cacheHitRateChart = $value;
    }

    /**
     * Sets the Error3xxChart property value. The Error3xxChart property
     * @param Statistics_Error3xxChart|null $value Value to set for the Error3xxChart property.
    */
    public function setError3xxChart(?Statistics_Error3xxChart $value): void {
        $this->error3xxChart = $value;
    }

    /**
     * Sets the Error4xxChart property value. The Error4xxChart property
     * @param Statistics_Error4xxChart|null $value Value to set for the Error4xxChart property.
    */
    public function setError4xxChart(?Statistics_Error4xxChart $value): void {
        $this->error4xxChart = $value;
    }

    /**
     * Sets the Error5xxChart property value. The Error5xxChart property
     * @param Statistics_Error5xxChart|null $value Value to set for the Error5xxChart property.
    */
    public function setError5xxChart(?Statistics_Error5xxChart $value): void {
        $this->error5xxChart = $value;
    }

    /**
     * Sets the GeoTrafficDistribution property value. The GeoTrafficDistribution property
     * @param Statistics_GeoTrafficDistribution|null $value Value to set for the GeoTrafficDistribution property.
    */
    public function setGeoTrafficDistribution(?Statistics_GeoTrafficDistribution $value): void {
        $this->geoTrafficDistribution = $value;
    }

    /**
     * Sets the OriginResponseTimeChart property value. The OriginResponseTimeChart property
     * @param Statistics_OriginResponseTimeChart|null $value Value to set for the OriginResponseTimeChart property.
    */
    public function setOriginResponseTimeChart(?Statistics_OriginResponseTimeChart $value): void {
        $this->originResponseTimeChart = $value;
    }

    /**
     * Sets the OriginShieldBandwidthUsedChart property value. The OriginShieldBandwidthUsedChart property
     * @param Statistics_OriginShieldBandwidthUsedChart|null $value Value to set for the OriginShieldBandwidthUsedChart property.
    */
    public function setOriginShieldBandwidthUsedChart(?Statistics_OriginShieldBandwidthUsedChart $value): void {
        $this->originShieldBandwidthUsedChart = $value;
    }

    /**
     * Sets the OriginShieldInternalBandwidthUsedChart property value. The OriginShieldInternalBandwidthUsedChart property
     * @param Statistics_OriginShieldInternalBandwidthUsedChart|null $value Value to set for the OriginShieldInternalBandwidthUsedChart property.
    */
    public function setOriginShieldInternalBandwidthUsedChart(?Statistics_OriginShieldInternalBandwidthUsedChart $value): void {
        $this->originShieldInternalBandwidthUsedChart = $value;
    }

    /**
     * Sets the OriginTrafficChart property value. The OriginTrafficChart property
     * @param Statistics_OriginTrafficChart|null $value Value to set for the OriginTrafficChart property.
    */
    public function setOriginTrafficChart(?Statistics_OriginTrafficChart $value): void {
        $this->originTrafficChart = $value;
    }

    /**
     * Sets the PullRequestsPulledChart property value. The PullRequestsPulledChart property
     * @param Statistics_PullRequestsPulledChart|null $value Value to set for the PullRequestsPulledChart property.
    */
    public function setPullRequestsPulledChart(?Statistics_PullRequestsPulledChart $value): void {
        $this->pullRequestsPulledChart = $value;
    }

    /**
     * Sets the RequestsServedChart property value. The RequestsServedChart property
     * @param Statistics_RequestsServedChart|null $value Value to set for the RequestsServedChart property.
    */
    public function setRequestsServedChart(?Statistics_RequestsServedChart $value): void {
        $this->requestsServedChart = $value;
    }

    /**
     * Sets the TotalBandwidthUsed property value. The TotalBandwidthUsed property
     * @param int|null $value Value to set for the TotalBandwidthUsed property.
    */
    public function setTotalBandwidthUsed(?int $value): void {
        $this->totalBandwidthUsed = $value;
    }

    /**
     * Sets the TotalOriginTraffic property value. The TotalOriginTraffic property
     * @param int|null $value Value to set for the TotalOriginTraffic property.
    */
    public function setTotalOriginTraffic(?int $value): void {
        $this->totalOriginTraffic = $value;
    }

    /**
     * Sets the TotalRequestsServed property value. The TotalRequestsServed property
     * @param int|null $value Value to set for the TotalRequestsServed property.
    */
    public function setTotalRequestsServed(?int $value): void {
        $this->totalRequestsServed = $value;
    }

    /**
     * Sets the UserBalanceHistoryChart property value. The UserBalanceHistoryChart property
     * @param Statistics_UserBalanceHistoryChart|null $value Value to set for the UserBalanceHistoryChart property.
    */
    public function setUserBalanceHistoryChart(?Statistics_UserBalanceHistoryChart $value): void {
        $this->userBalanceHistoryChart = $value;
    }

}
