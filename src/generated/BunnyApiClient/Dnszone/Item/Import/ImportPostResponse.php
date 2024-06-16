<?php

namespace BunnyApiClient\Dnszone\Item\Import;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImportPostResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $recordsFailed The RecordsFailed property
    */
    private ?int $recordsFailed = null;
    
    /**
     * @var int|null $recordsSkipped The RecordsSkipped property
    */
    private ?int $recordsSkipped = null;
    
    /**
     * @var int|null $recordsSuccessful The RecordsSuccessful property
    */
    private ?int $recordsSuccessful = null;
    
    /**
     * Instantiates a new ImportPostResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportPostResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportPostResponse {
        return new ImportPostResponse();
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
            'RecordsFailed' => fn(ParseNode $n) => $o->setRecordsFailed($n->getIntegerValue()),
            'RecordsSkipped' => fn(ParseNode $n) => $o->setRecordsSkipped($n->getIntegerValue()),
            'RecordsSuccessful' => fn(ParseNode $n) => $o->setRecordsSuccessful($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the RecordsFailed property value. The RecordsFailed property
     * @return int|null
    */
    public function getRecordsFailed(): ?int {
        return $this->recordsFailed;
    }

    /**
     * Gets the RecordsSkipped property value. The RecordsSkipped property
     * @return int|null
    */
    public function getRecordsSkipped(): ?int {
        return $this->recordsSkipped;
    }

    /**
     * Gets the RecordsSuccessful property value. The RecordsSuccessful property
     * @return int|null
    */
    public function getRecordsSuccessful(): ?int {
        return $this->recordsSuccessful;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('RecordsFailed', $this->getRecordsFailed());
        $writer->writeIntegerValue('RecordsSkipped', $this->getRecordsSkipped());
        $writer->writeIntegerValue('RecordsSuccessful', $this->getRecordsSuccessful());
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
     * Sets the RecordsFailed property value. The RecordsFailed property
     * @param int|null $value Value to set for the RecordsFailed property.
    */
    public function setRecordsFailed(?int $value): void {
        $this->recordsFailed = $value;
    }

    /**
     * Sets the RecordsSkipped property value. The RecordsSkipped property
     * @param int|null $value Value to set for the RecordsSkipped property.
    */
    public function setRecordsSkipped(?int $value): void {
        $this->recordsSkipped = $value;
    }

    /**
     * Sets the RecordsSuccessful property value. The RecordsSuccessful property
     * @param int|null $value Value to set for the RecordsSuccessful property.
    */
    public function setRecordsSuccessful(?int $value): void {
        $this->recordsSuccessful = $value;
    }

}
