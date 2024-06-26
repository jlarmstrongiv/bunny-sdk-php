<?php

namespace BunnyApiClient\Models\Compute;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdgeScriptVariable implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $defaultValue The DefaultValue property
    */
    private ?string $defaultValue = null;
    
    /**
     * @var int|null $id The Id property
    */
    private ?int $id = null;
    
    /**
     * @var string|null $name The Name property
    */
    private ?string $name = null;
    
    /**
     * @var bool|null $required The Required property
    */
    private ?bool $required = null;
    
    /**
     * Instantiates a new EdgeScriptVariable and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdgeScriptVariable
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdgeScriptVariable {
        return new EdgeScriptVariable();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the DefaultValue property value. The DefaultValue property
     * @return string|null
    */
    public function getDefaultValue(): ?string {
        return $this->defaultValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'DefaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getStringValue()),
            'Id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'Required' => fn(ParseNode $n) => $o->setRequired($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the Id property value. The Id property
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the Name property value. The Name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the Required property value. The Required property
     * @return bool|null
    */
    public function getRequired(): ?bool {
        return $this->required;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('DefaultValue', $this->getDefaultValue());
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeBooleanValue('Required', $this->getRequired());
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
     * Sets the DefaultValue property value. The DefaultValue property
     * @param string|null $value Value to set for the DefaultValue property.
    */
    public function setDefaultValue(?string $value): void {
        $this->defaultValue = $value;
    }

    /**
     * Sets the Id property value. The Id property
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the Name property value. The Name property
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the Required property value. The Required property
     * @param bool|null $value Value to set for the Required property.
    */
    public function setRequired(?bool $value): void {
        $this->required = $value;
    }

}
