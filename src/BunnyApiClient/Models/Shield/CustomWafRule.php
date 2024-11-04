<?php

namespace BunnyApiClient\Models\Shield;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomWafRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $id The id property
    */
    private ?int $id = null;
    
    /**
     * @var CreateCustomWafRuleModel|null $ruleConfiguration The ruleConfiguration property
    */
    private ?CreateCustomWafRuleModel $ruleConfiguration = null;
    
    /**
     * @var string|null $ruleDescription The ruleDescription property
    */
    private ?string $ruleDescription = null;
    
    /**
     * @var string|null $ruleJson The ruleJson property
    */
    private ?string $ruleJson = null;
    
    /**
     * @var string|null $ruleName The ruleName property
    */
    private ?string $ruleName = null;
    
    /**
     * @var int|null $shieldZoneId The shieldZoneId property
    */
    private ?int $shieldZoneId = null;
    
    /**
     * @var string|null $userId The userId property
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new CustomWafRule and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomWafRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomWafRule {
        return new CustomWafRule();
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
            'id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'ruleConfiguration' => fn(ParseNode $n) => $o->setRuleConfiguration($n->getObjectValue([CreateCustomWafRuleModel::class, 'createFromDiscriminatorValue'])),
            'ruleDescription' => fn(ParseNode $n) => $o->setRuleDescription($n->getStringValue()),
            'ruleJson' => fn(ParseNode $n) => $o->setRuleJson($n->getStringValue()),
            'ruleName' => fn(ParseNode $n) => $o->setRuleName($n->getStringValue()),
            'shieldZoneId' => fn(ParseNode $n) => $o->setShieldZoneId($n->getIntegerValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the ruleConfiguration property value. The ruleConfiguration property
     * @return CreateCustomWafRuleModel|null
    */
    public function getRuleConfiguration(): ?CreateCustomWafRuleModel {
        return $this->ruleConfiguration;
    }

    /**
     * Gets the ruleDescription property value. The ruleDescription property
     * @return string|null
    */
    public function getRuleDescription(): ?string {
        return $this->ruleDescription;
    }

    /**
     * Gets the ruleJson property value. The ruleJson property
     * @return string|null
    */
    public function getRuleJson(): ?string {
        return $this->ruleJson;
    }

    /**
     * Gets the ruleName property value. The ruleName property
     * @return string|null
    */
    public function getRuleName(): ?string {
        return $this->ruleName;
    }

    /**
     * Gets the shieldZoneId property value. The shieldZoneId property
     * @return int|null
    */
    public function getShieldZoneId(): ?int {
        return $this->shieldZoneId;
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('id', $this->getId());
        $writer->writeObjectValue('ruleConfiguration', $this->getRuleConfiguration());
        $writer->writeStringValue('ruleDescription', $this->getRuleDescription());
        $writer->writeStringValue('ruleJson', $this->getRuleJson());
        $writer->writeStringValue('ruleName', $this->getRuleName());
        $writer->writeIntegerValue('shieldZoneId', $this->getShieldZoneId());
        $writer->writeStringValue('userId', $this->getUserId());
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
     * Sets the id property value. The id property
     * @param int|null $value Value to set for the id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the ruleConfiguration property value. The ruleConfiguration property
     * @param CreateCustomWafRuleModel|null $value Value to set for the ruleConfiguration property.
    */
    public function setRuleConfiguration(?CreateCustomWafRuleModel $value): void {
        $this->ruleConfiguration = $value;
    }

    /**
     * Sets the ruleDescription property value. The ruleDescription property
     * @param string|null $value Value to set for the ruleDescription property.
    */
    public function setRuleDescription(?string $value): void {
        $this->ruleDescription = $value;
    }

    /**
     * Sets the ruleJson property value. The ruleJson property
     * @param string|null $value Value to set for the ruleJson property.
    */
    public function setRuleJson(?string $value): void {
        $this->ruleJson = $value;
    }

    /**
     * Sets the ruleName property value. The ruleName property
     * @param string|null $value Value to set for the ruleName property.
    */
    public function setRuleName(?string $value): void {
        $this->ruleName = $value;
    }

    /**
     * Sets the shieldZoneId property value. The shieldZoneId property
     * @param int|null $value Value to set for the shieldZoneId property.
    */
    public function setShieldZoneId(?int $value): void {
        $this->shieldZoneId = $value;
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
