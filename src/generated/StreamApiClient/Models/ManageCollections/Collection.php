<?php

namespace StreamApiClient\Models\ManageCollections;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Collection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $guid The unique ID of the collection
    */
    private ?string $guid = null;
    
    /**
     * @var string|null $name The name of the collection
    */
    private ?string $name = null;
    
    /**
     * @var string|null $previewImageUrls The URLs of preview images of videos in the collection
    */
    private ?string $previewImageUrls = null;
    
    /**
     * @var string|null $previewVideoIds The IDs of videos to be used as preview icons
    */
    private ?string $previewVideoIds = null;
    
    /**
     * @var int|null $totalSize The total storage size of the collection
    */
    private ?int $totalSize = null;
    
    /**
     * @var int|null $videoCount The number of videos that the collection contains
    */
    private ?int $videoCount = null;
    
    /**
     * @var int|null $videoLibraryId The video library ID that contains the collection
    */
    private ?int $videoLibraryId = null;
    
    /**
     * Instantiates a new Collection and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Collection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Collection {
        return new Collection();
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
            'guid' => fn(ParseNode $n) => $o->setGuid($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'previewImageUrls' => fn(ParseNode $n) => $o->setPreviewImageUrls($n->getStringValue()),
            'previewVideoIds' => fn(ParseNode $n) => $o->setPreviewVideoIds($n->getStringValue()),
            'totalSize' => fn(ParseNode $n) => $o->setTotalSize($n->getIntegerValue()),
            'videoCount' => fn(ParseNode $n) => $o->setVideoCount($n->getIntegerValue()),
            'videoLibraryId' => fn(ParseNode $n) => $o->setVideoLibraryId($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the guid property value. The unique ID of the collection
     * @return string|null
    */
    public function getGuid(): ?string {
        return $this->guid;
    }

    /**
     * Gets the name property value. The name of the collection
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the previewImageUrls property value. The URLs of preview images of videos in the collection
     * @return string|null
    */
    public function getPreviewImageUrls(): ?string {
        return $this->previewImageUrls;
    }

    /**
     * Gets the previewVideoIds property value. The IDs of videos to be used as preview icons
     * @return string|null
    */
    public function getPreviewVideoIds(): ?string {
        return $this->previewVideoIds;
    }

    /**
     * Gets the totalSize property value. The total storage size of the collection
     * @return int|null
    */
    public function getTotalSize(): ?int {
        return $this->totalSize;
    }

    /**
     * Gets the videoCount property value. The number of videos that the collection contains
     * @return int|null
    */
    public function getVideoCount(): ?int {
        return $this->videoCount;
    }

    /**
     * Gets the videoLibraryId property value. The video library ID that contains the collection
     * @return int|null
    */
    public function getVideoLibraryId(): ?int {
        return $this->videoLibraryId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->getName());
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
     * Sets the guid property value. The unique ID of the collection
     * @param string|null $value Value to set for the guid property.
    */
    public function setGuid(?string $value): void {
        $this->guid = $value;
    }

    /**
     * Sets the name property value. The name of the collection
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the previewImageUrls property value. The URLs of preview images of videos in the collection
     * @param string|null $value Value to set for the previewImageUrls property.
    */
    public function setPreviewImageUrls(?string $value): void {
        $this->previewImageUrls = $value;
    }

    /**
     * Sets the previewVideoIds property value. The IDs of videos to be used as preview icons
     * @param string|null $value Value to set for the previewVideoIds property.
    */
    public function setPreviewVideoIds(?string $value): void {
        $this->previewVideoIds = $value;
    }

    /**
     * Sets the totalSize property value. The total storage size of the collection
     * @param int|null $value Value to set for the totalSize property.
    */
    public function setTotalSize(?int $value): void {
        $this->totalSize = $value;
    }

    /**
     * Sets the videoCount property value. The number of videos that the collection contains
     * @param int|null $value Value to set for the videoCount property.
    */
    public function setVideoCount(?int $value): void {
        $this->videoCount = $value;
    }

    /**
     * Sets the videoLibraryId property value. The video library ID that contains the collection
     * @param int|null $value Value to set for the videoLibraryId property.
    */
    public function setVideoLibraryId(?int $value): void {
        $this->videoLibraryId = $value;
    }

}
