<?php

namespace StreamApiClient\Models\ManageVideos\GetVideoPlayData;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use StreamApiClient\Models\ManageVideos\Video;

class VideoPlayData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $allowEarlyPlay The allowEarlyPlay property
    */
    private ?bool $allowEarlyPlay = null;
    
    /**
     * @var string|null $captionsBackground The captionsBackground property
    */
    private ?string $captionsBackground = null;
    
    /**
     * @var string|null $captionsFontColor The captionsFontColor property
    */
    private ?string $captionsFontColor = null;
    
    /**
     * @var int|null $captionsFontSize The captionsFontSize property
    */
    private ?int $captionsFontSize = null;
    
    /**
     * @var string|null $captionsPath The captionsPath property
    */
    private ?string $captionsPath = null;
    
    /**
     * @var string|null $controls The controls property
    */
    private ?string $controls = null;
    
    /**
     * @var int|null $drmVersion The drmVersion property
    */
    private ?int $drmVersion = null;
    
    /**
     * @var bool|null $enableDRM The enableDRM property
    */
    private ?bool $enableDRM = null;
    
    /**
     * @var bool|null $enableMP4Fallback The enableMP4Fallback property
    */
    private ?bool $enableMP4Fallback = null;
    
    /**
     * @var string|null $fallbackUrl The fallbackUrl property
    */
    private ?string $fallbackUrl = null;
    
    /**
     * @var string|null $fontFamily The fontFamily property
    */
    private ?string $fontFamily = null;
    
    /**
     * @var string|null $originalUrl The originalUrl property
    */
    private ?string $originalUrl = null;
    
    /**
     * @var string|null $playbackSpeeds The playbackSpeeds property
    */
    private ?string $playbackSpeeds = null;
    
    /**
     * @var string|null $playerKeyColor The playerKeyColor property
    */
    private ?string $playerKeyColor = null;
    
    /**
     * @var string|null $previewUrl The previewUrl property
    */
    private ?string $previewUrl = null;
    
    /**
     * @var string|null $seekPath The seekPath property
    */
    private ?string $seekPath = null;
    
    /**
     * @var bool|null $showHeatmap The showHeatmap property
    */
    private ?bool $showHeatmap = null;
    
    /**
     * @var string|null $thumbnailUrl The thumbnailUrl property
    */
    private ?string $thumbnailUrl = null;
    
    /**
     * @var bool|null $tokenAuthEnabled The tokenAuthEnabled property
    */
    private ?bool $tokenAuthEnabled = null;
    
    /**
     * @var string|null $uiLanguage The uiLanguage property
    */
    private ?string $uiLanguage = null;
    
    /**
     * @var string|null $vastTagUrl The vastTagUrl property
    */
    private ?string $vastTagUrl = null;
    
    /**
     * @var Video|null $video The video property
    */
    private ?Video $video = null;
    
    /**
     * @var string|null $videoPlaylistUrl The videoPlaylistUrl property
    */
    private ?string $videoPlaylistUrl = null;
    
    /**
     * Instantiates a new VideoPlayData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoPlayData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoPlayData {
        return new VideoPlayData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the allowEarlyPlay property value. The allowEarlyPlay property
     * @return bool|null
    */
    public function getAllowEarlyPlay(): ?bool {
        return $this->allowEarlyPlay;
    }

    /**
     * Gets the captionsBackground property value. The captionsBackground property
     * @return string|null
    */
    public function getCaptionsBackground(): ?string {
        return $this->captionsBackground;
    }

    /**
     * Gets the captionsFontColor property value. The captionsFontColor property
     * @return string|null
    */
    public function getCaptionsFontColor(): ?string {
        return $this->captionsFontColor;
    }

    /**
     * Gets the captionsFontSize property value. The captionsFontSize property
     * @return int|null
    */
    public function getCaptionsFontSize(): ?int {
        return $this->captionsFontSize;
    }

    /**
     * Gets the captionsPath property value. The captionsPath property
     * @return string|null
    */
    public function getCaptionsPath(): ?string {
        return $this->captionsPath;
    }

    /**
     * Gets the controls property value. The controls property
     * @return string|null
    */
    public function getControls(): ?string {
        return $this->controls;
    }

    /**
     * Gets the drmVersion property value. The drmVersion property
     * @return int|null
    */
    public function getDrmVersion(): ?int {
        return $this->drmVersion;
    }

    /**
     * Gets the enableDRM property value. The enableDRM property
     * @return bool|null
    */
    public function getEnableDRM(): ?bool {
        return $this->enableDRM;
    }

    /**
     * Gets the enableMP4Fallback property value. The enableMP4Fallback property
     * @return bool|null
    */
    public function getEnableMP4Fallback(): ?bool {
        return $this->enableMP4Fallback;
    }

    /**
     * Gets the fallbackUrl property value. The fallbackUrl property
     * @return string|null
    */
    public function getFallbackUrl(): ?string {
        return $this->fallbackUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowEarlyPlay' => fn(ParseNode $n) => $o->setAllowEarlyPlay($n->getBooleanValue()),
            'captionsBackground' => fn(ParseNode $n) => $o->setCaptionsBackground($n->getStringValue()),
            'captionsFontColor' => fn(ParseNode $n) => $o->setCaptionsFontColor($n->getStringValue()),
            'captionsFontSize' => fn(ParseNode $n) => $o->setCaptionsFontSize($n->getIntegerValue()),
            'captionsPath' => fn(ParseNode $n) => $o->setCaptionsPath($n->getStringValue()),
            'controls' => fn(ParseNode $n) => $o->setControls($n->getStringValue()),
            'drmVersion' => fn(ParseNode $n) => $o->setDrmVersion($n->getIntegerValue()),
            'enableDRM' => fn(ParseNode $n) => $o->setEnableDRM($n->getBooleanValue()),
            'enableMP4Fallback' => fn(ParseNode $n) => $o->setEnableMP4Fallback($n->getBooleanValue()),
            'fallbackUrl' => fn(ParseNode $n) => $o->setFallbackUrl($n->getStringValue()),
            'fontFamily' => fn(ParseNode $n) => $o->setFontFamily($n->getStringValue()),
            'originalUrl' => fn(ParseNode $n) => $o->setOriginalUrl($n->getStringValue()),
            'playbackSpeeds' => fn(ParseNode $n) => $o->setPlaybackSpeeds($n->getStringValue()),
            'playerKeyColor' => fn(ParseNode $n) => $o->setPlayerKeyColor($n->getStringValue()),
            'previewUrl' => fn(ParseNode $n) => $o->setPreviewUrl($n->getStringValue()),
            'seekPath' => fn(ParseNode $n) => $o->setSeekPath($n->getStringValue()),
            'showHeatmap' => fn(ParseNode $n) => $o->setShowHeatmap($n->getBooleanValue()),
            'thumbnailUrl' => fn(ParseNode $n) => $o->setThumbnailUrl($n->getStringValue()),
            'tokenAuthEnabled' => fn(ParseNode $n) => $o->setTokenAuthEnabled($n->getBooleanValue()),
            'uiLanguage' => fn(ParseNode $n) => $o->setUiLanguage($n->getStringValue()),
            'vastTagUrl' => fn(ParseNode $n) => $o->setVastTagUrl($n->getStringValue()),
            'video' => fn(ParseNode $n) => $o->setVideo($n->getObjectValue([Video::class, 'createFromDiscriminatorValue'])),
            'videoPlaylistUrl' => fn(ParseNode $n) => $o->setVideoPlaylistUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the fontFamily property value. The fontFamily property
     * @return string|null
    */
    public function getFontFamily(): ?string {
        return $this->fontFamily;
    }

    /**
     * Gets the originalUrl property value. The originalUrl property
     * @return string|null
    */
    public function getOriginalUrl(): ?string {
        return $this->originalUrl;
    }

    /**
     * Gets the playbackSpeeds property value. The playbackSpeeds property
     * @return string|null
    */
    public function getPlaybackSpeeds(): ?string {
        return $this->playbackSpeeds;
    }

    /**
     * Gets the playerKeyColor property value. The playerKeyColor property
     * @return string|null
    */
    public function getPlayerKeyColor(): ?string {
        return $this->playerKeyColor;
    }

    /**
     * Gets the previewUrl property value. The previewUrl property
     * @return string|null
    */
    public function getPreviewUrl(): ?string {
        return $this->previewUrl;
    }

    /**
     * Gets the seekPath property value. The seekPath property
     * @return string|null
    */
    public function getSeekPath(): ?string {
        return $this->seekPath;
    }

    /**
     * Gets the showHeatmap property value. The showHeatmap property
     * @return bool|null
    */
    public function getShowHeatmap(): ?bool {
        return $this->showHeatmap;
    }

    /**
     * Gets the thumbnailUrl property value. The thumbnailUrl property
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->thumbnailUrl;
    }

    /**
     * Gets the tokenAuthEnabled property value. The tokenAuthEnabled property
     * @return bool|null
    */
    public function getTokenAuthEnabled(): ?bool {
        return $this->tokenAuthEnabled;
    }

    /**
     * Gets the uiLanguage property value. The uiLanguage property
     * @return string|null
    */
    public function getUiLanguage(): ?string {
        return $this->uiLanguage;
    }

    /**
     * Gets the vastTagUrl property value. The vastTagUrl property
     * @return string|null
    */
    public function getVastTagUrl(): ?string {
        return $this->vastTagUrl;
    }

    /**
     * Gets the video property value. The video property
     * @return Video|null
    */
    public function getVideo(): ?Video {
        return $this->video;
    }

    /**
     * Gets the videoPlaylistUrl property value. The videoPlaylistUrl property
     * @return string|null
    */
    public function getVideoPlaylistUrl(): ?string {
        return $this->videoPlaylistUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowEarlyPlay', $this->getAllowEarlyPlay());
        $writer->writeStringValue('captionsBackground', $this->getCaptionsBackground());
        $writer->writeStringValue('captionsFontColor', $this->getCaptionsFontColor());
        $writer->writeIntegerValue('captionsFontSize', $this->getCaptionsFontSize());
        $writer->writeStringValue('captionsPath', $this->getCaptionsPath());
        $writer->writeStringValue('controls', $this->getControls());
        $writer->writeIntegerValue('drmVersion', $this->getDrmVersion());
        $writer->writeBooleanValue('enableDRM', $this->getEnableDRM());
        $writer->writeBooleanValue('enableMP4Fallback', $this->getEnableMP4Fallback());
        $writer->writeStringValue('fallbackUrl', $this->getFallbackUrl());
        $writer->writeStringValue('fontFamily', $this->getFontFamily());
        $writer->writeStringValue('originalUrl', $this->getOriginalUrl());
        $writer->writeStringValue('playbackSpeeds', $this->getPlaybackSpeeds());
        $writer->writeStringValue('playerKeyColor', $this->getPlayerKeyColor());
        $writer->writeStringValue('previewUrl', $this->getPreviewUrl());
        $writer->writeStringValue('seekPath', $this->getSeekPath());
        $writer->writeBooleanValue('showHeatmap', $this->getShowHeatmap());
        $writer->writeStringValue('thumbnailUrl', $this->getThumbnailUrl());
        $writer->writeBooleanValue('tokenAuthEnabled', $this->getTokenAuthEnabled());
        $writer->writeStringValue('uiLanguage', $this->getUiLanguage());
        $writer->writeStringValue('vastTagUrl', $this->getVastTagUrl());
        $writer->writeObjectValue('video', $this->getVideo());
        $writer->writeStringValue('videoPlaylistUrl', $this->getVideoPlaylistUrl());
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
     * Sets the allowEarlyPlay property value. The allowEarlyPlay property
     * @param bool|null $value Value to set for the allowEarlyPlay property.
    */
    public function setAllowEarlyPlay(?bool $value): void {
        $this->allowEarlyPlay = $value;
    }

    /**
     * Sets the captionsBackground property value. The captionsBackground property
     * @param string|null $value Value to set for the captionsBackground property.
    */
    public function setCaptionsBackground(?string $value): void {
        $this->captionsBackground = $value;
    }

    /**
     * Sets the captionsFontColor property value. The captionsFontColor property
     * @param string|null $value Value to set for the captionsFontColor property.
    */
    public function setCaptionsFontColor(?string $value): void {
        $this->captionsFontColor = $value;
    }

    /**
     * Sets the captionsFontSize property value. The captionsFontSize property
     * @param int|null $value Value to set for the captionsFontSize property.
    */
    public function setCaptionsFontSize(?int $value): void {
        $this->captionsFontSize = $value;
    }

    /**
     * Sets the captionsPath property value. The captionsPath property
     * @param string|null $value Value to set for the captionsPath property.
    */
    public function setCaptionsPath(?string $value): void {
        $this->captionsPath = $value;
    }

    /**
     * Sets the controls property value. The controls property
     * @param string|null $value Value to set for the controls property.
    */
    public function setControls(?string $value): void {
        $this->controls = $value;
    }

    /**
     * Sets the drmVersion property value. The drmVersion property
     * @param int|null $value Value to set for the drmVersion property.
    */
    public function setDrmVersion(?int $value): void {
        $this->drmVersion = $value;
    }

    /**
     * Sets the enableDRM property value. The enableDRM property
     * @param bool|null $value Value to set for the enableDRM property.
    */
    public function setEnableDRM(?bool $value): void {
        $this->enableDRM = $value;
    }

    /**
     * Sets the enableMP4Fallback property value. The enableMP4Fallback property
     * @param bool|null $value Value to set for the enableMP4Fallback property.
    */
    public function setEnableMP4Fallback(?bool $value): void {
        $this->enableMP4Fallback = $value;
    }

    /**
     * Sets the fallbackUrl property value. The fallbackUrl property
     * @param string|null $value Value to set for the fallbackUrl property.
    */
    public function setFallbackUrl(?string $value): void {
        $this->fallbackUrl = $value;
    }

    /**
     * Sets the fontFamily property value. The fontFamily property
     * @param string|null $value Value to set for the fontFamily property.
    */
    public function setFontFamily(?string $value): void {
        $this->fontFamily = $value;
    }

    /**
     * Sets the originalUrl property value. The originalUrl property
     * @param string|null $value Value to set for the originalUrl property.
    */
    public function setOriginalUrl(?string $value): void {
        $this->originalUrl = $value;
    }

    /**
     * Sets the playbackSpeeds property value. The playbackSpeeds property
     * @param string|null $value Value to set for the playbackSpeeds property.
    */
    public function setPlaybackSpeeds(?string $value): void {
        $this->playbackSpeeds = $value;
    }

    /**
     * Sets the playerKeyColor property value. The playerKeyColor property
     * @param string|null $value Value to set for the playerKeyColor property.
    */
    public function setPlayerKeyColor(?string $value): void {
        $this->playerKeyColor = $value;
    }

    /**
     * Sets the previewUrl property value. The previewUrl property
     * @param string|null $value Value to set for the previewUrl property.
    */
    public function setPreviewUrl(?string $value): void {
        $this->previewUrl = $value;
    }

    /**
     * Sets the seekPath property value. The seekPath property
     * @param string|null $value Value to set for the seekPath property.
    */
    public function setSeekPath(?string $value): void {
        $this->seekPath = $value;
    }

    /**
     * Sets the showHeatmap property value. The showHeatmap property
     * @param bool|null $value Value to set for the showHeatmap property.
    */
    public function setShowHeatmap(?bool $value): void {
        $this->showHeatmap = $value;
    }

    /**
     * Sets the thumbnailUrl property value. The thumbnailUrl property
     * @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value): void {
        $this->thumbnailUrl = $value;
    }

    /**
     * Sets the tokenAuthEnabled property value. The tokenAuthEnabled property
     * @param bool|null $value Value to set for the tokenAuthEnabled property.
    */
    public function setTokenAuthEnabled(?bool $value): void {
        $this->tokenAuthEnabled = $value;
    }

    /**
     * Sets the uiLanguage property value. The uiLanguage property
     * @param string|null $value Value to set for the uiLanguage property.
    */
    public function setUiLanguage(?string $value): void {
        $this->uiLanguage = $value;
    }

    /**
     * Sets the vastTagUrl property value. The vastTagUrl property
     * @param string|null $value Value to set for the vastTagUrl property.
    */
    public function setVastTagUrl(?string $value): void {
        $this->vastTagUrl = $value;
    }

    /**
     * Sets the video property value. The video property
     * @param Video|null $value Value to set for the video property.
    */
    public function setVideo(?Video $value): void {
        $this->video = $value;
    }

    /**
     * Sets the videoPlaylistUrl property value. The videoPlaylistUrl property
     * @param string|null $value Value to set for the videoPlaylistUrl property.
    */
    public function setVideoPlaylistUrl(?string $value): void {
        $this->videoPlaylistUrl = $value;
    }

}
