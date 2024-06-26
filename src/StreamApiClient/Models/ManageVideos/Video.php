<?php

namespace StreamApiClient\Models\ManageVideos;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use StreamApiClient\Models\ManageVideos\TranscodingMessage\TranscodingMessage;

class Video implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $availableResolutions The available resolutions of the video
    */
    private ?string $availableResolutions = null;
    
    /**
     * @var int|null $averageWatchTime The average watch time of the video in seconds
    */
    private ?int $averageWatchTime = null;
    
    /**
     * @var array<Caption>|null $captions The captions property
    */
    private ?array $captions = null;
    
    /**
     * @var Video_category|null $category The automatically detected category of the video
    */
    private ?Video_category $category = null;
    
    /**
     * @var array<Chapter>|null $chapters The list of chapters available for the video
    */
    private ?array $chapters = null;
    
    /**
     * @var string|null $collectionId The ID of the collection where the video belongs
    */
    private ?string $collectionId = null;
    
    /**
     * @var DateTime|null $dateUploaded The date when the video was uploaded
    */
    private ?DateTime $dateUploaded = null;
    
    /**
     * @var int|null $encodeProgress The current encode progress of the video
    */
    private ?int $encodeProgress = null;
    
    /**
     * @var float|null $framerate The framerate of the video
    */
    private ?float $framerate = null;
    
    /**
     * @var string|null $guid The unique ID of the video
    */
    private ?string $guid = null;
    
    /**
     * @var bool|null $hasMP4Fallback Determines if the video has MP4 fallback files generated
    */
    private ?bool $hasMP4Fallback = null;
    
    /**
     * @var int|null $height The height of the original video file
    */
    private ?int $height = null;
    
    /**
     * @var bool|null $isPublic Determines if the video is publicly accessible
    */
    private ?bool $isPublic = null;
    
    /**
     * @var int|null $length The duration of the video in seconds
    */
    private ?int $length = null;
    
    /**
     * @var array<MetaTag>|null $metaTags The list of meta tags that have been added to the video
    */
    private ?array $metaTags = null;
    
    /**
     * @var array<Moment>|null $moments The list of moments available for the video
    */
    private ?array $moments = null;
    
    /**
     * @var int|null $rotation The rotation of the video
    */
    private ?int $rotation = null;
    
    /**
     * @var float|null $status The status of the video.
    */
    private ?float $status = null;
    
    /**
     * @var int|null $storageSize The amount of storage used by this video
    */
    private ?int $storageSize = null;
    
    /**
     * @var int|null $thumbnailCount The number of thumbnails generated for this video
    */
    private ?int $thumbnailCount = null;
    
    /**
     * @var string|null $thumbnailFileName The file name of the thumbnail inside of the storage
    */
    private ?string $thumbnailFileName = null;
    
    /**
     * @var string|null $title The title of the video
    */
    private ?string $title = null;
    
    /**
     * @var int|null $totalWatchTime The total video watch time in seconds
    */
    private ?int $totalWatchTime = null;
    
    /**
     * @var array<TranscodingMessage>|null $transcodingMessages The list of transcoding messages that describe potential issues while the video was transcoding
    */
    private ?array $transcodingMessages = null;
    
    /**
     * @var int|null $videoLibraryId The ID of the video library that the video belongs to
    */
    private ?int $videoLibraryId = null;
    
    /**
     * @var int|null $views The number of views the video received
    */
    private ?int $views = null;
    
    /**
     * @var int|null $width The width of the original video file
    */
    private ?int $width = null;
    
    /**
     * Instantiates a new Video and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Video
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Video {
        return new Video();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the availableResolutions property value. The available resolutions of the video
     * @return string|null
    */
    public function getAvailableResolutions(): ?string {
        return $this->availableResolutions;
    }

    /**
     * Gets the averageWatchTime property value. The average watch time of the video in seconds
     * @return int|null
    */
    public function getAverageWatchTime(): ?int {
        return $this->averageWatchTime;
    }

    /**
     * Gets the captions property value. The captions property
     * @return array<Caption>|null
    */
    public function getCaptions(): ?array {
        return $this->captions;
    }

    /**
     * Gets the category property value. The automatically detected category of the video
     * @return Video_category|null
    */
    public function getCategory(): ?Video_category {
        return $this->category;
    }

    /**
     * Gets the chapters property value. The list of chapters available for the video
     * @return array<Chapter>|null
    */
    public function getChapters(): ?array {
        return $this->chapters;
    }

    /**
     * Gets the collectionId property value. The ID of the collection where the video belongs
     * @return string|null
    */
    public function getCollectionId(): ?string {
        return $this->collectionId;
    }

    /**
     * Gets the dateUploaded property value. The date when the video was uploaded
     * @return DateTime|null
    */
    public function getDateUploaded(): ?DateTime {
        return $this->dateUploaded;
    }

    /**
     * Gets the encodeProgress property value. The current encode progress of the video
     * @return int|null
    */
    public function getEncodeProgress(): ?int {
        return $this->encodeProgress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availableResolutions' => fn(ParseNode $n) => $o->setAvailableResolutions($n->getStringValue()),
            'averageWatchTime' => fn(ParseNode $n) => $o->setAverageWatchTime($n->getIntegerValue()),
            'captions' => fn(ParseNode $n) => $o->setCaptions($n->getCollectionOfObjectValues([Caption::class, 'createFromDiscriminatorValue'])),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(Video_category::class)),
            'chapters' => fn(ParseNode $n) => $o->setChapters($n->getCollectionOfObjectValues([Chapter::class, 'createFromDiscriminatorValue'])),
            'collectionId' => fn(ParseNode $n) => $o->setCollectionId($n->getStringValue()),
            'dateUploaded' => fn(ParseNode $n) => $o->setDateUploaded($n->getDateTimeValue()),
            'encodeProgress' => fn(ParseNode $n) => $o->setEncodeProgress($n->getIntegerValue()),
            'framerate' => fn(ParseNode $n) => $o->setFramerate($n->getFloatValue()),
            'guid' => fn(ParseNode $n) => $o->setGuid($n->getStringValue()),
            'hasMP4Fallback' => fn(ParseNode $n) => $o->setHasMP4Fallback($n->getBooleanValue()),
            'height' => fn(ParseNode $n) => $o->setHeight($n->getIntegerValue()),
            'isPublic' => fn(ParseNode $n) => $o->setIsPublic($n->getBooleanValue()),
            'length' => fn(ParseNode $n) => $o->setLength($n->getIntegerValue()),
            'metaTags' => fn(ParseNode $n) => $o->setMetaTags($n->getCollectionOfObjectValues([MetaTag::class, 'createFromDiscriminatorValue'])),
            'moments' => fn(ParseNode $n) => $o->setMoments($n->getCollectionOfObjectValues([Moment::class, 'createFromDiscriminatorValue'])),
            'rotation' => fn(ParseNode $n) => $o->setRotation($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getFloatValue()),
            'storageSize' => fn(ParseNode $n) => $o->setStorageSize($n->getIntegerValue()),
            'thumbnailCount' => fn(ParseNode $n) => $o->setThumbnailCount($n->getIntegerValue()),
            'thumbnailFileName' => fn(ParseNode $n) => $o->setThumbnailFileName($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'totalWatchTime' => fn(ParseNode $n) => $o->setTotalWatchTime($n->getIntegerValue()),
            'transcodingMessages' => fn(ParseNode $n) => $o->setTranscodingMessages($n->getCollectionOfObjectValues([TranscodingMessage::class, 'createFromDiscriminatorValue'])),
            'videoLibraryId' => fn(ParseNode $n) => $o->setVideoLibraryId($n->getIntegerValue()),
            'views' => fn(ParseNode $n) => $o->setViews($n->getIntegerValue()),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the framerate property value. The framerate of the video
     * @return float|null
    */
    public function getFramerate(): ?float {
        return $this->framerate;
    }

    /**
     * Gets the guid property value. The unique ID of the video
     * @return string|null
    */
    public function getGuid(): ?string {
        return $this->guid;
    }

    /**
     * Gets the hasMP4Fallback property value. Determines if the video has MP4 fallback files generated
     * @return bool|null
    */
    public function getHasMP4Fallback(): ?bool {
        return $this->hasMP4Fallback;
    }

    /**
     * Gets the height property value. The height of the original video file
     * @return int|null
    */
    public function getHeight(): ?int {
        return $this->height;
    }

    /**
     * Gets the isPublic property value. Determines if the video is publicly accessible
     * @return bool|null
    */
    public function getIsPublic(): ?bool {
        return $this->isPublic;
    }

    /**
     * Gets the length property value. The duration of the video in seconds
     * @return int|null
    */
    public function getLength(): ?int {
        return $this->length;
    }

    /**
     * Gets the metaTags property value. The list of meta tags that have been added to the video
     * @return array<MetaTag>|null
    */
    public function getMetaTags(): ?array {
        return $this->metaTags;
    }

    /**
     * Gets the moments property value. The list of moments available for the video
     * @return array<Moment>|null
    */
    public function getMoments(): ?array {
        return $this->moments;
    }

    /**
     * Gets the rotation property value. The rotation of the video
     * @return int|null
    */
    public function getRotation(): ?int {
        return $this->rotation;
    }

    /**
     * Gets the status property value. The status of the video.
     * @return float|null
    */
    public function getStatus(): ?float {
        return $this->status;
    }

    /**
     * Gets the storageSize property value. The amount of storage used by this video
     * @return int|null
    */
    public function getStorageSize(): ?int {
        return $this->storageSize;
    }

    /**
     * Gets the thumbnailCount property value. The number of thumbnails generated for this video
     * @return int|null
    */
    public function getThumbnailCount(): ?int {
        return $this->thumbnailCount;
    }

    /**
     * Gets the thumbnailFileName property value. The file name of the thumbnail inside of the storage
     * @return string|null
    */
    public function getThumbnailFileName(): ?string {
        return $this->thumbnailFileName;
    }

    /**
     * Gets the title property value. The title of the video
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the totalWatchTime property value. The total video watch time in seconds
     * @return int|null
    */
    public function getTotalWatchTime(): ?int {
        return $this->totalWatchTime;
    }

    /**
     * Gets the transcodingMessages property value. The list of transcoding messages that describe potential issues while the video was transcoding
     * @return array<TranscodingMessage>|null
    */
    public function getTranscodingMessages(): ?array {
        return $this->transcodingMessages;
    }

    /**
     * Gets the videoLibraryId property value. The ID of the video library that the video belongs to
     * @return int|null
    */
    public function getVideoLibraryId(): ?int {
        return $this->videoLibraryId;
    }

    /**
     * Gets the views property value. The number of views the video received
     * @return int|null
    */
    public function getViews(): ?int {
        return $this->views;
    }

    /**
     * Gets the width property value. The width of the original video file
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
        $writer->writeCollectionOfObjectValues('captions', $this->getCaptions());
        $writer->writeCollectionOfObjectValues('chapters', $this->getChapters());
        $writer->writeStringValue('collectionId', $this->getCollectionId());
        $writer->writeCollectionOfObjectValues('metaTags', $this->getMetaTags());
        $writer->writeCollectionOfObjectValues('moments', $this->getMoments());
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
     * Sets the availableResolutions property value. The available resolutions of the video
     * @param string|null $value Value to set for the availableResolutions property.
    */
    public function setAvailableResolutions(?string $value): void {
        $this->availableResolutions = $value;
    }

    /**
     * Sets the averageWatchTime property value. The average watch time of the video in seconds
     * @param int|null $value Value to set for the averageWatchTime property.
    */
    public function setAverageWatchTime(?int $value): void {
        $this->averageWatchTime = $value;
    }

    /**
     * Sets the captions property value. The captions property
     * @param array<Caption>|null $value Value to set for the captions property.
    */
    public function setCaptions(?array $value): void {
        $this->captions = $value;
    }

    /**
     * Sets the category property value. The automatically detected category of the video
     * @param Video_category|null $value Value to set for the category property.
    */
    public function setCategory(?Video_category $value): void {
        $this->category = $value;
    }

    /**
     * Sets the chapters property value. The list of chapters available for the video
     * @param array<Chapter>|null $value Value to set for the chapters property.
    */
    public function setChapters(?array $value): void {
        $this->chapters = $value;
    }

    /**
     * Sets the collectionId property value. The ID of the collection where the video belongs
     * @param string|null $value Value to set for the collectionId property.
    */
    public function setCollectionId(?string $value): void {
        $this->collectionId = $value;
    }

    /**
     * Sets the dateUploaded property value. The date when the video was uploaded
     * @param DateTime|null $value Value to set for the dateUploaded property.
    */
    public function setDateUploaded(?DateTime $value): void {
        $this->dateUploaded = $value;
    }

    /**
     * Sets the encodeProgress property value. The current encode progress of the video
     * @param int|null $value Value to set for the encodeProgress property.
    */
    public function setEncodeProgress(?int $value): void {
        $this->encodeProgress = $value;
    }

    /**
     * Sets the framerate property value. The framerate of the video
     * @param float|null $value Value to set for the framerate property.
    */
    public function setFramerate(?float $value): void {
        $this->framerate = $value;
    }

    /**
     * Sets the guid property value. The unique ID of the video
     * @param string|null $value Value to set for the guid property.
    */
    public function setGuid(?string $value): void {
        $this->guid = $value;
    }

    /**
     * Sets the hasMP4Fallback property value. Determines if the video has MP4 fallback files generated
     * @param bool|null $value Value to set for the hasMP4Fallback property.
    */
    public function setHasMP4Fallback(?bool $value): void {
        $this->hasMP4Fallback = $value;
    }

    /**
     * Sets the height property value. The height of the original video file
     * @param int|null $value Value to set for the height property.
    */
    public function setHeight(?int $value): void {
        $this->height = $value;
    }

    /**
     * Sets the isPublic property value. Determines if the video is publicly accessible
     * @param bool|null $value Value to set for the isPublic property.
    */
    public function setIsPublic(?bool $value): void {
        $this->isPublic = $value;
    }

    /**
     * Sets the length property value. The duration of the video in seconds
     * @param int|null $value Value to set for the length property.
    */
    public function setLength(?int $value): void {
        $this->length = $value;
    }

    /**
     * Sets the metaTags property value. The list of meta tags that have been added to the video
     * @param array<MetaTag>|null $value Value to set for the metaTags property.
    */
    public function setMetaTags(?array $value): void {
        $this->metaTags = $value;
    }

    /**
     * Sets the moments property value. The list of moments available for the video
     * @param array<Moment>|null $value Value to set for the moments property.
    */
    public function setMoments(?array $value): void {
        $this->moments = $value;
    }

    /**
     * Sets the rotation property value. The rotation of the video
     * @param int|null $value Value to set for the rotation property.
    */
    public function setRotation(?int $value): void {
        $this->rotation = $value;
    }

    /**
     * Sets the status property value. The status of the video.
     * @param float|null $value Value to set for the status property.
    */
    public function setStatus(?float $value): void {
        $this->status = $value;
    }

    /**
     * Sets the storageSize property value. The amount of storage used by this video
     * @param int|null $value Value to set for the storageSize property.
    */
    public function setStorageSize(?int $value): void {
        $this->storageSize = $value;
    }

    /**
     * Sets the thumbnailCount property value. The number of thumbnails generated for this video
     * @param int|null $value Value to set for the thumbnailCount property.
    */
    public function setThumbnailCount(?int $value): void {
        $this->thumbnailCount = $value;
    }

    /**
     * Sets the thumbnailFileName property value. The file name of the thumbnail inside of the storage
     * @param string|null $value Value to set for the thumbnailFileName property.
    */
    public function setThumbnailFileName(?string $value): void {
        $this->thumbnailFileName = $value;
    }

    /**
     * Sets the title property value. The title of the video
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the totalWatchTime property value. The total video watch time in seconds
     * @param int|null $value Value to set for the totalWatchTime property.
    */
    public function setTotalWatchTime(?int $value): void {
        $this->totalWatchTime = $value;
    }

    /**
     * Sets the transcodingMessages property value. The list of transcoding messages that describe potential issues while the video was transcoding
     * @param array<TranscodingMessage>|null $value Value to set for the transcodingMessages property.
    */
    public function setTranscodingMessages(?array $value): void {
        $this->transcodingMessages = $value;
    }

    /**
     * Sets the videoLibraryId property value. The ID of the video library that the video belongs to
     * @param int|null $value Value to set for the videoLibraryId property.
    */
    public function setVideoLibraryId(?int $value): void {
        $this->videoLibraryId = $value;
    }

    /**
     * Sets the views property value. The number of views the video received
     * @param int|null $value Value to set for the views property.
    */
    public function setViews(?int $value): void {
        $this->views = $value;
    }

    /**
     * Sets the width property value. The width of the original video file
     * @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value): void {
        $this->width = $value;
    }

}
