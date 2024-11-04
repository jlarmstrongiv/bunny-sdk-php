<?php

namespace BunnyApiClient\Models\Compute;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ScriptCreate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $code The Code property
    */
    private ?string $code = null;
    
    /**
     * @var bool|null $createLinkedPullZone The CreateLinkedPullZone property
    */
    private ?bool $createLinkedPullZone = null;
    
    /**
     * @var Integration|null $integration The Integration property
    */
    private ?Integration $integration = null;
    
    /**
     * @var string|null $name The Name property
    */
    private ?string $name = null;
    
    /**
     * @var float|null $scriptType The ScriptType property
    */
    private ?float $scriptType = null;
    
    /**
     * Instantiates a new ScriptCreate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ScriptCreate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ScriptCreate {
        return new ScriptCreate();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the Code property value. The Code property
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the CreateLinkedPullZone property value. The CreateLinkedPullZone property
     * @return bool|null
    */
    public function getCreateLinkedPullZone(): ?bool {
        return $this->createLinkedPullZone;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'CreateLinkedPullZone' => fn(ParseNode $n) => $o->setCreateLinkedPullZone($n->getBooleanValue()),
            'Integration' => fn(ParseNode $n) => $o->setIntegration($n->getObjectValue([Integration::class, 'createFromDiscriminatorValue'])),
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'ScriptType' => fn(ParseNode $n) => $o->setScriptType($n->getFloatValue()),
        ];
    }

    /**
     * Gets the Integration property value. The Integration property
     * @return Integration|null
    */
    public function getIntegration(): ?Integration {
        return $this->integration;
    }

    /**
     * Gets the Name property value. The Name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the ScriptType property value. The ScriptType property
     * @return float|null
    */
    public function getScriptType(): ?float {
        return $this->scriptType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Code', $this->getCode());
        $writer->writeBooleanValue('CreateLinkedPullZone', $this->getCreateLinkedPullZone());
        $writer->writeObjectValue('Integration', $this->getIntegration());
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeFloatValue('ScriptType', $this->getScriptType());
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
     * Sets the Code property value. The Code property
     * @param string|null $value Value to set for the Code property.
    */
    public function setCode(?string $value): void {
        $this->code = $value;
    }

    /**
     * Sets the CreateLinkedPullZone property value. The CreateLinkedPullZone property
     * @param bool|null $value Value to set for the CreateLinkedPullZone property.
    */
    public function setCreateLinkedPullZone(?bool $value): void {
        $this->createLinkedPullZone = $value;
    }

    /**
     * Sets the Integration property value. The Integration property
     * @param Integration|null $value Value to set for the Integration property.
    */
    public function setIntegration(?Integration $value): void {
        $this->integration = $value;
    }

    /**
     * Sets the Name property value. The Name property
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the ScriptType property value. The ScriptType property
     * @param float|null $value Value to set for the ScriptType property.
    */
    public function setScriptType(?float $value): void {
        $this->scriptType = $value;
    }

}
