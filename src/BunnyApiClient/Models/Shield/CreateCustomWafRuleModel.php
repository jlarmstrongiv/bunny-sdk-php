<?php

namespace BunnyApiClient\Models\Shield;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CreateCustomWafRuleModel implements AdditionalDataHolder, Parsable 
{
    /**
     * @var float|null $actionType The actionType property
    */
    private ?float $actionType = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $operatorType The operatorType property
    */
    private ?float $operatorType = null;
    
    /**
     * @var float|null $severityType The severityType property
    */
    private ?float $severityType = null;
    
    /**
     * @var array<float>|null $transformationTypes The transformationTypes property
    */
    private ?array $transformationTypes = null;
    
    /**
     * @var string|null $value The value property
    */
    private ?string $value = null;
    
    /**
     * @var CreateCustomWafRuleModel_variableTypes|null $variableTypes The variableTypes property
    */
    private ?CreateCustomWafRuleModel_variableTypes $variableTypes = null;
    
    /**
     * Instantiates a new CreateCustomWafRuleModel and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateCustomWafRuleModel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateCustomWafRuleModel {
        return new CreateCustomWafRuleModel();
    }

    /**
     * Gets the actionType property value. The actionType property
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
            'actionType' => fn(ParseNode $n) => $o->setActionType($n->getFloatValue()),
            'operatorType' => fn(ParseNode $n) => $o->setOperatorType($n->getFloatValue()),
            'severityType' => fn(ParseNode $n) => $o->setSeverityType($n->getFloatValue()),
            'transformationTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'float');
                }
                /** @var array<float>|null $val */
                $this->setTransformationTypes($val);
            },
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
            'variableTypes' => fn(ParseNode $n) => $o->setVariableTypes($n->getObjectValue([CreateCustomWafRuleModel_variableTypes::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the operatorType property value. The operatorType property
     * @return float|null
    */
    public function getOperatorType(): ?float {
        return $this->operatorType;
    }

    /**
     * Gets the severityType property value. The severityType property
     * @return float|null
    */
    public function getSeverityType(): ?float {
        return $this->severityType;
    }

    /**
     * Gets the transformationTypes property value. The transformationTypes property
     * @return array<float>|null
    */
    public function getTransformationTypes(): ?array {
        return $this->transformationTypes;
    }

    /**
     * Gets the value property value. The value property
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Gets the variableTypes property value. The variableTypes property
     * @return CreateCustomWafRuleModel_variableTypes|null
    */
    public function getVariableTypes(): ?CreateCustomWafRuleModel_variableTypes {
        return $this->variableTypes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('actionType', $this->getActionType());
        $writer->writeFloatValue('operatorType', $this->getOperatorType());
        $writer->writeFloatValue('severityType', $this->getSeverityType());
        $writer->writeCollectionOfPrimitiveValues('transformationTypes', $this->getTransformationTypes());
        $writer->writeStringValue('value', $this->getValue());
        $writer->writeObjectValue('variableTypes', $this->getVariableTypes());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionType property value. The actionType property
     * @param float|null $value Value to set for the actionType property.
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
     * Sets the operatorType property value. The operatorType property
     * @param float|null $value Value to set for the operatorType property.
    */
    public function setOperatorType(?float $value): void {
        $this->operatorType = $value;
    }

    /**
     * Sets the severityType property value. The severityType property
     * @param float|null $value Value to set for the severityType property.
    */
    public function setSeverityType(?float $value): void {
        $this->severityType = $value;
    }

    /**
     * Sets the transformationTypes property value. The transformationTypes property
     * @param array<float>|null $value Value to set for the transformationTypes property.
    */
    public function setTransformationTypes(?array $value): void {
        $this->transformationTypes = $value;
    }

    /**
     * Sets the value property value. The value property
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

    /**
     * Sets the variableTypes property value. The variableTypes property
     * @param CreateCustomWafRuleModel_variableTypes|null $value Value to set for the variableTypes property.
    */
    public function setVariableTypes(?CreateCustomWafRuleModel_variableTypes $value): void {
        $this->variableTypes = $value;
    }

}
