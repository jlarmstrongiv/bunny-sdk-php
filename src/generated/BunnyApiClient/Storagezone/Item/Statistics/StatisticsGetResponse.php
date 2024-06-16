<?php

namespace BunnyApiClient\Storagezone\Item\Statistics;

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
     * @var StatisticsGetResponse_FileCountChart|null $fileCountChart The FileCountChart property
    */
    private ?StatisticsGetResponse_FileCountChart $fileCountChart = null;
    
    /**
     * @var StatisticsGetResponse_StorageUsedChart|null $storageUsedChart The StorageUsedChart property
    */
    private ?StatisticsGetResponse_StorageUsedChart $storageUsedChart = null;
    
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
            'FileCountChart' => fn(ParseNode $n) => $o->setFileCountChart($n->getObjectValue([StatisticsGetResponse_FileCountChart::class, 'createFromDiscriminatorValue'])),
            'StorageUsedChart' => fn(ParseNode $n) => $o->setStorageUsedChart($n->getObjectValue([StatisticsGetResponse_StorageUsedChart::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the FileCountChart property value. The FileCountChart property
     * @return StatisticsGetResponse_FileCountChart|null
    */
    public function getFileCountChart(): ?StatisticsGetResponse_FileCountChart {
        return $this->fileCountChart;
    }

    /**
     * Gets the StorageUsedChart property value. The StorageUsedChart property
     * @return StatisticsGetResponse_StorageUsedChart|null
    */
    public function getStorageUsedChart(): ?StatisticsGetResponse_StorageUsedChart {
        return $this->storageUsedChart;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('FileCountChart', $this->getFileCountChart());
        $writer->writeObjectValue('StorageUsedChart', $this->getStorageUsedChart());
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
     * Sets the FileCountChart property value. The FileCountChart property
     * @param StatisticsGetResponse_FileCountChart|null $value Value to set for the FileCountChart property.
    */
    public function setFileCountChart(?StatisticsGetResponse_FileCountChart $value): void {
        $this->fileCountChart = $value;
    }

    /**
     * Sets the StorageUsedChart property value. The StorageUsedChart property
     * @param StatisticsGetResponse_StorageUsedChart|null $value Value to set for the StorageUsedChart property.
    */
    public function setStorageUsedChart(?StatisticsGetResponse_StorageUsedChart $value): void {
        $this->storageUsedChart = $value;
    }

}
