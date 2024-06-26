<?php

namespace BunnyApiClient\Pullzone\Item\Originshield\Queuestatistics;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class QueuestatisticsGetResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var QueuestatisticsGetResponse_ConcurrentRequestsChart|null $concurrentRequestsChart The constructed chart of origin shield concurrent requests
    */
    private ?QueuestatisticsGetResponse_ConcurrentRequestsChart $concurrentRequestsChart = null;
    
    /**
     * @var QueuestatisticsGetResponse_QueuedRequestsChart|null $queuedRequestsChart The constructed chart of origin shield requests chart
    */
    private ?QueuestatisticsGetResponse_QueuedRequestsChart $queuedRequestsChart = null;
    
    /**
     * Instantiates a new QueuestatisticsGetResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QueuestatisticsGetResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QueuestatisticsGetResponse {
        return new QueuestatisticsGetResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the ConcurrentRequestsChart property value. The constructed chart of origin shield concurrent requests
     * @return QueuestatisticsGetResponse_ConcurrentRequestsChart|null
    */
    public function getConcurrentRequestsChart(): ?QueuestatisticsGetResponse_ConcurrentRequestsChart {
        return $this->concurrentRequestsChart;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ConcurrentRequestsChart' => fn(ParseNode $n) => $o->setConcurrentRequestsChart($n->getObjectValue([QueuestatisticsGetResponse_ConcurrentRequestsChart::class, 'createFromDiscriminatorValue'])),
            'QueuedRequestsChart' => fn(ParseNode $n) => $o->setQueuedRequestsChart($n->getObjectValue([QueuestatisticsGetResponse_QueuedRequestsChart::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the QueuedRequestsChart property value. The constructed chart of origin shield requests chart
     * @return QueuestatisticsGetResponse_QueuedRequestsChart|null
    */
    public function getQueuedRequestsChart(): ?QueuestatisticsGetResponse_QueuedRequestsChart {
        return $this->queuedRequestsChart;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('ConcurrentRequestsChart', $this->getConcurrentRequestsChart());
        $writer->writeObjectValue('QueuedRequestsChart', $this->getQueuedRequestsChart());
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
     * Sets the ConcurrentRequestsChart property value. The constructed chart of origin shield concurrent requests
     * @param QueuestatisticsGetResponse_ConcurrentRequestsChart|null $value Value to set for the ConcurrentRequestsChart property.
    */
    public function setConcurrentRequestsChart(?QueuestatisticsGetResponse_ConcurrentRequestsChart $value): void {
        $this->concurrentRequestsChart = $value;
    }

    /**
     * Sets the QueuedRequestsChart property value. The constructed chart of origin shield requests chart
     * @param QueuestatisticsGetResponse_QueuedRequestsChart|null $value Value to set for the QueuedRequestsChart property.
    */
    public function setQueuedRequestsChart(?QueuestatisticsGetResponse_QueuedRequestsChart $value): void {
        $this->queuedRequestsChart = $value;
    }

}
