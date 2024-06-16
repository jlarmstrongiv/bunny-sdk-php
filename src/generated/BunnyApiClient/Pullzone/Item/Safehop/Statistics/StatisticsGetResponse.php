<?php

namespace BunnyApiClient\Pullzone\Item\Safehop\Statistics;

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
     * @var StatisticsGetResponse_RequestsRetriedChart|null $requestsRetriedChart The constructed chart of requests retried
    */
    private ?StatisticsGetResponse_RequestsRetriedChart $requestsRetriedChart = null;
    
    /**
     * @var StatisticsGetResponse_RequestsSavedChart|null $requestsSavedChart The constructed chart of requests saved
    */
    private ?StatisticsGetResponse_RequestsSavedChart $requestsSavedChart = null;
    
    /**
     * @var int|null $totalRequestsRetried The total number of retried requests
    */
    private ?int $totalRequestsRetried = null;
    
    /**
     * @var int|null $totalRequestsSaved The total number of saved requests
    */
    private ?int $totalRequestsSaved = null;
    
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
            'RequestsRetriedChart' => fn(ParseNode $n) => $o->setRequestsRetriedChart($n->getObjectValue([StatisticsGetResponse_RequestsRetriedChart::class, 'createFromDiscriminatorValue'])),
            'RequestsSavedChart' => fn(ParseNode $n) => $o->setRequestsSavedChart($n->getObjectValue([StatisticsGetResponse_RequestsSavedChart::class, 'createFromDiscriminatorValue'])),
            'TotalRequestsRetried' => fn(ParseNode $n) => $o->setTotalRequestsRetried($n->getIntegerValue()),
            'TotalRequestsSaved' => fn(ParseNode $n) => $o->setTotalRequestsSaved($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the RequestsRetriedChart property value. The constructed chart of requests retried
     * @return StatisticsGetResponse_RequestsRetriedChart|null
    */
    public function getRequestsRetriedChart(): ?StatisticsGetResponse_RequestsRetriedChart {
        return $this->requestsRetriedChart;
    }

    /**
     * Gets the RequestsSavedChart property value. The constructed chart of requests saved
     * @return StatisticsGetResponse_RequestsSavedChart|null
    */
    public function getRequestsSavedChart(): ?StatisticsGetResponse_RequestsSavedChart {
        return $this->requestsSavedChart;
    }

    /**
     * Gets the TotalRequestsRetried property value. The total number of retried requests
     * @return int|null
    */
    public function getTotalRequestsRetried(): ?int {
        return $this->totalRequestsRetried;
    }

    /**
     * Gets the TotalRequestsSaved property value. The total number of saved requests
     * @return int|null
    */
    public function getTotalRequestsSaved(): ?int {
        return $this->totalRequestsSaved;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('RequestsRetriedChart', $this->getRequestsRetriedChart());
        $writer->writeObjectValue('RequestsSavedChart', $this->getRequestsSavedChart());
        $writer->writeIntegerValue('TotalRequestsRetried', $this->getTotalRequestsRetried());
        $writer->writeIntegerValue('TotalRequestsSaved', $this->getTotalRequestsSaved());
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
     * Sets the RequestsRetriedChart property value. The constructed chart of requests retried
     * @param StatisticsGetResponse_RequestsRetriedChart|null $value Value to set for the RequestsRetriedChart property.
    */
    public function setRequestsRetriedChart(?StatisticsGetResponse_RequestsRetriedChart $value): void {
        $this->requestsRetriedChart = $value;
    }

    /**
     * Sets the RequestsSavedChart property value. The constructed chart of requests saved
     * @param StatisticsGetResponse_RequestsSavedChart|null $value Value to set for the RequestsSavedChart property.
    */
    public function setRequestsSavedChart(?StatisticsGetResponse_RequestsSavedChart $value): void {
        $this->requestsSavedChart = $value;
    }

    /**
     * Sets the TotalRequestsRetried property value. The total number of retried requests
     * @param int|null $value Value to set for the TotalRequestsRetried property.
    */
    public function setTotalRequestsRetried(?int $value): void {
        $this->totalRequestsRetried = $value;
    }

    /**
     * Sets the TotalRequestsSaved property value. The total number of saved requests
     * @param int|null $value Value to set for the TotalRequestsSaved property.
    */
    public function setTotalRequestsSaved(?int $value): void {
        $this->totalRequestsSaved = $value;
    }

}
