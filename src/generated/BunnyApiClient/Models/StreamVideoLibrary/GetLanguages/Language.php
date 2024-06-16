<?php

namespace BunnyApiClient\Models\StreamVideoLibrary\GetLanguages;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Language implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $name The Name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $shortCode The ShortCode property
    */
    private ?string $shortCode = null;
    
    /**
     * @var bool|null $supportPlayerTranslation The SupportPlayerTranslation property
    */
    private ?bool $supportPlayerTranslation = null;
    
    /**
     * @var bool|null $supportTranscribing The SupportTranscribing property
    */
    private ?bool $supportTranscribing = null;
    
    /**
     * @var int|null $transcribingAccuracy The TranscribingAccuracy property
    */
    private ?int $transcribingAccuracy = null;
    
    /**
     * Instantiates a new Language and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Language
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Language {
        return new Language();
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
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'ShortCode' => fn(ParseNode $n) => $o->setShortCode($n->getStringValue()),
            'SupportPlayerTranslation' => fn(ParseNode $n) => $o->setSupportPlayerTranslation($n->getBooleanValue()),
            'SupportTranscribing' => fn(ParseNode $n) => $o->setSupportTranscribing($n->getBooleanValue()),
            'TranscribingAccuracy' => fn(ParseNode $n) => $o->setTranscribingAccuracy($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the Name property value. The Name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the ShortCode property value. The ShortCode property
     * @return string|null
    */
    public function getShortCode(): ?string {
        return $this->shortCode;
    }

    /**
     * Gets the SupportPlayerTranslation property value. The SupportPlayerTranslation property
     * @return bool|null
    */
    public function getSupportPlayerTranslation(): ?bool {
        return $this->supportPlayerTranslation;
    }

    /**
     * Gets the SupportTranscribing property value. The SupportTranscribing property
     * @return bool|null
    */
    public function getSupportTranscribing(): ?bool {
        return $this->supportTranscribing;
    }

    /**
     * Gets the TranscribingAccuracy property value. The TranscribingAccuracy property
     * @return int|null
    */
    public function getTranscribingAccuracy(): ?int {
        return $this->transcribingAccuracy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeStringValue('ShortCode', $this->getShortCode());
        $writer->writeBooleanValue('SupportPlayerTranslation', $this->getSupportPlayerTranslation());
        $writer->writeBooleanValue('SupportTranscribing', $this->getSupportTranscribing());
        $writer->writeIntegerValue('TranscribingAccuracy', $this->getTranscribingAccuracy());
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
     * Sets the Name property value. The Name property
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the ShortCode property value. The ShortCode property
     * @param string|null $value Value to set for the ShortCode property.
    */
    public function setShortCode(?string $value): void {
        $this->shortCode = $value;
    }

    /**
     * Sets the SupportPlayerTranslation property value. The SupportPlayerTranslation property
     * @param bool|null $value Value to set for the SupportPlayerTranslation property.
    */
    public function setSupportPlayerTranslation(?bool $value): void {
        $this->supportPlayerTranslation = $value;
    }

    /**
     * Sets the SupportTranscribing property value. The SupportTranscribing property
     * @param bool|null $value Value to set for the SupportTranscribing property.
    */
    public function setSupportTranscribing(?bool $value): void {
        $this->supportTranscribing = $value;
    }

    /**
     * Sets the TranscribingAccuracy property value. The TranscribingAccuracy property
     * @param int|null $value Value to set for the TranscribingAccuracy property.
    */
    public function setTranscribingAccuracy(?int $value): void {
        $this->transcribingAccuracy = $value;
    }

}
