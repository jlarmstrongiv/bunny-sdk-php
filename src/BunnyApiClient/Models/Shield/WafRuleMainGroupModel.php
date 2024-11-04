<?php

namespace BunnyApiClient\Models\Shield;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WafRuleMainGroupModel implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var array<WafRuleGroupModel>|null $ruleGroups The ruleGroups property
    */
    private ?array $ruleGroups = null;
    
    /**
     * @var string|null $ruleset The ruleset property
    */
    private ?string $ruleset = null;
    
    /**
     * Instantiates a new WafRuleMainGroupModel and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WafRuleMainGroupModel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WafRuleMainGroupModel {
        return new WafRuleMainGroupModel();
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
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'ruleGroups' => fn(ParseNode $n) => $o->setRuleGroups($n->getCollectionOfObjectValues([WafRuleGroupModel::class, 'createFromDiscriminatorValue'])),
            'ruleset' => fn(ParseNode $n) => $o->setRuleset($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the ruleGroups property value. The ruleGroups property
     * @return array<WafRuleGroupModel>|null
    */
    public function getRuleGroups(): ?array {
        return $this->ruleGroups;
    }

    /**
     * Gets the ruleset property value. The ruleset property
     * @return string|null
    */
    public function getRuleset(): ?string {
        return $this->ruleset;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('ruleGroups', $this->getRuleGroups());
        $writer->writeStringValue('ruleset', $this->getRuleset());
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
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the ruleGroups property value. The ruleGroups property
     * @param array<WafRuleGroupModel>|null $value Value to set for the ruleGroups property.
    */
    public function setRuleGroups(?array $value): void {
        $this->ruleGroups = $value;
    }

    /**
     * Sets the ruleset property value. The ruleset property
     * @param string|null $value Value to set for the ruleset property.
    */
    public function setRuleset(?string $value): void {
        $this->ruleset = $value;
    }

}
