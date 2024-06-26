<?php

namespace BunnyApiClient\Models\PullZone\EdgeRule;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Trigger implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $parameter1 The trigger parameter 1. The value depends on the type of trigger.
    */
    private ?string $parameter1 = null;
    
    /**
     * @var array<string>|null $patternMatches The list of pattern matches that will trigger the edge rule
    */
    private ?array $patternMatches = null;
    
    /**
     * @var float|null $patternMatchingType The PatternMatchingType property
    */
    private ?float $patternMatchingType = null;
    
    /**
     * @var float|null $type The Type property
    */
    private ?float $type = null;
    
    /**
     * Instantiates a new Trigger and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Trigger
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Trigger {
        return new Trigger();
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
            'Parameter1' => fn(ParseNode $n) => $o->setParameter1($n->getStringValue()),
            'PatternMatches' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPatternMatches($val);
            },
            'PatternMatchingType' => fn(ParseNode $n) => $o->setPatternMatchingType($n->getFloatValue()),
            'Type' => fn(ParseNode $n) => $o->setType($n->getFloatValue()),
        ];
    }

    /**
     * Gets the Parameter1 property value. The trigger parameter 1. The value depends on the type of trigger.
     * @return string|null
    */
    public function getParameter1(): ?string {
        return $this->parameter1;
    }

    /**
     * Gets the PatternMatches property value. The list of pattern matches that will trigger the edge rule
     * @return array<string>|null
    */
    public function getPatternMatches(): ?array {
        return $this->patternMatches;
    }

    /**
     * Gets the PatternMatchingType property value. The PatternMatchingType property
     * @return float|null
    */
    public function getPatternMatchingType(): ?float {
        return $this->patternMatchingType;
    }

    /**
     * Gets the Type property value. The Type property
     * @return float|null
    */
    public function getType(): ?float {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Parameter1', $this->getParameter1());
        $writer->writeCollectionOfPrimitiveValues('PatternMatches', $this->getPatternMatches());
        $writer->writeFloatValue('PatternMatchingType', $this->getPatternMatchingType());
        $writer->writeFloatValue('Type', $this->getType());
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
     * Sets the Parameter1 property value. The trigger parameter 1. The value depends on the type of trigger.
     * @param string|null $value Value to set for the Parameter1 property.
    */
    public function setParameter1(?string $value): void {
        $this->parameter1 = $value;
    }

    /**
     * Sets the PatternMatches property value. The list of pattern matches that will trigger the edge rule
     * @param array<string>|null $value Value to set for the PatternMatches property.
    */
    public function setPatternMatches(?array $value): void {
        $this->patternMatches = $value;
    }

    /**
     * Sets the PatternMatchingType property value. The PatternMatchingType property
     * @param float|null $value Value to set for the PatternMatchingType property.
    */
    public function setPatternMatchingType(?float $value): void {
        $this->patternMatchingType = $value;
    }

    /**
     * Sets the Type property value. The Type property
     * @param float|null $value Value to set for the Type property.
    */
    public function setType(?float $value): void {
        $this->type = $value;
    }

}
