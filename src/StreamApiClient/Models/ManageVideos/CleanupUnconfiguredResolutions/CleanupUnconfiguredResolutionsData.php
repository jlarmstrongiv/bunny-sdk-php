<?php

namespace StreamApiClient\Models\ManageVideos\CleanupUnconfiguredResolutions;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CleanupUnconfiguredResolutionsData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $availableResolutionsAfter The availableResolutionsAfter property
    */
    private ?array $availableResolutionsAfter = null;
    
    /**
     * @var bool|null $deletedOriginal The deletedOriginal property
    */
    private ?bool $deletedOriginal = null;
    
    /**
     * @var bool|null $deletedStorageObjects The deletedStorageObjects property
    */
    private ?bool $deletedStorageObjects = null;
    
    /**
     * @var bool|null $modifiedPlaylist The modifiedPlaylist property
    */
    private ?bool $modifiedPlaylist = null;
    
    /**
     * @var array<string>|null $resolutionsToDelete The resolutionsToDelete property
    */
    private ?array $resolutionsToDelete = null;
    
    /**
     * @var array<string>|null $resolutionsToDeleteFromMp4 The resolutionsToDeleteFromMp4 property
    */
    private ?array $resolutionsToDeleteFromMp4 = null;
    
    /**
     * @var array<string>|null $resolutionsToDeleteFromPlaylist The resolutionsToDeleteFromPlaylist property
    */
    private ?array $resolutionsToDeleteFromPlaylist = null;
    
    /**
     * @var array<string>|null $resolutionsToDeleteFromStorage The resolutionsToDeleteFromStorage property
    */
    private ?array $resolutionsToDeleteFromStorage = null;
    
    /**
     * @var array<string>|null $storageObjectsToDelete The storageObjectsToDelete property
    */
    private ?array $storageObjectsToDelete = null;
    
    /**
     * @var bool|null $updatedAvailableResolutions The updatedAvailableResolutions property
    */
    private ?bool $updatedAvailableResolutions = null;
    
    /**
     * @var string|null $videoId The videoId property
    */
    private ?string $videoId = null;
    
    /**
     * @var int|null $videoLibraryId The videoLibraryId property
    */
    private ?int $videoLibraryId = null;
    
    /**
     * Instantiates a new CleanupUnconfiguredResolutionsData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CleanupUnconfiguredResolutionsData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CleanupUnconfiguredResolutionsData {
        return new CleanupUnconfiguredResolutionsData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the availableResolutionsAfter property value. The availableResolutionsAfter property
     * @return array<string>|null
    */
    public function getAvailableResolutionsAfter(): ?array {
        return $this->availableResolutionsAfter;
    }

    /**
     * Gets the deletedOriginal property value. The deletedOriginal property
     * @return bool|null
    */
    public function getDeletedOriginal(): ?bool {
        return $this->deletedOriginal;
    }

    /**
     * Gets the deletedStorageObjects property value. The deletedStorageObjects property
     * @return bool|null
    */
    public function getDeletedStorageObjects(): ?bool {
        return $this->deletedStorageObjects;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availableResolutionsAfter' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAvailableResolutionsAfter($val);
            },
            'deletedOriginal' => fn(ParseNode $n) => $o->setDeletedOriginal($n->getBooleanValue()),
            'deletedStorageObjects' => fn(ParseNode $n) => $o->setDeletedStorageObjects($n->getBooleanValue()),
            'modifiedPlaylist' => fn(ParseNode $n) => $o->setModifiedPlaylist($n->getBooleanValue()),
            'resolutionsToDelete' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResolutionsToDelete($val);
            },
            'resolutionsToDeleteFromMp4' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResolutionsToDeleteFromMp4($val);
            },
            'resolutionsToDeleteFromPlaylist' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResolutionsToDeleteFromPlaylist($val);
            },
            'resolutionsToDeleteFromStorage' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResolutionsToDeleteFromStorage($val);
            },
            'storageObjectsToDelete' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setStorageObjectsToDelete($val);
            },
            'updatedAvailableResolutions' => fn(ParseNode $n) => $o->setUpdatedAvailableResolutions($n->getBooleanValue()),
            'videoId' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
            'videoLibraryId' => fn(ParseNode $n) => $o->setVideoLibraryId($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the modifiedPlaylist property value. The modifiedPlaylist property
     * @return bool|null
    */
    public function getModifiedPlaylist(): ?bool {
        return $this->modifiedPlaylist;
    }

    /**
     * Gets the resolutionsToDelete property value. The resolutionsToDelete property
     * @return array<string>|null
    */
    public function getResolutionsToDelete(): ?array {
        return $this->resolutionsToDelete;
    }

    /**
     * Gets the resolutionsToDeleteFromMp4 property value. The resolutionsToDeleteFromMp4 property
     * @return array<string>|null
    */
    public function getResolutionsToDeleteFromMp4(): ?array {
        return $this->resolutionsToDeleteFromMp4;
    }

    /**
     * Gets the resolutionsToDeleteFromPlaylist property value. The resolutionsToDeleteFromPlaylist property
     * @return array<string>|null
    */
    public function getResolutionsToDeleteFromPlaylist(): ?array {
        return $this->resolutionsToDeleteFromPlaylist;
    }

    /**
     * Gets the resolutionsToDeleteFromStorage property value. The resolutionsToDeleteFromStorage property
     * @return array<string>|null
    */
    public function getResolutionsToDeleteFromStorage(): ?array {
        return $this->resolutionsToDeleteFromStorage;
    }

    /**
     * Gets the storageObjectsToDelete property value. The storageObjectsToDelete property
     * @return array<string>|null
    */
    public function getStorageObjectsToDelete(): ?array {
        return $this->storageObjectsToDelete;
    }

    /**
     * Gets the updatedAvailableResolutions property value. The updatedAvailableResolutions property
     * @return bool|null
    */
    public function getUpdatedAvailableResolutions(): ?bool {
        return $this->updatedAvailableResolutions;
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
        $writer->writeCollectionOfPrimitiveValues('availableResolutionsAfter', $this->getAvailableResolutionsAfter());
        $writer->writeBooleanValue('deletedOriginal', $this->getDeletedOriginal());
        $writer->writeBooleanValue('deletedStorageObjects', $this->getDeletedStorageObjects());
        $writer->writeBooleanValue('modifiedPlaylist', $this->getModifiedPlaylist());
        $writer->writeCollectionOfPrimitiveValues('resolutionsToDelete', $this->getResolutionsToDelete());
        $writer->writeCollectionOfPrimitiveValues('resolutionsToDeleteFromMp4', $this->getResolutionsToDeleteFromMp4());
        $writer->writeCollectionOfPrimitiveValues('resolutionsToDeleteFromPlaylist', $this->getResolutionsToDeleteFromPlaylist());
        $writer->writeCollectionOfPrimitiveValues('resolutionsToDeleteFromStorage', $this->getResolutionsToDeleteFromStorage());
        $writer->writeCollectionOfPrimitiveValues('storageObjectsToDelete', $this->getStorageObjectsToDelete());
        $writer->writeBooleanValue('updatedAvailableResolutions', $this->getUpdatedAvailableResolutions());
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
     * Sets the availableResolutionsAfter property value. The availableResolutionsAfter property
     * @param array<string>|null $value Value to set for the availableResolutionsAfter property.
    */
    public function setAvailableResolutionsAfter(?array $value): void {
        $this->availableResolutionsAfter = $value;
    }

    /**
     * Sets the deletedOriginal property value. The deletedOriginal property
     * @param bool|null $value Value to set for the deletedOriginal property.
    */
    public function setDeletedOriginal(?bool $value): void {
        $this->deletedOriginal = $value;
    }

    /**
     * Sets the deletedStorageObjects property value. The deletedStorageObjects property
     * @param bool|null $value Value to set for the deletedStorageObjects property.
    */
    public function setDeletedStorageObjects(?bool $value): void {
        $this->deletedStorageObjects = $value;
    }

    /**
     * Sets the modifiedPlaylist property value. The modifiedPlaylist property
     * @param bool|null $value Value to set for the modifiedPlaylist property.
    */
    public function setModifiedPlaylist(?bool $value): void {
        $this->modifiedPlaylist = $value;
    }

    /**
     * Sets the resolutionsToDelete property value. The resolutionsToDelete property
     * @param array<string>|null $value Value to set for the resolutionsToDelete property.
    */
    public function setResolutionsToDelete(?array $value): void {
        $this->resolutionsToDelete = $value;
    }

    /**
     * Sets the resolutionsToDeleteFromMp4 property value. The resolutionsToDeleteFromMp4 property
     * @param array<string>|null $value Value to set for the resolutionsToDeleteFromMp4 property.
    */
    public function setResolutionsToDeleteFromMp4(?array $value): void {
        $this->resolutionsToDeleteFromMp4 = $value;
    }

    /**
     * Sets the resolutionsToDeleteFromPlaylist property value. The resolutionsToDeleteFromPlaylist property
     * @param array<string>|null $value Value to set for the resolutionsToDeleteFromPlaylist property.
    */
    public function setResolutionsToDeleteFromPlaylist(?array $value): void {
        $this->resolutionsToDeleteFromPlaylist = $value;
    }

    /**
     * Sets the resolutionsToDeleteFromStorage property value. The resolutionsToDeleteFromStorage property
     * @param array<string>|null $value Value to set for the resolutionsToDeleteFromStorage property.
    */
    public function setResolutionsToDeleteFromStorage(?array $value): void {
        $this->resolutionsToDeleteFromStorage = $value;
    }

    /**
     * Sets the storageObjectsToDelete property value. The storageObjectsToDelete property
     * @param array<string>|null $value Value to set for the storageObjectsToDelete property.
    */
    public function setStorageObjectsToDelete(?array $value): void {
        $this->storageObjectsToDelete = $value;
    }

    /**
     * Sets the updatedAvailableResolutions property value. The updatedAvailableResolutions property
     * @param bool|null $value Value to set for the updatedAvailableResolutions property.
    */
    public function setUpdatedAvailableResolutions(?bool $value): void {
        $this->updatedAvailableResolutions = $value;
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
