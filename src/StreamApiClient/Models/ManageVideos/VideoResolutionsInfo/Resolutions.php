<?php

namespace StreamApiClient\Models\ManageVideos\VideoResolutionsInfo;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Resolutions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $path The path property
    */
    private ?string $path = null;
    
    /**
     * @var string|null $resolution The resolution property
    */
    private ?string $resolution = null;
    
    /**
     * Instantiates a new Resolutions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Resolutions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Resolutions {
        return new Resolutions();
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
            'path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
            'resolution' => fn(ParseNode $n) => $o->setResolution($n->getStringValue()),
        ];
    }

    /**
     * Gets the path property value. The path property
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->path;
    }

    /**
     * Gets the resolution property value. The resolution property
     * @return string|null
    */
    public function getResolution(): ?string {
        return $this->resolution;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('path', $this->getPath());
        $writer->writeStringValue('resolution', $this->getResolution());
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
     * Sets the path property value. The path property
     * @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value): void {
        $this->path = $value;
    }

    /**
     * Sets the resolution property value. The resolution property
     * @param string|null $value Value to set for the resolution property.
    */
    public function setResolution(?string $value): void {
        $this->resolution = $value;
    }

}
