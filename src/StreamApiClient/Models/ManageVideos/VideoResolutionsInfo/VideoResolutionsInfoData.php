<?php

namespace StreamApiClient\Models\ManageVideos\VideoResolutionsInfo;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VideoResolutionsInfoData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $availableResolutions The availableResolutions property
    */
    private ?array $availableResolutions = null;
    
    /**
     * @var array<string>|null $configuredResolutions The configuredResolutions property
    */
    private ?array $configuredResolutions = null;
    
    /**
     * @var bool|null $hasOriginal The hasOriginal property
    */
    private ?bool $hasOriginal = null;
    
    /**
     * @var Resolutions|null $mp4Resolutions The mp4Resolutions property
    */
    private ?Resolutions $mp4Resolutions = null;
    
    /**
     * @var Resolutions|null $playlistResolutions The playlistResolutions property
    */
    private ?Resolutions $playlistResolutions = null;
    
    /**
     * @var Resolutions|null $storageResolutions The storageResolutions property
    */
    private ?Resolutions $storageResolutions = null;
    
    /**
     * @var string|null $videoId The videoId property
    */
    private ?string $videoId = null;
    
    /**
     * @var int|null $videoLibraryId The videoLibraryId property
    */
    private ?int $videoLibraryId = null;
    
    /**
     * Instantiates a new VideoResolutionsInfoData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoResolutionsInfoData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoResolutionsInfoData {
        return new VideoResolutionsInfoData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the availableResolutions property value. The availableResolutions property
     * @return array<string>|null
    */
    public function getAvailableResolutions(): ?array {
        return $this->availableResolutions;
    }

    /**
     * Gets the configuredResolutions property value. The configuredResolutions property
     * @return array<string>|null
    */
    public function getConfiguredResolutions(): ?array {
        return $this->configuredResolutions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availableResolutions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAvailableResolutions($val);
            },
            'configuredResolutions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setConfiguredResolutions($val);
            },
            'hasOriginal' => fn(ParseNode $n) => $o->setHasOriginal($n->getBooleanValue()),
            'mp4Resolutions' => fn(ParseNode $n) => $o->setMp4Resolutions($n->getObjectValue([Resolutions::class, 'createFromDiscriminatorValue'])),
            'playlistResolutions' => fn(ParseNode $n) => $o->setPlaylistResolutions($n->getObjectValue([Resolutions::class, 'createFromDiscriminatorValue'])),
            'storageResolutions' => fn(ParseNode $n) => $o->setStorageResolutions($n->getObjectValue([Resolutions::class, 'createFromDiscriminatorValue'])),
            'videoId' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
            'videoLibraryId' => fn(ParseNode $n) => $o->setVideoLibraryId($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the hasOriginal property value. The hasOriginal property
     * @return bool|null
    */
    public function getHasOriginal(): ?bool {
        return $this->hasOriginal;
    }

    /**
     * Gets the mp4Resolutions property value. The mp4Resolutions property
     * @return Resolutions|null
    */
    public function getMp4Resolutions(): ?Resolutions {
        return $this->mp4Resolutions;
    }

    /**
     * Gets the playlistResolutions property value. The playlistResolutions property
     * @return Resolutions|null
    */
    public function getPlaylistResolutions(): ?Resolutions {
        return $this->playlistResolutions;
    }

    /**
     * Gets the storageResolutions property value. The storageResolutions property
     * @return Resolutions|null
    */
    public function getStorageResolutions(): ?Resolutions {
        return $this->storageResolutions;
    }

    /**
     * Gets the videoId property value. The videoId property
     * @return string|null
    */
    public function getVideoId(): ?string {
        return $this->videoId;
    }

    /**
     * Gets the videoLibraryId property value. The videoLibraryId property
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
        $writer->writeCollectionOfPrimitiveValues('availableResolutions', $this->getAvailableResolutions());
        $writer->writeCollectionOfPrimitiveValues('configuredResolutions', $this->getConfiguredResolutions());
        $writer->writeBooleanValue('hasOriginal', $this->getHasOriginal());
        $writer->writeObjectValue('mp4Resolutions', $this->getMp4Resolutions());
        $writer->writeObjectValue('playlistResolutions', $this->getPlaylistResolutions());
        $writer->writeObjectValue('storageResolutions', $this->getStorageResolutions());
        $writer->writeStringValue('videoId', $this->getVideoId());
        $writer->writeIntegerValue('videoLibraryId', $this->getVideoLibraryId());
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
     * Sets the availableResolutions property value. The availableResolutions property
     * @param array<string>|null $value Value to set for the availableResolutions property.
    */
    public function setAvailableResolutions(?array $value): void {
        $this->availableResolutions = $value;
    }

    /**
     * Sets the configuredResolutions property value. The configuredResolutions property
     * @param array<string>|null $value Value to set for the configuredResolutions property.
    */
    public function setConfiguredResolutions(?array $value): void {
        $this->configuredResolutions = $value;
    }

    /**
     * Sets the hasOriginal property value. The hasOriginal property
     * @param bool|null $value Value to set for the hasOriginal property.
    */
    public function setHasOriginal(?bool $value): void {
        $this->hasOriginal = $value;
    }

    /**
     * Sets the mp4Resolutions property value. The mp4Resolutions property
     * @param Resolutions|null $value Value to set for the mp4Resolutions property.
    */
    public function setMp4Resolutions(?Resolutions $value): void {
        $this->mp4Resolutions = $value;
    }

    /**
     * Sets the playlistResolutions property value. The playlistResolutions property
     * @param Resolutions|null $value Value to set for the playlistResolutions property.
    */
    public function setPlaylistResolutions(?Resolutions $value): void {
        $this->playlistResolutions = $value;
    }

    /**
     * Sets the storageResolutions property value. The storageResolutions property
     * @param Resolutions|null $value Value to set for the storageResolutions property.
    */
    public function setStorageResolutions(?Resolutions $value): void {
        $this->storageResolutions = $value;
    }

    /**
     * Sets the videoId property value. The videoId property
     * @param string|null $value Value to set for the videoId property.
    */
    public function setVideoId(?string $value): void {
        $this->videoId = $value;
    }

    /**
     * Sets the videoLibraryId property value. The videoLibraryId property
     * @param int|null $value Value to set for the videoLibraryId property.
    */
    public function setVideoLibraryId(?int $value): void {
        $this->videoLibraryId = $value;
    }

}
