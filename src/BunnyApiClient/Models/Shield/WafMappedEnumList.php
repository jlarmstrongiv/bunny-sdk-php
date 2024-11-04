<?php

namespace BunnyApiClient\Models\Shield;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WafMappedEnumList implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $enumName The enumName property
    */
    private ?string $enumName = null;
    
    /**
     * @var array<WafMappedEnum>|null $enumValues The enumValues property
    */
    private ?array $enumValues = null;
    
    /**
     * Instantiates a new WafMappedEnumList and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WafMappedEnumList
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WafMappedEnumList {
        return new WafMappedEnumList();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the enumName property value. The enumName property
     * @return string|null
    */
    public function getEnumName(): ?string {
        return $this->enumName;
    }

    /**
     * Gets the enumValues property value. The enumValues property
     * @return array<WafMappedEnum>|null
    */
    public function getEnumValues(): ?array {
        return $this->enumValues;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enumName' => fn(ParseNode $n) => $o->setEnumName($n->getStringValue()),
            'enumValues' => fn(ParseNode $n) => $o->setEnumValues($n->getCollectionOfObjectValues([WafMappedEnum::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('enumName', $this->getEnumName());
        $writer->writeCollectionOfObjectValues('enumValues', $this->getEnumValues());
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
     * Sets the enumName property value. The enumName property
     * @param string|null $value Value to set for the enumName property.
    */
    public function setEnumName(?string $value): void {
        $this->enumName = $value;
    }

    /**
     * Sets the enumValues property value. The enumValues property
     * @param array<WafMappedEnum>|null $value Value to set for the enumValues property.
    */
    public function setEnumValues(?array $value): void {
        $this->enumValues = $value;
    }

}
