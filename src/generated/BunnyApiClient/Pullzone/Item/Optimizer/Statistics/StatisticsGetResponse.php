<?php

namespace BunnyApiClient\Pullzone\Item\Optimizer\Statistics;

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
     * @var StatisticsGetResponse_AverageCompressionChart|null $averageCompressionChart Average compression chart of the responses
    */
    private ?StatisticsGetResponse_AverageCompressionChart $averageCompressionChart = null;
    
    /**
     * @var float|null $averageCompressionRatio The average compression ratio of CDN responses
    */
    private ?float $averageCompressionRatio = null;
    
    /**
     * @var float|null $averageProcessingTime The average processing time of each request
    */
    private ?float $averageProcessingTime = null;
    
    /**
     * @var StatisticsGetResponse_AverageProcessingTimeChart|null $averageProcessingTimeChart The AverageProcessingTimeChart property
    */
    private ?StatisticsGetResponse_AverageProcessingTimeChart $averageProcessingTimeChart = null;
    
    /**
     * @var StatisticsGetResponse_RequestsOptimizedChart|null $requestsOptimizedChart The constructed chart of optimized requests
    */
    private ?StatisticsGetResponse_RequestsOptimizedChart $requestsOptimizedChart = null;
    
    /**
     * @var float|null $totalRequestsOptimized The total number of optimized requests
    */
    private ?float $totalRequestsOptimized = null;
    
    /**
     * @var float|null $totalTrafficSaved The total requests saved
    */
    private ?float $totalTrafficSaved = null;
    
    /**
     * @var StatisticsGetResponse_TrafficSavedChart|null $trafficSavedChart The constructed chart of saved traffic
    */
    private ?StatisticsGetResponse_TrafficSavedChart $trafficSavedChart = null;
    
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
     * Gets the AverageCompressionChart property value. Average compression chart of the responses
     * @return StatisticsGetResponse_AverageCompressionChart|null
    */
    public function getAverageCompressionChart(): ?StatisticsGetResponse_AverageCompressionChart {
        return $this->averageCompressionChart;
    }

    /**
     * Gets the AverageCompressionRatio property value. The average compression ratio of CDN responses
     * @return float|null
    */
    public function getAverageCompressionRatio(): ?float {
        return $this->averageCompressionRatio;
    }

    /**
     * Gets the AverageProcessingTime property value. The average processing time of each request
     * @return float|null
    */
    public function getAverageProcessingTime(): ?float {
        return $this->averageProcessingTime;
    }

    /**
     * Gets the AverageProcessingTimeChart property value. The AverageProcessingTimeChart property
     * @return StatisticsGetResponse_AverageProcessingTimeChart|null
    */
    public function getAverageProcessingTimeChart(): ?StatisticsGetResponse_AverageProcessingTimeChart {
        return $this->averageProcessingTimeChart;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'AverageCompressionChart' => fn(ParseNode $n) => $o->setAverageCompressionChart($n->getObjectValue([StatisticsGetResponse_AverageCompressionChart::class, 'createFromDiscriminatorValue'])),
            'AverageCompressionRatio' => fn(ParseNode $n) => $o->setAverageCompressionRatio($n->getFloatValue()),
            'AverageProcessingTime' => fn(ParseNode $n) => $o->setAverageProcessingTime($n->getFloatValue()),
            'AverageProcessingTimeChart' => fn(ParseNode $n) => $o->setAverageProcessingTimeChart($n->getObjectValue([StatisticsGetResponse_AverageProcessingTimeChart::class, 'createFromDiscriminatorValue'])),
            'RequestsOptimizedChart' => fn(ParseNode $n) => $o->setRequestsOptimizedChart($n->getObjectValue([StatisticsGetResponse_RequestsOptimizedChart::class, 'createFromDiscriminatorValue'])),
            'TotalRequestsOptimized' => fn(ParseNode $n) => $o->setTotalRequestsOptimized($n->getFloatValue()),
            'TotalTrafficSaved' => fn(ParseNode $n) => $o->setTotalTrafficSaved($n->getFloatValue()),
            'TrafficSavedChart' => fn(ParseNode $n) => $o->setTrafficSavedChart($n->getObjectValue([StatisticsGetResponse_TrafficSavedChart::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the RequestsOptimizedChart property value. The constructed chart of optimized requests
     * @return StatisticsGetResponse_RequestsOptimizedChart|null
    */
    public function getRequestsOptimizedChart(): ?StatisticsGetResponse_RequestsOptimizedChart {
        return $this->requestsOptimizedChart;
    }

    /**
     * Gets the TotalRequestsOptimized property value. The total number of optimized requests
     * @return float|null
    */
    public function getTotalRequestsOptimized(): ?float {
        return $this->totalRequestsOptimized;
    }

    /**
     * Gets the TotalTrafficSaved property value. The total requests saved
     * @return float|null
    */
    public function getTotalTrafficSaved(): ?float {
        return $this->totalTrafficSaved;
    }

    /**
     * Gets the TrafficSavedChart property value. The constructed chart of saved traffic
     * @return StatisticsGetResponse_TrafficSavedChart|null
    */
    public function getTrafficSavedChart(): ?StatisticsGetResponse_TrafficSavedChart {
        return $this->trafficSavedChart;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('AverageCompressionChart', $this->getAverageCompressionChart());
        $writer->writeFloatValue('AverageCompressionRatio', $this->getAverageCompressionRatio());
        $writer->writeFloatValue('AverageProcessingTime', $this->getAverageProcessingTime());
        $writer->writeObjectValue('AverageProcessingTimeChart', $this->getAverageProcessingTimeChart());
        $writer->writeObjectValue('RequestsOptimizedChart', $this->getRequestsOptimizedChart());
        $writer->writeFloatValue('TotalRequestsOptimized', $this->getTotalRequestsOptimized());
        $writer->writeFloatValue('TotalTrafficSaved', $this->getTotalTrafficSaved());
        $writer->writeObjectValue('TrafficSavedChart', $this->getTrafficSavedChart());
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
     * Sets the AverageCompressionChart property value. Average compression chart of the responses
     * @param StatisticsGetResponse_AverageCompressionChart|null $value Value to set for the AverageCompressionChart property.
    */
    public function setAverageCompressionChart(?StatisticsGetResponse_AverageCompressionChart $value): void {
        $this->averageCompressionChart = $value;
    }

    /**
     * Sets the AverageCompressionRatio property value. The average compression ratio of CDN responses
     * @param float|null $value Value to set for the AverageCompressionRatio property.
    */
    public function setAverageCompressionRatio(?float $value): void {
        $this->averageCompressionRatio = $value;
    }

    /**
     * Sets the AverageProcessingTime property value. The average processing time of each request
     * @param float|null $value Value to set for the AverageProcessingTime property.
    */
    public function setAverageProcessingTime(?float $value): void {
        $this->averageProcessingTime = $value;
    }

    /**
     * Sets the AverageProcessingTimeChart property value. The AverageProcessingTimeChart property
     * @param StatisticsGetResponse_AverageProcessingTimeChart|null $value Value to set for the AverageProcessingTimeChart property.
    */
    public function setAverageProcessingTimeChart(?StatisticsGetResponse_AverageProcessingTimeChart $value): void {
        $this->averageProcessingTimeChart = $value;
    }

    /**
     * Sets the RequestsOptimizedChart property value. The constructed chart of optimized requests
     * @param StatisticsGetResponse_RequestsOptimizedChart|null $value Value to set for the RequestsOptimizedChart property.
    */
    public function setRequestsOptimizedChart(?StatisticsGetResponse_RequestsOptimizedChart $value): void {
        $this->requestsOptimizedChart = $value;
    }

    /**
     * Sets the TotalRequestsOptimized property value. The total number of optimized requests
     * @param float|null $value Value to set for the TotalRequestsOptimized property.
    */
    public function setTotalRequestsOptimized(?float $value): void {
        $this->totalRequestsOptimized = $value;
    }

    /**
     * Sets the TotalTrafficSaved property value. The total requests saved
     * @param float|null $value Value to set for the TotalTrafficSaved property.
    */
    public function setTotalTrafficSaved(?float $value): void {
        $this->totalTrafficSaved = $value;
    }

    /**
     * Sets the TrafficSavedChart property value. The constructed chart of saved traffic
     * @param StatisticsGetResponse_TrafficSavedChart|null $value Value to set for the TrafficSavedChart property.
    */
    public function setTrafficSavedChart(?StatisticsGetResponse_TrafficSavedChart $value): void {
        $this->trafficSavedChart = $value;
    }

}
