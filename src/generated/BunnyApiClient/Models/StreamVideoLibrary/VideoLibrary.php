<?php

namespace BunnyApiClient\Models\StreamVideoLibrary;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VideoLibrary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $allowDirectPlay Determines direct play URLs are enabled for the library
    */
    private ?bool $allowDirectPlay = null;
    
    /**
     * @var bool|null $allowEarlyPlay Determines if the Early-Play feature is enabled
    */
    private ?bool $allowEarlyPlay = null;
    
    /**
     * @var array<string>|null $allowedReferrers The list of allowed referrer domains allowed to access the library
    */
    private ?array $allowedReferrers = null;
    
    /**
     * @var string|null $apiAccessKey The API access key for the library. Only added when the includeAccessKey parameter is set.
    */
    private ?string $apiAccessKey = null;
    
    /**
     * @var string|null $apiKey The API key used for authenticating with the video library
    */
    private ?string $apiKey = null;
    
    /**
     * @var VideoLibrary_AppleFairPlayDrm|null $appleFairPlayDrm The AppleFairPlayDrm property
    */
    private ?VideoLibrary_AppleFairPlayDrm $appleFairPlayDrm = null;
    
    /**
     * @var int|null $bitrate1080p The bitrate used for encoding 1080p videos
    */
    private ?int $bitrate1080p = null;
    
    /**
     * @var int|null $bitrate1440p The bitrate used for encoding 1440p videos
    */
    private ?int $bitrate1440p = null;
    
    /**
     * @var int|null $bitrate2160p The bitrate used for encoding 2160p videos
    */
    private ?int $bitrate2160p = null;
    
    /**
     * @var int|null $bitrate240p The bitrate used for encoding 240p videos
    */
    private ?int $bitrate240p = null;
    
    /**
     * @var int|null $bitrate360p The bitrate used for encoding 360p videos
    */
    private ?int $bitrate360p = null;
    
    /**
     * @var int|null $bitrate480p The bitrate used for encoding 480p videos
    */
    private ?int $bitrate480p = null;
    
    /**
     * @var int|null $bitrate720p The bitrate used for encoding 720p videos
    */
    private ?int $bitrate720p = null;
    
    /**
     * @var array<string>|null $blockedReferrers The list of blocked referrer domains blocked from accessing the library
    */
    private ?array $blockedReferrers = null;
    
    /**
     * @var bool|null $blockNoneReferrer Determines if the requests without a referrer are blocked
    */
    private ?bool $blockNoneReferrer = null;
    
    /**
     * @var string|null $captionsBackground The captions display background color
    */
    private ?string $captionsBackground = null;
    
    /**
     * @var string|null $captionsFontColor The captions display font color
    */
    private ?string $captionsFontColor = null;
    
    /**
     * @var int|null $captionsFontSize The captions display font size
    */
    private ?int $captionsFontSize = null;
    
    /**
     * @var string|null $controls The list of controls on the video player.
    */
    private ?string $controls = null;
    
    /**
     * @var string|null $customHTML The custom HTMl that is added into the head of the HTML player.
    */
    private ?string $customHTML = null;
    
    /**
     * @var DateTime|null $dateCreated The date when the video library was created
    */
    private ?DateTime $dateCreated = null;
    
    /**
     * @var int|null $drmVersion The DrmVersion property
    */
    private ?int $drmVersion = null;
    
    /**
     * @var bool|null $enableContentTagging Determines if content tagging should be enabled for this library.
    */
    private ?bool $enableContentTagging = null;
    
    /**
     * @var string|null $enabledResolutions The comma separated list of enabled resolutions
    */
    private ?string $enabledResolutions = null;
    
    /**
     * @var bool|null $enableDRM Determines if the MediaCage basic DRM is enabled
    */
    private ?bool $enableDRM = null;
    
    /**
     * @var bool|null $enableMP4Fallback Determines if the MP4 fallback feature is enabled
    */
    private ?bool $enableMP4Fallback = null;
    
    /**
     * @var bool|null $enableTranscribing Determines if the automatic audio transcribing is currently enabled for this zone.
    */
    private ?bool $enableTranscribing = null;
    
    /**
     * @var bool|null $enableTranscribingDescriptionGeneration Determines if automatic transcribing description generation is currently enabled.
    */
    private ?bool $enableTranscribingDescriptionGeneration = null;
    
    /**
     * @var bool|null $enableTranscribingTitleGeneration Determines if automatic transcribing title generation is currently enabled.
    */
    private ?bool $enableTranscribingTitleGeneration = null;
    
    /**
     * @var string|null $fontFamily The captions font family.
    */
    private ?string $fontFamily = null;
    
    /**
     * @var VideoLibrary_GoogleWidevineDrm|null $googleWidevineDrm The GoogleWidevineDrm property
    */
    private ?VideoLibrary_GoogleWidevineDrm $googleWidevineDrm = null;
    
    /**
     * @var bool|null $hasWatermark Determines if the video library has a watermark configured
    */
    private ?bool $hasWatermark = null;
    
    /**
     * @var int|null $id The Id property
    */
    private ?int $id = null;
    
    /**
     * @var bool|null $keepOriginalFiles Determines if the original video files should be stored after encoding
    */
    private ?bool $keepOriginalFiles = null;
    
    /**
     * @var string|null $name The name of the Video Library.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $playerKeyColor The key color of the player.
    */
    private ?string $playerKeyColor = null;
    
    /**
     * @var bool|null $playerTokenAuthenticationEnabled Determines if the player token authentication is enabled
    */
    private ?bool $playerTokenAuthenticationEnabled = null;
    
    /**
     * @var int|null $pullZoneId The ID of the connected underlying pull zone
    */
    private ?int $pullZoneId = null;
    
    /**
     * @var float|null $pullZoneType The PullZoneType property
    */
    private ?float $pullZoneType = null;
    
    /**
     * @var string|null $readOnlyApiKey The read-only API key used for authenticating with the video library
    */
    private ?string $readOnlyApiKey = null;
    
    /**
     * @var bool|null $rememberPlayerPosition The list of languages that the captions will be automatically transcribed to.
    */
    private ?bool $rememberPlayerPosition = null;
    
    /**
     * @var array<ReplicationRegions>|null $replicationRegions The geo-replication regions of the underlying storage zone
    */
    private ?array $replicationRegions = null;
    
    /**
     * @var bool|null $showHeatmap Determines if the video watch heatmap should be displayed in the player.
    */
    private ?bool $showHeatmap = null;
    
    /**
     * @var int|null $storageUsage The total amount of storage used by the library
    */
    private ?int $storageUsage = null;
    
    /**
     * @var int|null $storageZoneId The ID of the connected underlying storage zone
    */
    private ?int $storageZoneId = null;
    
    /**
     * @var int|null $trafficUsage The amount of traffic usage this month
    */
    private ?int $trafficUsage = null;
    
    /**
     * @var array<string>|null $transcribingCaptionLanguages The TranscribingCaptionLanguages property
    */
    private ?array $transcribingCaptionLanguages = null;
    
    /**
     * @var string|null $uILanguage The UI language of the player
    */
    private ?string $uILanguage = null;
    
    /**
     * @var string|null $vastTagUrl The URL of the VAST tag endpoint for advertising configuration
    */
    private ?string $vastTagUrl = null;
    
    /**
     * @var string|null $viAiPublisherId The vi.ai publisher id for advertising configuration
    */
    private ?string $viAiPublisherId = null;
    
    /**
     * @var int|null $videoCount The number of videos in the video library
    */
    private ?int $videoCount = null;
    
    /**
     * @var int|null $watermarkHeight The height of the watermark (in %)
    */
    private ?int $watermarkHeight = null;
    
    /**
     * @var int|null $watermarkPositionLeft The left offset of the watermark position (in %)
    */
    private ?int $watermarkPositionLeft = null;
    
    /**
     * @var int|null $watermarkPositionTop The top offset of the watermark position (in %)
    */
    private ?int $watermarkPositionTop = null;
    
    /**
     * @var int|null $watermarkVersion The WatermarkVersion property
    */
    private ?int $watermarkVersion = null;
    
    /**
     * @var int|null $watermarkWidth The width of the watermark (in %)
    */
    private ?int $watermarkWidth = null;
    
    /**
     * @var string|null $webhookUrl The webhook URL of the video library
    */
    private ?string $webhookUrl = null;
    
    /**
     * Instantiates a new VideoLibrary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoLibrary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoLibrary {
        return new VideoLibrary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the AllowDirectPlay property value. Determines direct play URLs are enabled for the library
     * @return bool|null
    */
    public function getAllowDirectPlay(): ?bool {
        return $this->allowDirectPlay;
    }

    /**
     * Gets the AllowEarlyPlay property value. Determines if the Early-Play feature is enabled
     * @return bool|null
    */
    public function getAllowEarlyPlay(): ?bool {
        return $this->allowEarlyPlay;
    }

    /**
     * Gets the AllowedReferrers property value. The list of allowed referrer domains allowed to access the library
     * @return array<string>|null
    */
    public function getAllowedReferrers(): ?array {
        return $this->allowedReferrers;
    }

    /**
     * Gets the ApiAccessKey property value. The API access key for the library. Only added when the includeAccessKey parameter is set.
     * @return string|null
    */
    public function getApiAccessKey(): ?string {
        return $this->apiAccessKey;
    }

    /**
     * Gets the ApiKey property value. The API key used for authenticating with the video library
     * @return string|null
    */
    public function getApiKey(): ?string {
        return $this->apiKey;
    }

    /**
     * Gets the AppleFairPlayDrm property value. The AppleFairPlayDrm property
     * @return VideoLibrary_AppleFairPlayDrm|null
    */
    public function getAppleFairPlayDrm(): ?VideoLibrary_AppleFairPlayDrm {
        return $this->appleFairPlayDrm;
    }

    /**
     * Gets the Bitrate1080p property value. The bitrate used for encoding 1080p videos
     * @return int|null
    */
    public function getBitrate1080p(): ?int {
        return $this->bitrate1080p;
    }

    /**
     * Gets the Bitrate1440p property value. The bitrate used for encoding 1440p videos
     * @return int|null
    */
    public function getBitrate1440p(): ?int {
        return $this->bitrate1440p;
    }

    /**
     * Gets the Bitrate2160p property value. The bitrate used for encoding 2160p videos
     * @return int|null
    */
    public function getBitrate2160p(): ?int {
        return $this->bitrate2160p;
    }

    /**
     * Gets the Bitrate240p property value. The bitrate used for encoding 240p videos
     * @return int|null
    */
    public function getBitrate240p(): ?int {
        return $this->bitrate240p;
    }

    /**
     * Gets the Bitrate360p property value. The bitrate used for encoding 360p videos
     * @return int|null
    */
    public function getBitrate360p(): ?int {
        return $this->bitrate360p;
    }

    /**
     * Gets the Bitrate480p property value. The bitrate used for encoding 480p videos
     * @return int|null
    */
    public function getBitrate480p(): ?int {
        return $this->bitrate480p;
    }

    /**
     * Gets the Bitrate720p property value. The bitrate used for encoding 720p videos
     * @return int|null
    */
    public function getBitrate720p(): ?int {
        return $this->bitrate720p;
    }

    /**
     * Gets the BlockedReferrers property value. The list of blocked referrer domains blocked from accessing the library
     * @return array<string>|null
    */
    public function getBlockedReferrers(): ?array {
        return $this->blockedReferrers;
    }

    /**
     * Gets the BlockNoneReferrer property value. Determines if the requests without a referrer are blocked
     * @return bool|null
    */
    public function getBlockNoneReferrer(): ?bool {
        return $this->blockNoneReferrer;
    }

    /**
     * Gets the CaptionsBackground property value. The captions display background color
     * @return string|null
    */
    public function getCaptionsBackground(): ?string {
        return $this->captionsBackground;
    }

    /**
     * Gets the CaptionsFontColor property value. The captions display font color
     * @return string|null
    */
    public function getCaptionsFontColor(): ?string {
        return $this->captionsFontColor;
    }

    /**
     * Gets the CaptionsFontSize property value. The captions display font size
     * @return int|null
    */
    public function getCaptionsFontSize(): ?int {
        return $this->captionsFontSize;
    }

    /**
     * Gets the Controls property value. The list of controls on the video player.
     * @return string|null
    */
    public function getControls(): ?string {
        return $this->controls;
    }

    /**
     * Gets the CustomHTML property value. The custom HTMl that is added into the head of the HTML player.
     * @return string|null
    */
    public function getCustomHTML(): ?string {
        return $this->customHTML;
    }

    /**
     * Gets the DateCreated property value. The date when the video library was created
     * @return DateTime|null
    */
    public function getDateCreated(): ?DateTime {
        return $this->dateCreated;
    }

    /**
     * Gets the DrmVersion property value. The DrmVersion property
     * @return int|null
    */
    public function getDrmVersion(): ?int {
        return $this->drmVersion;
    }

    /**
     * Gets the EnableContentTagging property value. Determines if content tagging should be enabled for this library.
     * @return bool|null
    */
    public function getEnableContentTagging(): ?bool {
        return $this->enableContentTagging;
    }

    /**
     * Gets the EnabledResolutions property value. The comma separated list of enabled resolutions
     * @return string|null
    */
    public function getEnabledResolutions(): ?string {
        return $this->enabledResolutions;
    }

    /**
     * Gets the EnableDRM property value. Determines if the MediaCage basic DRM is enabled
     * @return bool|null
    */
    public function getEnableDRM(): ?bool {
        return $this->enableDRM;
    }

    /**
     * Gets the EnableMP4Fallback property value. Determines if the MP4 fallback feature is enabled
     * @return bool|null
    */
    public function getEnableMP4Fallback(): ?bool {
        return $this->enableMP4Fallback;
    }

    /**
     * Gets the EnableTranscribing property value. Determines if the automatic audio transcribing is currently enabled for this zone.
     * @return bool|null
    */
    public function getEnableTranscribing(): ?bool {
        return $this->enableTranscribing;
    }

    /**
     * Gets the EnableTranscribingDescriptionGeneration property value. Determines if automatic transcribing description generation is currently enabled.
     * @return bool|null
    */
    public function getEnableTranscribingDescriptionGeneration(): ?bool {
        return $this->enableTranscribingDescriptionGeneration;
    }

    /**
     * Gets the EnableTranscribingTitleGeneration property value. Determines if automatic transcribing title generation is currently enabled.
     * @return bool|null
    */
    public function getEnableTranscribingTitleGeneration(): ?bool {
        return $this->enableTranscribingTitleGeneration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'AllowDirectPlay' => fn(ParseNode $n) => $o->setAllowDirectPlay($n->getBooleanValue()),
            'AllowEarlyPlay' => fn(ParseNode $n) => $o->setAllowEarlyPlay($n->getBooleanValue()),
            'AllowedReferrers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedReferrers($val);
            },
            'ApiAccessKey' => fn(ParseNode $n) => $o->setApiAccessKey($n->getStringValue()),
            'ApiKey' => fn(ParseNode $n) => $o->setApiKey($n->getStringValue()),
            'AppleFairPlayDrm' => fn(ParseNode $n) => $o->setAppleFairPlayDrm($n->getObjectValue([VideoLibrary_AppleFairPlayDrm::class, 'createFromDiscriminatorValue'])),
            'Bitrate1080p' => fn(ParseNode $n) => $o->setBitrate1080p($n->getIntegerValue()),
            'Bitrate1440p' => fn(ParseNode $n) => $o->setBitrate1440p($n->getIntegerValue()),
            'Bitrate2160p' => fn(ParseNode $n) => $o->setBitrate2160p($n->getIntegerValue()),
            'Bitrate240p' => fn(ParseNode $n) => $o->setBitrate240p($n->getIntegerValue()),
            'Bitrate360p' => fn(ParseNode $n) => $o->setBitrate360p($n->getIntegerValue()),
            'Bitrate480p' => fn(ParseNode $n) => $o->setBitrate480p($n->getIntegerValue()),
            'Bitrate720p' => fn(ParseNode $n) => $o->setBitrate720p($n->getIntegerValue()),
            'BlockedReferrers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBlockedReferrers($val);
            },
            'BlockNoneReferrer' => fn(ParseNode $n) => $o->setBlockNoneReferrer($n->getBooleanValue()),
            'CaptionsBackground' => fn(ParseNode $n) => $o->setCaptionsBackground($n->getStringValue()),
            'CaptionsFontColor' => fn(ParseNode $n) => $o->setCaptionsFontColor($n->getStringValue()),
            'CaptionsFontSize' => fn(ParseNode $n) => $o->setCaptionsFontSize($n->getIntegerValue()),
            'Controls' => fn(ParseNode $n) => $o->setControls($n->getStringValue()),
            'CustomHTML' => fn(ParseNode $n) => $o->setCustomHTML($n->getStringValue()),
            'DateCreated' => fn(ParseNode $n) => $o->setDateCreated($n->getDateTimeValue()),
            'DrmVersion' => fn(ParseNode $n) => $o->setDrmVersion($n->getIntegerValue()),
            'EnableContentTagging' => fn(ParseNode $n) => $o->setEnableContentTagging($n->getBooleanValue()),
            'EnabledResolutions' => fn(ParseNode $n) => $o->setEnabledResolutions($n->getStringValue()),
            'EnableDRM' => fn(ParseNode $n) => $o->setEnableDRM($n->getBooleanValue()),
            'EnableMP4Fallback' => fn(ParseNode $n) => $o->setEnableMP4Fallback($n->getBooleanValue()),
            'EnableTranscribing' => fn(ParseNode $n) => $o->setEnableTranscribing($n->getBooleanValue()),
            'EnableTranscribingDescriptionGeneration' => fn(ParseNode $n) => $o->setEnableTranscribingDescriptionGeneration($n->getBooleanValue()),
            'EnableTranscribingTitleGeneration' => fn(ParseNode $n) => $o->setEnableTranscribingTitleGeneration($n->getBooleanValue()),
            'FontFamily' => fn(ParseNode $n) => $o->setFontFamily($n->getStringValue()),
            'GoogleWidevineDrm' => fn(ParseNode $n) => $o->setGoogleWidevineDrm($n->getObjectValue([VideoLibrary_GoogleWidevineDrm::class, 'createFromDiscriminatorValue'])),
            'HasWatermark' => fn(ParseNode $n) => $o->setHasWatermark($n->getBooleanValue()),
            'Id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'KeepOriginalFiles' => fn(ParseNode $n) => $o->setKeepOriginalFiles($n->getBooleanValue()),
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'PlayerKeyColor' => fn(ParseNode $n) => $o->setPlayerKeyColor($n->getStringValue()),
            'PlayerTokenAuthenticationEnabled' => fn(ParseNode $n) => $o->setPlayerTokenAuthenticationEnabled($n->getBooleanValue()),
            'PullZoneId' => fn(ParseNode $n) => $o->setPullZoneId($n->getIntegerValue()),
            'PullZoneType' => fn(ParseNode $n) => $o->setPullZoneType($n->getFloatValue()),
            'ReadOnlyApiKey' => fn(ParseNode $n) => $o->setReadOnlyApiKey($n->getStringValue()),
            'RememberPlayerPosition' => fn(ParseNode $n) => $o->setRememberPlayerPosition($n->getBooleanValue()),
            'ReplicationRegions' => fn(ParseNode $n) => $o->setReplicationRegions($n->getCollectionOfEnumValues(ReplicationRegions::class)),
            'ShowHeatmap' => fn(ParseNode $n) => $o->setShowHeatmap($n->getBooleanValue()),
            'StorageUsage' => fn(ParseNode $n) => $o->setStorageUsage($n->getIntegerValue()),
            'StorageZoneId' => fn(ParseNode $n) => $o->setStorageZoneId($n->getIntegerValue()),
            'TrafficUsage' => fn(ParseNode $n) => $o->setTrafficUsage($n->getIntegerValue()),
            'TranscribingCaptionLanguages' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTranscribingCaptionLanguages($val);
            },
            'UILanguage' => fn(ParseNode $n) => $o->setUILanguage($n->getStringValue()),
            'VastTagUrl' => fn(ParseNode $n) => $o->setVastTagUrl($n->getStringValue()),
            'ViAiPublisherId' => fn(ParseNode $n) => $o->setViAiPublisherId($n->getStringValue()),
            'VideoCount' => fn(ParseNode $n) => $o->setVideoCount($n->getIntegerValue()),
            'WatermarkHeight' => fn(ParseNode $n) => $o->setWatermarkHeight($n->getIntegerValue()),
            'WatermarkPositionLeft' => fn(ParseNode $n) => $o->setWatermarkPositionLeft($n->getIntegerValue()),
            'WatermarkPositionTop' => fn(ParseNode $n) => $o->setWatermarkPositionTop($n->getIntegerValue()),
            'WatermarkVersion' => fn(ParseNode $n) => $o->setWatermarkVersion($n->getIntegerValue()),
            'WatermarkWidth' => fn(ParseNode $n) => $o->setWatermarkWidth($n->getIntegerValue()),
            'WebhookUrl' => fn(ParseNode $n) => $o->setWebhookUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the FontFamily property value. The captions font family.
     * @return string|null
    */
    public function getFontFamily(): ?string {
        return $this->fontFamily;
    }

    /**
     * Gets the GoogleWidevineDrm property value. The GoogleWidevineDrm property
     * @return VideoLibrary_GoogleWidevineDrm|null
    */
    public function getGoogleWidevineDrm(): ?VideoLibrary_GoogleWidevineDrm {
        return $this->googleWidevineDrm;
    }

    /**
     * Gets the HasWatermark property value. Determines if the video library has a watermark configured
     * @return bool|null
    */
    public function getHasWatermark(): ?bool {
        return $this->hasWatermark;
    }

    /**
     * Gets the Id property value. The Id property
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the KeepOriginalFiles property value. Determines if the original video files should be stored after encoding
     * @return bool|null
    */
    public function getKeepOriginalFiles(): ?bool {
        return $this->keepOriginalFiles;
    }

    /**
     * Gets the Name property value. The name of the Video Library.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the PlayerKeyColor property value. The key color of the player.
     * @return string|null
    */
    public function getPlayerKeyColor(): ?string {
        return $this->playerKeyColor;
    }

    /**
     * Gets the PlayerTokenAuthenticationEnabled property value. Determines if the player token authentication is enabled
     * @return bool|null
    */
    public function getPlayerTokenAuthenticationEnabled(): ?bool {
        return $this->playerTokenAuthenticationEnabled;
    }

    /**
     * Gets the PullZoneId property value. The ID of the connected underlying pull zone
     * @return int|null
    */
    public function getPullZoneId(): ?int {
        return $this->pullZoneId;
    }

    /**
     * Gets the PullZoneType property value. The PullZoneType property
     * @return float|null
    */
    public function getPullZoneType(): ?float {
        return $this->pullZoneType;
    }

    /**
     * Gets the ReadOnlyApiKey property value. The read-only API key used for authenticating with the video library
     * @return string|null
    */
    public function getReadOnlyApiKey(): ?string {
        return $this->readOnlyApiKey;
    }

    /**
     * Gets the RememberPlayerPosition property value. The list of languages that the captions will be automatically transcribed to.
     * @return bool|null
    */
    public function getRememberPlayerPosition(): ?bool {
        return $this->rememberPlayerPosition;
    }

    /**
     * Gets the ReplicationRegions property value. The geo-replication regions of the underlying storage zone
     * @return array<ReplicationRegions>|null
    */
    public function getReplicationRegions(): ?array {
        return $this->replicationRegions;
    }

    /**
     * Gets the ShowHeatmap property value. Determines if the video watch heatmap should be displayed in the player.
     * @return bool|null
    */
    public function getShowHeatmap(): ?bool {
        return $this->showHeatmap;
    }

    /**
     * Gets the StorageUsage property value. The total amount of storage used by the library
     * @return int|null
    */
    public function getStorageUsage(): ?int {
        return $this->storageUsage;
    }

    /**
     * Gets the StorageZoneId property value. The ID of the connected underlying storage zone
     * @return int|null
    */
    public function getStorageZoneId(): ?int {
        return $this->storageZoneId;
    }

    /**
     * Gets the TrafficUsage property value. The amount of traffic usage this month
     * @return int|null
    */
    public function getTrafficUsage(): ?int {
        return $this->trafficUsage;
    }

    /**
     * Gets the TranscribingCaptionLanguages property value. The TranscribingCaptionLanguages property
     * @return array<string>|null
    */
    public function getTranscribingCaptionLanguages(): ?array {
        return $this->transcribingCaptionLanguages;
    }

    /**
     * Gets the UILanguage property value. The UI language of the player
     * @return string|null
    */
    public function getUILanguage(): ?string {
        return $this->uILanguage;
    }

    /**
     * Gets the VastTagUrl property value. The URL of the VAST tag endpoint for advertising configuration
     * @return string|null
    */
    public function getVastTagUrl(): ?string {
        return $this->vastTagUrl;
    }

    /**
     * Gets the ViAiPublisherId property value. The vi.ai publisher id for advertising configuration
     * @return string|null
    */
    public function getViAiPublisherId(): ?string {
        return $this->viAiPublisherId;
    }

    /**
     * Gets the VideoCount property value. The number of videos in the video library
     * @return int|null
    */
    public function getVideoCount(): ?int {
        return $this->videoCount;
    }

    /**
     * Gets the WatermarkHeight property value. The height of the watermark (in %)
     * @return int|null
    */
    public function getWatermarkHeight(): ?int {
        return $this->watermarkHeight;
    }

    /**
     * Gets the WatermarkPositionLeft property value. The left offset of the watermark position (in %)
     * @return int|null
    */
    public function getWatermarkPositionLeft(): ?int {
        return $this->watermarkPositionLeft;
    }

    /**
     * Gets the WatermarkPositionTop property value. The top offset of the watermark position (in %)
     * @return int|null
    */
    public function getWatermarkPositionTop(): ?int {
        return $this->watermarkPositionTop;
    }

    /**
     * Gets the WatermarkVersion property value. The WatermarkVersion property
     * @return int|null
    */
    public function getWatermarkVersion(): ?int {
        return $this->watermarkVersion;
    }

    /**
     * Gets the WatermarkWidth property value. The width of the watermark (in %)
     * @return int|null
    */
    public function getWatermarkWidth(): ?int {
        return $this->watermarkWidth;
    }

    /**
     * Gets the WebhookUrl property value. The webhook URL of the video library
     * @return string|null
    */
    public function getWebhookUrl(): ?string {
        return $this->webhookUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('AllowDirectPlay', $this->getAllowDirectPlay());
        $writer->writeBooleanValue('AllowEarlyPlay', $this->getAllowEarlyPlay());
        $writer->writeIntegerValue('Bitrate1080p', $this->getBitrate1080p());
        $writer->writeIntegerValue('Bitrate1440p', $this->getBitrate1440p());
        $writer->writeIntegerValue('Bitrate2160p', $this->getBitrate2160p());
        $writer->writeIntegerValue('Bitrate240p', $this->getBitrate240p());
        $writer->writeIntegerValue('Bitrate360p', $this->getBitrate360p());
        $writer->writeIntegerValue('Bitrate480p', $this->getBitrate480p());
        $writer->writeIntegerValue('Bitrate720p', $this->getBitrate720p());
        $writer->writeBooleanValue('BlockNoneReferrer', $this->getBlockNoneReferrer());
        $writer->writeStringValue('CaptionsBackground', $this->getCaptionsBackground());
        $writer->writeStringValue('CaptionsFontColor', $this->getCaptionsFontColor());
        $writer->writeIntegerValue('CaptionsFontSize', $this->getCaptionsFontSize());
        $writer->writeStringValue('Controls', $this->getControls());
        $writer->writeStringValue('CustomHTML', $this->getCustomHTML());
        $writer->writeBooleanValue('EnableContentTagging', $this->getEnableContentTagging());
        $writer->writeStringValue('EnabledResolutions', $this->getEnabledResolutions());
        $writer->writeBooleanValue('EnableDRM', $this->getEnableDRM());
        $writer->writeBooleanValue('EnableMP4Fallback', $this->getEnableMP4Fallback());
        $writer->writeBooleanValue('EnableTranscribing', $this->getEnableTranscribing());
        $writer->writeBooleanValue('EnableTranscribingDescriptionGeneration', $this->getEnableTranscribingDescriptionGeneration());
        $writer->writeBooleanValue('EnableTranscribingTitleGeneration', $this->getEnableTranscribingTitleGeneration());
        $writer->writeStringValue('FontFamily', $this->getFontFamily());
        $writer->writeBooleanValue('KeepOriginalFiles', $this->getKeepOriginalFiles());
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeStringValue('PlayerKeyColor', $this->getPlayerKeyColor());
        $writer->writeBooleanValue('PlayerTokenAuthenticationEnabled', $this->getPlayerTokenAuthenticationEnabled());
        $writer->writeBooleanValue('ShowHeatmap', $this->getShowHeatmap());
        $writer->writeCollectionOfPrimitiveValues('TranscribingCaptionLanguages', $this->getTranscribingCaptionLanguages());
        $writer->writeStringValue('UILanguage', $this->getUILanguage());
        $writer->writeStringValue('VastTagUrl', $this->getVastTagUrl());
        $writer->writeStringValue('ViAiPublisherId', $this->getViAiPublisherId());
        $writer->writeIntegerValue('WatermarkHeight', $this->getWatermarkHeight());
        $writer->writeIntegerValue('WatermarkPositionLeft', $this->getWatermarkPositionLeft());
        $writer->writeIntegerValue('WatermarkPositionTop', $this->getWatermarkPositionTop());
        $writer->writeIntegerValue('WatermarkWidth', $this->getWatermarkWidth());
        $writer->writeStringValue('WebhookUrl', $this->getWebhookUrl());
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
     * Sets the AllowDirectPlay property value. Determines direct play URLs are enabled for the library
     * @param bool|null $value Value to set for the AllowDirectPlay property.
    */
    public function setAllowDirectPlay(?bool $value): void {
        $this->allowDirectPlay = $value;
    }

    /**
     * Sets the AllowEarlyPlay property value. Determines if the Early-Play feature is enabled
     * @param bool|null $value Value to set for the AllowEarlyPlay property.
    */
    public function setAllowEarlyPlay(?bool $value): void {
        $this->allowEarlyPlay = $value;
    }

    /**
     * Sets the AllowedReferrers property value. The list of allowed referrer domains allowed to access the library
     * @param array<string>|null $value Value to set for the AllowedReferrers property.
    */
    public function setAllowedReferrers(?array $value): void {
        $this->allowedReferrers = $value;
    }

    /**
     * Sets the ApiAccessKey property value. The API access key for the library. Only added when the includeAccessKey parameter is set.
     * @param string|null $value Value to set for the ApiAccessKey property.
    */
    public function setApiAccessKey(?string $value): void {
        $this->apiAccessKey = $value;
    }

    /**
     * Sets the ApiKey property value. The API key used for authenticating with the video library
     * @param string|null $value Value to set for the ApiKey property.
    */
    public function setApiKey(?string $value): void {
        $this->apiKey = $value;
    }

    /**
     * Sets the AppleFairPlayDrm property value. The AppleFairPlayDrm property
     * @param VideoLibrary_AppleFairPlayDrm|null $value Value to set for the AppleFairPlayDrm property.
    */
    public function setAppleFairPlayDrm(?VideoLibrary_AppleFairPlayDrm $value): void {
        $this->appleFairPlayDrm = $value;
    }

    /**
     * Sets the Bitrate1080p property value. The bitrate used for encoding 1080p videos
     * @param int|null $value Value to set for the Bitrate1080p property.
    */
    public function setBitrate1080p(?int $value): void {
        $this->bitrate1080p = $value;
    }

    /**
     * Sets the Bitrate1440p property value. The bitrate used for encoding 1440p videos
     * @param int|null $value Value to set for the Bitrate1440p property.
    */
    public function setBitrate1440p(?int $value): void {
        $this->bitrate1440p = $value;
    }

    /**
     * Sets the Bitrate2160p property value. The bitrate used for encoding 2160p videos
     * @param int|null $value Value to set for the Bitrate2160p property.
    */
    public function setBitrate2160p(?int $value): void {
        $this->bitrate2160p = $value;
    }

    /**
     * Sets the Bitrate240p property value. The bitrate used for encoding 240p videos
     * @param int|null $value Value to set for the Bitrate240p property.
    */
    public function setBitrate240p(?int $value): void {
        $this->bitrate240p = $value;
    }

    /**
     * Sets the Bitrate360p property value. The bitrate used for encoding 360p videos
     * @param int|null $value Value to set for the Bitrate360p property.
    */
    public function setBitrate360p(?int $value): void {
        $this->bitrate360p = $value;
    }

    /**
     * Sets the Bitrate480p property value. The bitrate used for encoding 480p videos
     * @param int|null $value Value to set for the Bitrate480p property.
    */
    public function setBitrate480p(?int $value): void {
        $this->bitrate480p = $value;
    }

    /**
     * Sets the Bitrate720p property value. The bitrate used for encoding 720p videos
     * @param int|null $value Value to set for the Bitrate720p property.
    */
    public function setBitrate720p(?int $value): void {
        $this->bitrate720p = $value;
    }

    /**
     * Sets the BlockedReferrers property value. The list of blocked referrer domains blocked from accessing the library
     * @param array<string>|null $value Value to set for the BlockedReferrers property.
    */
    public function setBlockedReferrers(?array $value): void {
        $this->blockedReferrers = $value;
    }

    /**
     * Sets the BlockNoneReferrer property value. Determines if the requests without a referrer are blocked
     * @param bool|null $value Value to set for the BlockNoneReferrer property.
    */
    public function setBlockNoneReferrer(?bool $value): void {
        $this->blockNoneReferrer = $value;
    }

    /**
     * Sets the CaptionsBackground property value. The captions display background color
     * @param string|null $value Value to set for the CaptionsBackground property.
    */
    public function setCaptionsBackground(?string $value): void {
        $this->captionsBackground = $value;
    }

    /**
     * Sets the CaptionsFontColor property value. The captions display font color
     * @param string|null $value Value to set for the CaptionsFontColor property.
    */
    public function setCaptionsFontColor(?string $value): void {
        $this->captionsFontColor = $value;
    }

    /**
     * Sets the CaptionsFontSize property value. The captions display font size
     * @param int|null $value Value to set for the CaptionsFontSize property.
    */
    public function setCaptionsFontSize(?int $value): void {
        $this->captionsFontSize = $value;
    }

    /**
     * Sets the Controls property value. The list of controls on the video player.
     * @param string|null $value Value to set for the Controls property.
    */
    public function setControls(?string $value): void {
        $this->controls = $value;
    }

    /**
     * Sets the CustomHTML property value. The custom HTMl that is added into the head of the HTML player.
     * @param string|null $value Value to set for the CustomHTML property.
    */
    public function setCustomHTML(?string $value): void {
        $this->customHTML = $value;
    }

    /**
     * Sets the DateCreated property value. The date when the video library was created
     * @param DateTime|null $value Value to set for the DateCreated property.
    */
    public function setDateCreated(?DateTime $value): void {
        $this->dateCreated = $value;
    }

    /**
     * Sets the DrmVersion property value. The DrmVersion property
     * @param int|null $value Value to set for the DrmVersion property.
    */
    public function setDrmVersion(?int $value): void {
        $this->drmVersion = $value;
    }

    /**
     * Sets the EnableContentTagging property value. Determines if content tagging should be enabled for this library.
     * @param bool|null $value Value to set for the EnableContentTagging property.
    */
    public function setEnableContentTagging(?bool $value): void {
        $this->enableContentTagging = $value;
    }

    /**
     * Sets the EnabledResolutions property value. The comma separated list of enabled resolutions
     * @param string|null $value Value to set for the EnabledResolutions property.
    */
    public function setEnabledResolutions(?string $value): void {
        $this->enabledResolutions = $value;
    }

    /**
     * Sets the EnableDRM property value. Determines if the MediaCage basic DRM is enabled
     * @param bool|null $value Value to set for the EnableDRM property.
    */
    public function setEnableDRM(?bool $value): void {
        $this->enableDRM = $value;
    }

    /**
     * Sets the EnableMP4Fallback property value. Determines if the MP4 fallback feature is enabled
     * @param bool|null $value Value to set for the EnableMP4Fallback property.
    */
    public function setEnableMP4Fallback(?bool $value): void {
        $this->enableMP4Fallback = $value;
    }

    /**
     * Sets the EnableTranscribing property value. Determines if the automatic audio transcribing is currently enabled for this zone.
     * @param bool|null $value Value to set for the EnableTranscribing property.
    */
    public function setEnableTranscribing(?bool $value): void {
        $this->enableTranscribing = $value;
    }

    /**
     * Sets the EnableTranscribingDescriptionGeneration property value. Determines if automatic transcribing description generation is currently enabled.
     * @param bool|null $value Value to set for the EnableTranscribingDescriptionGeneration property.
    */
    public function setEnableTranscribingDescriptionGeneration(?bool $value): void {
        $this->enableTranscribingDescriptionGeneration = $value;
    }

    /**
     * Sets the EnableTranscribingTitleGeneration property value. Determines if automatic transcribing title generation is currently enabled.
     * @param bool|null $value Value to set for the EnableTranscribingTitleGeneration property.
    */
    public function setEnableTranscribingTitleGeneration(?bool $value): void {
        $this->enableTranscribingTitleGeneration = $value;
    }

    /**
     * Sets the FontFamily property value. The captions font family.
     * @param string|null $value Value to set for the FontFamily property.
    */
    public function setFontFamily(?string $value): void {
        $this->fontFamily = $value;
    }

    /**
     * Sets the GoogleWidevineDrm property value. The GoogleWidevineDrm property
     * @param VideoLibrary_GoogleWidevineDrm|null $value Value to set for the GoogleWidevineDrm property.
    */
    public function setGoogleWidevineDrm(?VideoLibrary_GoogleWidevineDrm $value): void {
        $this->googleWidevineDrm = $value;
    }

    /**
     * Sets the HasWatermark property value. Determines if the video library has a watermark configured
     * @param bool|null $value Value to set for the HasWatermark property.
    */
    public function setHasWatermark(?bool $value): void {
        $this->hasWatermark = $value;
    }

    /**
     * Sets the Id property value. The Id property
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the KeepOriginalFiles property value. Determines if the original video files should be stored after encoding
     * @param bool|null $value Value to set for the KeepOriginalFiles property.
    */
    public function setKeepOriginalFiles(?bool $value): void {
        $this->keepOriginalFiles = $value;
    }

    /**
     * Sets the Name property value. The name of the Video Library.
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the PlayerKeyColor property value. The key color of the player.
     * @param string|null $value Value to set for the PlayerKeyColor property.
    */
    public function setPlayerKeyColor(?string $value): void {
        $this->playerKeyColor = $value;
    }

    /**
     * Sets the PlayerTokenAuthenticationEnabled property value. Determines if the player token authentication is enabled
     * @param bool|null $value Value to set for the PlayerTokenAuthenticationEnabled property.
    */
    public function setPlayerTokenAuthenticationEnabled(?bool $value): void {
        $this->playerTokenAuthenticationEnabled = $value;
    }

    /**
     * Sets the PullZoneId property value. The ID of the connected underlying pull zone
     * @param int|null $value Value to set for the PullZoneId property.
    */
    public function setPullZoneId(?int $value): void {
        $this->pullZoneId = $value;
    }

    /**
     * Sets the PullZoneType property value. The PullZoneType property
     * @param float|null $value Value to set for the PullZoneType property.
    */
    public function setPullZoneType(?float $value): void {
        $this->pullZoneType = $value;
    }

    /**
     * Sets the ReadOnlyApiKey property value. The read-only API key used for authenticating with the video library
     * @param string|null $value Value to set for the ReadOnlyApiKey property.
    */
    public function setReadOnlyApiKey(?string $value): void {
        $this->readOnlyApiKey = $value;
    }

    /**
     * Sets the RememberPlayerPosition property value. The list of languages that the captions will be automatically transcribed to.
     * @param bool|null $value Value to set for the RememberPlayerPosition property.
    */
    public function setRememberPlayerPosition(?bool $value): void {
        $this->rememberPlayerPosition = $value;
    }

    /**
     * Sets the ReplicationRegions property value. The geo-replication regions of the underlying storage zone
     * @param array<ReplicationRegions>|null $value Value to set for the ReplicationRegions property.
    */
    public function setReplicationRegions(?array $value): void {
        $this->replicationRegions = $value;
    }

    /**
     * Sets the ShowHeatmap property value. Determines if the video watch heatmap should be displayed in the player.
     * @param bool|null $value Value to set for the ShowHeatmap property.
    */
    public function setShowHeatmap(?bool $value): void {
        $this->showHeatmap = $value;
    }

    /**
     * Sets the StorageUsage property value. The total amount of storage used by the library
     * @param int|null $value Value to set for the StorageUsage property.
    */
    public function setStorageUsage(?int $value): void {
        $this->storageUsage = $value;
    }

    /**
     * Sets the StorageZoneId property value. The ID of the connected underlying storage zone
     * @param int|null $value Value to set for the StorageZoneId property.
    */
    public function setStorageZoneId(?int $value): void {
        $this->storageZoneId = $value;
    }

    /**
     * Sets the TrafficUsage property value. The amount of traffic usage this month
     * @param int|null $value Value to set for the TrafficUsage property.
    */
    public function setTrafficUsage(?int $value): void {
        $this->trafficUsage = $value;
    }

    /**
     * Sets the TranscribingCaptionLanguages property value. The TranscribingCaptionLanguages property
     * @param array<string>|null $value Value to set for the TranscribingCaptionLanguages property.
    */
    public function setTranscribingCaptionLanguages(?array $value): void {
        $this->transcribingCaptionLanguages = $value;
    }

    /**
     * Sets the UILanguage property value. The UI language of the player
     * @param string|null $value Value to set for the UILanguage property.
    */
    public function setUILanguage(?string $value): void {
        $this->uILanguage = $value;
    }

    /**
     * Sets the VastTagUrl property value. The URL of the VAST tag endpoint for advertising configuration
     * @param string|null $value Value to set for the VastTagUrl property.
    */
    public function setVastTagUrl(?string $value): void {
        $this->vastTagUrl = $value;
    }

    /**
     * Sets the ViAiPublisherId property value. The vi.ai publisher id for advertising configuration
     * @param string|null $value Value to set for the ViAiPublisherId property.
    */
    public function setViAiPublisherId(?string $value): void {
        $this->viAiPublisherId = $value;
    }

    /**
     * Sets the VideoCount property value. The number of videos in the video library
     * @param int|null $value Value to set for the VideoCount property.
    */
    public function setVideoCount(?int $value): void {
        $this->videoCount = $value;
    }

    /**
     * Sets the WatermarkHeight property value. The height of the watermark (in %)
     * @param int|null $value Value to set for the WatermarkHeight property.
    */
    public function setWatermarkHeight(?int $value): void {
        $this->watermarkHeight = $value;
    }

    /**
     * Sets the WatermarkPositionLeft property value. The left offset of the watermark position (in %)
     * @param int|null $value Value to set for the WatermarkPositionLeft property.
    */
    public function setWatermarkPositionLeft(?int $value): void {
        $this->watermarkPositionLeft = $value;
    }

    /**
     * Sets the WatermarkPositionTop property value. The top offset of the watermark position (in %)
     * @param int|null $value Value to set for the WatermarkPositionTop property.
    */
    public function setWatermarkPositionTop(?int $value): void {
        $this->watermarkPositionTop = $value;
    }

    /**
     * Sets the WatermarkVersion property value. The WatermarkVersion property
     * @param int|null $value Value to set for the WatermarkVersion property.
    */
    public function setWatermarkVersion(?int $value): void {
        $this->watermarkVersion = $value;
    }

    /**
     * Sets the WatermarkWidth property value. The width of the watermark (in %)
     * @param int|null $value Value to set for the WatermarkWidth property.
    */
    public function setWatermarkWidth(?int $value): void {
        $this->watermarkWidth = $value;
    }

    /**
     * Sets the WebhookUrl property value. The webhook URL of the video library
     * @param string|null $value Value to set for the WebhookUrl property.
    */
    public function setWebhookUrl(?string $value): void {
        $this->webhookUrl = $value;
    }

}
