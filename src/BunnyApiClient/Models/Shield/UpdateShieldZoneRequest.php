<?php

namespace BunnyApiClient\Models\Shield;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateShieldZoneRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var ShieldZoneRequest|null $shieldZone The shieldZone property
    */
    private ?ShieldZoneRequest $shieldZone = null;
    
    /**
     * @var int|null $shieldZoneId The shieldZoneId property
    */
    private ?int $shieldZoneId = null;
    
    /**
     * Instantiates a new UpdateShieldZoneRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateShieldZoneRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateShieldZoneRequest {
        return new UpdateShieldZoneRequest();
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
            'shieldZone' => fn(ParseNode $n) => $o->setShieldZone($n->getObjectValue([ShieldZoneRequest::class, 'createFromDiscriminatorValue'])),
            'shieldZoneId' => fn(ParseNode $n) => $o->setShieldZoneId($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the shieldZone property value. The shieldZone property
     * @return ShieldZoneRequest|null
    */
    public function getShieldZone(): ?ShieldZoneRequest {
        return $this->shieldZone;
    }

    /**
     * Gets the shieldZoneId property value. The shieldZoneId property
     * @return int|null
    */
    public function getShieldZoneId(): ?int {
        return $this->shieldZoneId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('shieldZone', $this->getShieldZone());
        $writer->writeIntegerValue('shieldZoneId', $this->getShieldZoneId());
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
     * Sets the shieldZone property value. The shieldZone property
     * @param ShieldZoneRequest|null $value Value to set for the shieldZone property.
    */
    public function setShieldZone(?ShieldZoneRequest $value): void {
        $this->shieldZone = $value;
    }

    /**
     * Sets the shieldZoneId property value. The shieldZoneId property
     * @param int|null $value Value to set for the shieldZoneId property.
    */
    public function setShieldZoneId(?int $value): void {
        $this->shieldZoneId = $value;
    }

}
