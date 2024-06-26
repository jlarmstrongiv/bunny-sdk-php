<?php

namespace StreamApiClient\OEmbed;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OEmbedGetResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $height The height property
    */
    private ?int $height = null;
    
    /**
     * @var string|null $html The html property
    */
    private ?string $html = null;
    
    /**
     * @var string|null $providerName The providerName property
    */
    private ?string $providerName = null;
    
    /**
     * @var string|null $providerUrl The providerUrl property
    */
    private ?string $providerUrl = null;
    
    /**
     * @var string|null $thumbnailUrl The thumbnailUrl property
    */
    private ?string $thumbnailUrl = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * @var string|null $version The version property
    */
    private ?string $version = null;
    
    /**
     * @var int|null $width The width property
    */
    private ?int $width = null;
    
    /**
     * Instantiates a new OEmbedGetResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OEmbedGetResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OEmbedGetResponse {
        return new OEmbedGetResponse();
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
            'height' => fn(ParseNode $n) => $o->setHeight($n->getIntegerValue()),
            'html' => fn(ParseNode $n) => $o->setHtml($n->getStringValue()),
            'providerName' => fn(ParseNode $n) => $o->setProviderName($n->getStringValue()),
            'providerUrl' => fn(ParseNode $n) => $o->setProviderUrl($n->getStringValue()),
            'thumbnailUrl' => fn(ParseNode $n) => $o->setThumbnailUrl($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the height property value. The height property
     * @return int|null
    */
    public function getHeight(): ?int {
        return $this->height;
    }

    /**
     * Gets the html property value. The html property
     * @return string|null
    */
    public function getHtml(): ?string {
        return $this->html;
    }

    /**
     * Gets the providerName property value. The providerName property
     * @return string|null
    */
    public function getProviderName(): ?string {
        return $this->providerName;
    }

    /**
     * Gets the providerUrl property value. The providerUrl property
     * @return string|null
    */
    public function getProviderUrl(): ?string {
        return $this->providerUrl;
    }

    /**
     * Gets the thumbnailUrl property value. The thumbnailUrl property
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->thumbnailUrl;
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Gets the width property value. The width property
     * @return int|null
    */
    public function getWidth(): ?int {
        return $this->width;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('height', $this->getHeight());
        $writer->writeStringValue('html', $this->getHtml());
        $writer->writeStringValue('providerName', $this->getProviderName());
        $writer->writeStringValue('providerUrl', $this->getProviderUrl());
        $writer->writeStringValue('thumbnailUrl', $this->getThumbnailUrl());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeStringValue('version', $this->getVersion());
        $writer->writeIntegerValue('width', $this->getWidth());
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
     * Sets the height property value. The height property
     * @param int|null $value Value to set for the height property.
    */
    public function setHeight(?int $value): void {
        $this->height = $value;
    }

    /**
     * Sets the html property value. The html property
     * @param string|null $value Value to set for the html property.
    */
    public function setHtml(?string $value): void {
        $this->html = $value;
    }

    /**
     * Sets the providerName property value. The providerName property
     * @param string|null $value Value to set for the providerName property.
    */
    public function setProviderName(?string $value): void {
        $this->providerName = $value;
    }

    /**
     * Sets the providerUrl property value. The providerUrl property
     * @param string|null $value Value to set for the providerUrl property.
    */
    public function setProviderUrl(?string $value): void {
        $this->providerUrl = $value;
    }

    /**
     * Sets the thumbnailUrl property value. The thumbnailUrl property
     * @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value): void {
        $this->thumbnailUrl = $value;
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

    /**
     * Sets the version property value. The version property
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->version = $value;
    }

    /**
     * Sets the width property value. The width property
     * @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value): void {
        $this->width = $value;
    }

}
