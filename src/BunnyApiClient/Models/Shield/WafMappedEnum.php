<?php

namespace BunnyApiClient\Models\Shield;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WafMappedEnum implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $isPremium The isPremium property
    */
    private ?bool $isPremium = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var int|null $value The value property
    */
    private ?int $value = null;
    
    /**
     * Instantiates a new WafMappedEnum and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WafMappedEnum
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WafMappedEnum {
        return new WafMappedEnum();
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
            'isPremium' => fn(ParseNode $n) => $o->setIsPremium($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the isPremium property value. The isPremium property
     * @return bool|null
    */
    public function getIsPremium(): ?bool {
        return $this->isPremium;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the value property value. The value property
     * @return int|null
    */
    public function getValue(): ?int {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isPremium', $this->getIsPremium());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeIntegerValue('value', $this->getValue());
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
     * Sets the isPremium property value. The isPremium property
     * @param bool|null $value Value to set for the isPremium property.
    */
    public function setIsPremium(?bool $value): void {
        $this->isPremium = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the value property value. The value property
     * @param int|null $value Value to set for the value property.
    */
    public function setValue(?int $value): void {
        $this->value = $value;
    }

}
