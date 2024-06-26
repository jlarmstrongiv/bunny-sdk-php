<?php

namespace BunnyApiClient\Pullzone\Item\RemoveAllowedReferrer;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoveAllowedReferrerPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $hostname The hostname that will be removed as an allowed referer
    */
    private ?string $hostname = null;
    
    /**
     * Instantiates a new RemoveAllowedReferrerPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoveAllowedReferrerPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoveAllowedReferrerPostRequestBody {
        return new RemoveAllowedReferrerPostRequestBody();
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
            'Hostname' => fn(ParseNode $n) => $o->setHostname($n->getStringValue()),
        ];
    }

    /**
     * Gets the Hostname property value. The hostname that will be removed as an allowed referer
     * @return string|null
    */
    public function getHostname(): ?string {
        return $this->hostname;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Hostname', $this->getHostname());
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
     * Sets the Hostname property value. The hostname that will be removed as an allowed referer
     * @param string|null $value Value to set for the Hostname property.
    */
    public function setHostname(?string $value): void {
        $this->hostname = $value;
    }

}
