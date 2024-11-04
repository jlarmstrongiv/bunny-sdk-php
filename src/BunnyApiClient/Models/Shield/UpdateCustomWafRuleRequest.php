<?php

namespace BunnyApiClient\Models\Shield;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateCustomWafRuleRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CreateCustomWafRuleModel|null $ruleConfiguration The ruleConfiguration property
    */
    private ?CreateCustomWafRuleModel $ruleConfiguration = null;
    
    /**
     * @var string|null $ruleDescription The ruleDescription property
    */
    private ?string $ruleDescription = null;
    
    /**
     * @var string|null $ruleName The ruleName property
    */
    private ?string $ruleName = null;
    
    /**
     * Instantiates a new UpdateCustomWafRuleRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateCustomWafRuleRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateCustomWafRuleRequest {
        return new UpdateCustomWafRuleRequest();
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
            'ruleConfiguration' => fn(ParseNode $n) => $o->setRuleConfiguration($n->getObjectValue([CreateCustomWafRuleModel::class, 'createFromDiscriminatorValue'])),
            'ruleDescription' => fn(ParseNode $n) => $o->setRuleDescription($n->getStringValue()),
            'ruleName' => fn(ParseNode $n) => $o->setRuleName($n->getStringValue()),
        ];
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
     * Gets the ruleName property value. The ruleName property
     * @return string|null
    */
    public function getRuleName(): ?string {
        return $this->ruleName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('ruleConfiguration', $this->getRuleConfiguration());
        $writer->writeStringValue('ruleDescription', $this->getRuleDescription());
        $writer->writeStringValue('ruleName', $this->getRuleName());
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
     * Sets the ruleName property value. The ruleName property
     * @param string|null $value Value to set for the ruleName property.
    */
    public function setRuleName(?string $value): void {
        $this->ruleName = $value;
    }

}
