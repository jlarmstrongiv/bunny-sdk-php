<?php

namespace BunnyApiClient\Models\PullZone\EdgeRule;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdgeRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionParameter1 The Action parameter 1. The value depends on other parameters of the edge rule.
    */
    private ?string $actionParameter1 = null;
    
    /**
     * @var string|null $actionParameter2 The Action parameter 2. The value depends on other parameters of the edge rule.
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
     * @var string|null $description The description of the edge rule
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $enabled Determines if the edge rule is currently enabled or not
    */
    private ?bool $enabled = null;
    
    /**
     * @var array<Action>|null $extraActions The ExtraActions property
    */
    private ?array $extraActions = null;
    
    /**
     * @var string|null $guid The unique GUID of the edge rule
    */
    private ?string $guid = null;
    
    /**
     * @var float|null $triggerMatchingType The TriggerMatchingType property
    */
    private ?float $triggerMatchingType = null;
    
    /**
     * @var array<Trigger>|null $triggers The Triggers property
    */
    private ?array $triggers = null;
    
    /**
     * Instantiates a new EdgeRule and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdgeRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdgeRule {
        return new EdgeRule();
    }

    /**
     * Gets the ActionParameter1 property value. The Action parameter 1. The value depends on other parameters of the edge rule.
     * @return string|null
    */
    public function getActionParameter1(): ?string {
        return $this->actionParameter1;
    }

    /**
     * Gets the ActionParameter2 property value. The Action parameter 2. The value depends on other parameters of the edge rule.
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
     * Gets the Description property value. The description of the edge rule
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the Enabled property value. Determines if the edge rule is currently enabled or not
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * Gets the ExtraActions property value. The ExtraActions property
     * @return array<Action>|null
    */
    public function getExtraActions(): ?array {
        return $this->extraActions;
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
            'Description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'Enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'ExtraActions' => fn(ParseNode $n) => $o->setExtraActions($n->getCollectionOfObjectValues([Action::class, 'createFromDiscriminatorValue'])),
            'Guid' => fn(ParseNode $n) => $o->setGuid($n->getStringValue()),
            'TriggerMatchingType' => fn(ParseNode $n) => $o->setTriggerMatchingType($n->getFloatValue()),
            'Triggers' => fn(ParseNode $n) => $o->setTriggers($n->getCollectionOfObjectValues([Trigger::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the Guid property value. The unique GUID of the edge rule
     * @return string|null
    */
    public function getGuid(): ?string {
        return $this->guid;
    }

    /**
     * Gets the TriggerMatchingType property value. The TriggerMatchingType property
     * @return float|null
    */
    public function getTriggerMatchingType(): ?float {
        return $this->triggerMatchingType;
    }

    /**
     * Gets the Triggers property value. The Triggers property
     * @return array<Trigger>|null
    */
    public function getTriggers(): ?array {
        return $this->triggers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('ActionParameter1', $this->getActionParameter1());
        $writer->writeStringValue('ActionParameter2', $this->getActionParameter2());
        $writer->writeFloatValue('ActionType', $this->getActionType());
        $writer->writeStringValue('Description', $this->getDescription());
        $writer->writeBooleanValue('Enabled', $this->getEnabled());
        $writer->writeCollectionOfObjectValues('ExtraActions', $this->getExtraActions());
        $writer->writeStringValue('Guid', $this->getGuid());
        $writer->writeFloatValue('TriggerMatchingType', $this->getTriggerMatchingType());
        $writer->writeCollectionOfObjectValues('Triggers', $this->getTriggers());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the ActionParameter1 property value. The Action parameter 1. The value depends on other parameters of the edge rule.
     * @param string|null $value Value to set for the ActionParameter1 property.
    */
    public function setActionParameter1(?string $value): void {
        $this->actionParameter1 = $value;
    }

    /**
     * Sets the ActionParameter2 property value. The Action parameter 2. The value depends on other parameters of the edge rule.
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

    /**
     * Sets the Description property value. The description of the edge rule
     * @param string|null $value Value to set for the Description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the Enabled property value. Determines if the edge rule is currently enabled or not
     * @param bool|null $value Value to set for the Enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the ExtraActions property value. The ExtraActions property
     * @param array<Action>|null $value Value to set for the ExtraActions property.
    */
    public function setExtraActions(?array $value): void {
        $this->extraActions = $value;
    }

    /**
     * Sets the Guid property value. The unique GUID of the edge rule
     * @param string|null $value Value to set for the Guid property.
    */
    public function setGuid(?string $value): void {
        $this->guid = $value;
    }

    /**
     * Sets the TriggerMatchingType property value. The TriggerMatchingType property
     * @param float|null $value Value to set for the TriggerMatchingType property.
    */
    public function setTriggerMatchingType(?float $value): void {
        $this->triggerMatchingType = $value;
    }

    /**
     * Sets the Triggers property value. The Triggers property
     * @param array<Trigger>|null $value Value to set for the Triggers property.
    */
    public function setTriggers(?array $value): void {
        $this->triggers = $value;
    }

}
