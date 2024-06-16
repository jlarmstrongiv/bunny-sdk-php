<?php

namespace BunnyApiClient\Models\PullZone\EdgeRule;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Action implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionParameter1 The ActionParameter1 property
    */
    private ?string $actionParameter1 = null;
    
    /**
     * @var string|null $actionParameter2 The ActionParameter2 property
    */
    private ?string $actionParameter2 = null;
    
    /**
     * @var float|null $actionType The ActionType property
    */
    private ?float $actionType = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * Instantiates a new Action and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Action
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Action {
        return new Action();
    }

    /**
     * Gets the ActionParameter1 property value. The ActionParameter1 property
     * @return string|null
    */
    public function getActionParameter1(): ?string {
        return $this->actionParameter1;
    }

    /**
     * Gets the ActionParameter2 property value. The ActionParameter2 property
     * @return string|null
    */
    public function getActionParameter2(): ?string {
        return $this->actionParameter2;
    }

    /**
     * Gets the ActionType property value. The ActionType property
     * @return float|null
    */
    public function getActionType(): ?float {
        return $this->actionType;
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
            'ActionParameter1' => fn(ParseNode $n) => $o->setActionParameter1($n->getStringValue()),
            'ActionParameter2' => fn(ParseNode $n) => $o->setActionParameter2($n->getStringValue()),
            'ActionType' => fn(ParseNode $n) => $o->setActionType($n->getFloatValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('ActionParameter1', $this->getActionParameter1());
        $writer->writeStringValue('ActionParameter2', $this->getActionParameter2());
        $writer->writeFloatValue('ActionType', $this->getActionType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the ActionParameter1 property value. The ActionParameter1 property
     * @param string|null $value Value to set for the ActionParameter1 property.
    */
    public function setActionParameter1(?string $value): void {
        $this->actionParameter1 = $value;
    }

    /**
     * Sets the ActionParameter2 property value. The ActionParameter2 property
     * @param string|null $value Value to set for the ActionParameter2 property.
    */
    public function setActionParameter2(?string $value): void {
        $this->actionParameter2 = $value;
    }

    /**
     * Sets the ActionType property value. The ActionType property
     * @param float|null $value Value to set for the ActionType property.
    */
    public function setActionType(?float $value): void {
        $this->actionType = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

}
