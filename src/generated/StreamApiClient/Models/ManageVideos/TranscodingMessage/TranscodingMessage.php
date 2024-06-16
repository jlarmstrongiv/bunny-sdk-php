<?php

namespace StreamApiClient\Models\ManageVideos\TranscodingMessage;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TranscodingMessage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $issueCode The issueCode property
    */
    private ?float $issueCode = null;
    
    /**
     * @var float|null $level The level property
    */
    private ?float $level = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var DateTime|null $timeStamp The timeStamp property
    */
    private ?DateTime $timeStamp = null;
    
    /**
     * @var string|null $value The value property
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new TranscodingMessage and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TranscodingMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TranscodingMessage {
        return new TranscodingMessage();
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
            'issueCode' => fn(ParseNode $n) => $o->setIssueCode($n->getFloatValue()),
            'level' => fn(ParseNode $n) => $o->setLevel($n->getFloatValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'timeStamp' => fn(ParseNode $n) => $o->setTimeStamp($n->getDateTimeValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the issueCode property value. The issueCode property
     * @return float|null
    */
    public function getIssueCode(): ?float {
        return $this->issueCode;
    }

    /**
     * Gets the level property value. The level property
     * @return float|null
    */
    public function getLevel(): ?float {
        return $this->level;
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the timeStamp property value. The timeStamp property
     * @return DateTime|null
    */
    public function getTimeStamp(): ?DateTime {
        return $this->timeStamp;
    }

    /**
     * Gets the value property value. The value property
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('issueCode', $this->getIssueCode());
        $writer->writeFloatValue('level', $this->getLevel());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeDateTimeValue('timeStamp', $this->getTimeStamp());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the issueCode property value. The issueCode property
     * @param float|null $value Value to set for the issueCode property.
    */
    public function setIssueCode(?float $value): void {
        $this->issueCode = $value;
    }

    /**
     * Sets the level property value. The level property
     * @param float|null $value Value to set for the level property.
    */
    public function setLevel(?float $value): void {
        $this->level = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the timeStamp property value. The timeStamp property
     * @param DateTime|null $value Value to set for the timeStamp property.
    */
    public function setTimeStamp(?DateTime $value): void {
        $this->timeStamp = $value;
    }

    /**
     * Sets the value property value. The value property
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
