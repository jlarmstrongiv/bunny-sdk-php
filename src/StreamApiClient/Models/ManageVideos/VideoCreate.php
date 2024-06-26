<?php

namespace StreamApiClient\Models\ManageVideos;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VideoCreate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $collectionId The ID of the collection where the video belongs
    */
    private ?string $collectionId = null;
    
    /**
     * @var int|null $thumbnailTime Video time in ms to extract the main video thumbnail.
    */
    private ?int $thumbnailTime = null;
    
    /**
     * @var string|null $title The title of the video
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new VideoCreate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoCreate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoCreate {
        return new VideoCreate();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the collectionId property value. The ID of the collection where the video belongs
     * @return string|null
    */
    public function getCollectionId(): ?string {
        return $this->collectionId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'collectionId' => fn(ParseNode $n) => $o->setCollectionId($n->getStringValue()),
            'thumbnailTime' => fn(ParseNode $n) => $o->setThumbnailTime($n->getIntegerValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the thumbnailTime property value. Video time in ms to extract the main video thumbnail.
     * @return int|null
    */
    public function getThumbnailTime(): ?int {
        return $this->thumbnailTime;
    }

    /**
     * Gets the title property value. The title of the video
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('collectionId', $this->getCollectionId());
        $writer->writeIntegerValue('thumbnailTime', $this->getThumbnailTime());
        $writer->writeStringValue('title', $this->getTitle());
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
     * Sets the collectionId property value. The ID of the collection where the video belongs
     * @param string|null $value Value to set for the collectionId property.
    */
    public function setCollectionId(?string $value): void {
        $this->collectionId = $value;
    }

    /**
     * Sets the thumbnailTime property value. Video time in ms to extract the main video thumbnail.
     * @param int|null $value Value to set for the thumbnailTime property.
    */
    public function setThumbnailTime(?int $value): void {
        $this->thumbnailTime = $value;
    }

    /**
     * Sets the title property value. The title of the video
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
