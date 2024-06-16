<?php

namespace BunnyApiClient\Models\PullZone;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BunnyAiImageBlueprint implements AdditionalDataHolder, Parsable 
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
     * @var BunnyAiImageBlueprint_Properties|null $properties The Properties property
    */
    private ?BunnyAiImageBlueprint_Properties $properties = null;
    
    /**
     * Instantiates a new BunnyAiImageBlueprint and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BunnyAiImageBlueprint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BunnyAiImageBlueprint {
        return new BunnyAiImageBlueprint();
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
            'Properties' => fn(ParseNode $n) => $o->setProperties($n->getObjectValue([BunnyAiImageBlueprint_Properties::class, 'createFromDiscriminatorValue'])),
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
     * Gets the Properties property value. The Properties property
     * @return BunnyAiImageBlueprint_Properties|null
    */
    public function getProperties(): ?BunnyAiImageBlueprint_Properties {
        return $this->properties;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeObjectValue('Properties', $this->getProperties());
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
     * Sets the Properties property value. The Properties property
     * @param BunnyAiImageBlueprint_Properties|null $value Value to set for the Properties property.
    */
    public function setProperties(?BunnyAiImageBlueprint_Properties $value): void {
        $this->properties = $value;
    }

}
