<?php

namespace BunnyApiClient\Pullzone\Item\RemoveBlockedIp;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoveBlockedIpPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $blockedIp The IP that will be removed from the block list
    */
    private ?string $blockedIp = null;
    
    /**
     * Instantiates a new RemoveBlockedIpPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoveBlockedIpPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoveBlockedIpPostRequestBody {
        return new RemoveBlockedIpPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the BlockedIp property value. The IP that will be removed from the block list
     * @return string|null
    */
    public function getBlockedIp(): ?string {
        return $this->blockedIp;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'BlockedIp' => fn(ParseNode $n) => $o->setBlockedIp($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('BlockedIp', $this->getBlockedIp());
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
     * Sets the BlockedIp property value. The IP that will be removed from the block list
     * @param string|null $value Value to set for the BlockedIp property.
    */
    public function setBlockedIp(?string $value): void {
        $this->blockedIp = $value;
    }

}
