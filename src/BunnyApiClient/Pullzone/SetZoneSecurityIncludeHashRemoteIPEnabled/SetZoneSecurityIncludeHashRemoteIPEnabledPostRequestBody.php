<?php

namespace BunnyApiClient\Pullzone\SetZoneSecurityIncludeHashRemoteIPEnabled;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SetZoneSecurityIncludeHashRemoteIPEnabledPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $id The ID of the requested Pull Zone
    */
    private ?int $id = null;
    
    /**
     * @var bool|null $value Set to true to enable Token Authentication
    */
    private ?bool $value = null;
    
    /**
     * Instantiates a new SetZoneSecurityIncludeHashRemoteIPEnabledPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetZoneSecurityIncludeHashRemoteIPEnabledPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetZoneSecurityIncludeHashRemoteIPEnabledPostRequestBody {
        return new SetZoneSecurityIncludeHashRemoteIPEnabledPostRequestBody();
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
            'Id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'Value' => fn(ParseNode $n) => $o->setValue($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the Id property value. The ID of the requested Pull Zone
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the Value property value. Set to true to enable Token Authentication
     * @return bool|null
    */
    public function getValue(): ?bool {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('Id', $this->getId());
        $writer->writeBooleanValue('Value', $this->getValue());
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
     * Sets the Id property value. The ID of the requested Pull Zone
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the Value property value. Set to true to enable Token Authentication
     * @param bool|null $value Value to set for the Value property.
    */
    public function setValue(?bool $value): void {
        $this->value = $value;
    }

}
