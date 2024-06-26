<?php

namespace StreamApiClient\Library\Item\Statistics;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StatisticsGetResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var StatisticsGetResponse_countryViewCounts|null $countryViewCounts The countryViewCounts property
    */
    private ?StatisticsGetResponse_countryViewCounts $countryViewCounts = null;
    
    /**
     * @var StatisticsGetResponse_countryWatchTime|null $countryWatchTime The countryWatchTime property
    */
    private ?StatisticsGetResponse_countryWatchTime $countryWatchTime = null;
    
    /**
     * @var int|null $engagementScore The engagementScore property
    */
    private ?int $engagementScore = null;
    
    /**
     * @var StatisticsGetResponse_viewsChart|null $viewsChart The viewsChart property
    */
    private ?StatisticsGetResponse_viewsChart $viewsChart = null;
    
    /**
     * @var StatisticsGetResponse_watchTimeChart|null $watchTimeChart The watchTimeChart property
    */
    private ?StatisticsGetResponse_watchTimeChart $watchTimeChart = null;
    
    /**
     * Instantiates a new StatisticsGetResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StatisticsGetResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StatisticsGetResponse {
        return new StatisticsGetResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the countryViewCounts property value. The countryViewCounts property
     * @return StatisticsGetResponse_countryViewCounts|null
    */
    public function getCountryViewCounts(): ?StatisticsGetResponse_countryViewCounts {
        return $this->countryViewCounts;
    }

    /**
     * Gets the countryWatchTime property value. The countryWatchTime property
     * @return StatisticsGetResponse_countryWatchTime|null
    */
    public function getCountryWatchTime(): ?StatisticsGetResponse_countryWatchTime {
        return $this->countryWatchTime;
    }

    /**
     * Gets the engagementScore property value. The engagementScore property
     * @return int|null
    */
    public function getEngagementScore(): ?int {
        return $this->engagementScore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'countryViewCounts' => fn(ParseNode $n) => $o->setCountryViewCounts($n->getObjectValue([StatisticsGetResponse_countryViewCounts::class, 'createFromDiscriminatorValue'])),
            'countryWatchTime' => fn(ParseNode $n) => $o->setCountryWatchTime($n->getObjectValue([StatisticsGetResponse_countryWatchTime::class, 'createFromDiscriminatorValue'])),
            'engagementScore' => fn(ParseNode $n) => $o->setEngagementScore($n->getIntegerValue()),
            'viewsChart' => fn(ParseNode $n) => $o->setViewsChart($n->getObjectValue([StatisticsGetResponse_viewsChart::class, 'createFromDiscriminatorValue'])),
            'watchTimeChart' => fn(ParseNode $n) => $o->setWatchTimeChart($n->getObjectValue([StatisticsGetResponse_watchTimeChart::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the viewsChart property value. The viewsChart property
     * @return StatisticsGetResponse_viewsChart|null
    */
    public function getViewsChart(): ?StatisticsGetResponse_viewsChart {
        return $this->viewsChart;
    }

    /**
     * Gets the watchTimeChart property value. The watchTimeChart property
     * @return StatisticsGetResponse_watchTimeChart|null
    */
    public function getWatchTimeChart(): ?StatisticsGetResponse_watchTimeChart {
        return $this->watchTimeChart;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('countryViewCounts', $this->getCountryViewCounts());
        $writer->writeObjectValue('countryWatchTime', $this->getCountryWatchTime());
        $writer->writeIntegerValue('engagementScore', $this->getEngagementScore());
        $writer->writeObjectValue('viewsChart', $this->getViewsChart());
        $writer->writeObjectValue('watchTimeChart', $this->getWatchTimeChart());
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
     * Sets the countryViewCounts property value. The countryViewCounts property
     * @param StatisticsGetResponse_countryViewCounts|null $value Value to set for the countryViewCounts property.
    */
    public function setCountryViewCounts(?StatisticsGetResponse_countryViewCounts $value): void {
        $this->countryViewCounts = $value;
    }

    /**
     * Sets the countryWatchTime property value. The countryWatchTime property
     * @param StatisticsGetResponse_countryWatchTime|null $value Value to set for the countryWatchTime property.
    */
    public function setCountryWatchTime(?StatisticsGetResponse_countryWatchTime $value): void {
        $this->countryWatchTime = $value;
    }

    /**
     * Sets the engagementScore property value. The engagementScore property
     * @param int|null $value Value to set for the engagementScore property.
    */
    public function setEngagementScore(?int $value): void {
        $this->engagementScore = $value;
    }

    /**
     * Sets the viewsChart property value. The viewsChart property
     * @param StatisticsGetResponse_viewsChart|null $value Value to set for the viewsChart property.
    */
    public function setViewsChart(?StatisticsGetResponse_viewsChart $value): void {
        $this->viewsChart = $value;
    }

    /**
     * Sets the watchTimeChart property value. The watchTimeChart property
     * @param StatisticsGetResponse_watchTimeChart|null $value Value to set for the watchTimeChart property.
    */
    public function setWatchTimeChart(?StatisticsGetResponse_watchTimeChart $value): void {
        $this->watchTimeChart = $value;
    }

}
