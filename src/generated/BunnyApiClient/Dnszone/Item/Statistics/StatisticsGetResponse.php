<?php

namespace BunnyApiClient\Dnszone\Item\Statistics;

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
     * @var StatisticsGetResponse_QueriesByTypeChart|null $queriesByTypeChart The QueriesByTypeChart property
    */
    private ?StatisticsGetResponse_QueriesByTypeChart $queriesByTypeChart = null;
    
    /**
     * @var StatisticsGetResponse_QueriesServedChart|null $queriesServedChart The QueriesServedChart property
    */
    private ?StatisticsGetResponse_QueriesServedChart $queriesServedChart = null;
    
    /**
     * @var int|null $totalQueriesServed The TotalQueriesServed property
    */
    private ?int $totalQueriesServed = null;
    
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
            'QueriesByTypeChart' => fn(ParseNode $n) => $o->setQueriesByTypeChart($n->getObjectValue([StatisticsGetResponse_QueriesByTypeChart::class, 'createFromDiscriminatorValue'])),
            'QueriesServedChart' => fn(ParseNode $n) => $o->setQueriesServedChart($n->getObjectValue([StatisticsGetResponse_QueriesServedChart::class, 'createFromDiscriminatorValue'])),
            'TotalQueriesServed' => fn(ParseNode $n) => $o->setTotalQueriesServed($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the QueriesByTypeChart property value. The QueriesByTypeChart property
     * @return StatisticsGetResponse_QueriesByTypeChart|null
    */
    public function getQueriesByTypeChart(): ?StatisticsGetResponse_QueriesByTypeChart {
        return $this->queriesByTypeChart;
    }

    /**
     * Gets the QueriesServedChart property value. The QueriesServedChart property
     * @return StatisticsGetResponse_QueriesServedChart|null
    */
    public function getQueriesServedChart(): ?StatisticsGetResponse_QueriesServedChart {
        return $this->queriesServedChart;
    }

    /**
     * Gets the TotalQueriesServed property value. The TotalQueriesServed property
     * @return int|null
    */
    public function getTotalQueriesServed(): ?int {
        return $this->totalQueriesServed;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('QueriesByTypeChart', $this->getQueriesByTypeChart());
        $writer->writeObjectValue('QueriesServedChart', $this->getQueriesServedChart());
        $writer->writeIntegerValue('TotalQueriesServed', $this->getTotalQueriesServed());
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
     * Sets the QueriesByTypeChart property value. The QueriesByTypeChart property
     * @param StatisticsGetResponse_QueriesByTypeChart|null $value Value to set for the QueriesByTypeChart property.
    */
    public function setQueriesByTypeChart(?StatisticsGetResponse_QueriesByTypeChart $value): void {
        $this->queriesByTypeChart = $value;
    }

    /**
     * Sets the QueriesServedChart property value. The QueriesServedChart property
     * @param StatisticsGetResponse_QueriesServedChart|null $value Value to set for the QueriesServedChart property.
    */
    public function setQueriesServedChart(?StatisticsGetResponse_QueriesServedChart $value): void {
        $this->queriesServedChart = $value;
    }

    /**
     * Sets the TotalQueriesServed property value. The TotalQueriesServed property
     * @param int|null $value Value to set for the TotalQueriesServed property.
    */
    public function setTotalQueriesServed(?int $value): void {
        $this->totalQueriesServed = $value;
    }

}
