<?php

namespace BunnyApiClient\Pullzone\Item\Waf\Statistics;

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
     * @var StatisticsGetResponse_ThreatsBlockedChart|null $threatsBlockedChart The ThreatsBlockedChart property
    */
    private ?StatisticsGetResponse_ThreatsBlockedChart $threatsBlockedChart = null;
    
    /**
     * @var StatisticsGetResponse_ThreatsCheckedChart|null $threatsCheckedChart The ThreatsCheckedChart property
    */
    private ?StatisticsGetResponse_ThreatsCheckedChart $threatsCheckedChart = null;
    
    /**
     * @var int|null $totalBlockedRequests The TotalBlockedRequests property
    */
    private ?int $totalBlockedRequests = null;
    
    /**
     * @var int|null $totalCheckedRequests The TotalCheckedRequests property
    */
    private ?int $totalCheckedRequests = null;
    
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ThreatsBlockedChart' => fn(ParseNode $n) => $o->setThreatsBlockedChart($n->getObjectValue([StatisticsGetResponse_ThreatsBlockedChart::class, 'createFromDiscriminatorValue'])),
            'ThreatsCheckedChart' => fn(ParseNode $n) => $o->setThreatsCheckedChart($n->getObjectValue([StatisticsGetResponse_ThreatsCheckedChart::class, 'createFromDiscriminatorValue'])),
            'TotalBlockedRequests' => fn(ParseNode $n) => $o->setTotalBlockedRequests($n->getIntegerValue()),
            'TotalCheckedRequests' => fn(ParseNode $n) => $o->setTotalCheckedRequests($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the ThreatsBlockedChart property value. The ThreatsBlockedChart property
     * @return StatisticsGetResponse_ThreatsBlockedChart|null
    */
    public function getThreatsBlockedChart(): ?StatisticsGetResponse_ThreatsBlockedChart {
        return $this->threatsBlockedChart;
    }

    /**
     * Gets the ThreatsCheckedChart property value. The ThreatsCheckedChart property
     * @return StatisticsGetResponse_ThreatsCheckedChart|null
    */
    public function getThreatsCheckedChart(): ?StatisticsGetResponse_ThreatsCheckedChart {
        return $this->threatsCheckedChart;
    }

    /**
     * Gets the TotalBlockedRequests property value. The TotalBlockedRequests property
     * @return int|null
    */
    public function getTotalBlockedRequests(): ?int {
        return $this->totalBlockedRequests;
    }

    /**
     * Gets the TotalCheckedRequests property value. The TotalCheckedRequests property
     * @return int|null
    */
    public function getTotalCheckedRequests(): ?int {
        return $this->totalCheckedRequests;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('ThreatsBlockedChart', $this->getThreatsBlockedChart());
        $writer->writeObjectValue('ThreatsCheckedChart', $this->getThreatsCheckedChart());
        $writer->writeIntegerValue('TotalBlockedRequests', $this->getTotalBlockedRequests());
        $writer->writeIntegerValue('TotalCheckedRequests', $this->getTotalCheckedRequests());
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
     * Sets the ThreatsBlockedChart property value. The ThreatsBlockedChart property
     * @param StatisticsGetResponse_ThreatsBlockedChart|null $value Value to set for the ThreatsBlockedChart property.
    */
    public function setThreatsBlockedChart(?StatisticsGetResponse_ThreatsBlockedChart $value): void {
        $this->threatsBlockedChart = $value;
    }

    /**
     * Sets the ThreatsCheckedChart property value. The ThreatsCheckedChart property
     * @param StatisticsGetResponse_ThreatsCheckedChart|null $value Value to set for the ThreatsCheckedChart property.
    */
    public function setThreatsCheckedChart(?StatisticsGetResponse_ThreatsCheckedChart $value): void {
        $this->threatsCheckedChart = $value;
    }

    /**
     * Sets the TotalBlockedRequests property value. The TotalBlockedRequests property
     * @param int|null $value Value to set for the TotalBlockedRequests property.
    */
    public function setTotalBlockedRequests(?int $value): void {
        $this->totalBlockedRequests = $value;
    }

    /**
     * Sets the TotalCheckedRequests property value. The TotalCheckedRequests property
     * @param int|null $value Value to set for the TotalCheckedRequests property.
    */
    public function setTotalCheckedRequests(?int $value): void {
        $this->totalCheckedRequests = $value;
    }

}
