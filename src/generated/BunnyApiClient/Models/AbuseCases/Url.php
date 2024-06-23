<?php

namespace BunnyApiClient\Models\AbuseCases;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Url implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $status The Status property
    */
    private ?float $status = null;
    
    /**
     * @var string|null $url The Url property
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new Url and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Url
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Url {
        return new Url();
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
            'Status' => fn(ParseNode $n) => $o->setStatus($n->getFloatValue()),
            'Url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the Status property value. The Status property
     * @return float|null
    */
    public function getStatus(): ?float {
        return $this->status;
    }

    /**
     * Gets the Url property value. The Url property
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('Status', $this->getStatus());
        $writer->writeStringValue('Url', $this->getUrl());
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
     * Sets the Status property value. The Status property
     * @param float|null $value Value to set for the Status property.
    */
    public function setStatus(?float $value): void {
        $this->status = $value;
    }

    /**
     * Sets the Url property value. The Url property
     * @param string|null $value Value to set for the Url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
