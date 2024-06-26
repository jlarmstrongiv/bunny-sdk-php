<?php

namespace BunnyApiClient\Models\StorageZone;

use BunnyApiClient\Models\PullZone\PullZone;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StorageZone implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $custom404FilePath The Custom404FilePath property
    */
    private ?string $custom404FilePath = null;
    
    /**
     * @var DateTime|null $dateModified The DateModified property
    */
    private ?DateTime $dateModified = null;
    
    /**
     * @var bool|null $deleted The Deleted property
    */
    private ?bool $deleted = null;
    
    /**
     * @var int|null $discount The Discount property
    */
    private ?int $discount = null;
    
    /**
     * @var int|null $filesStored The FilesStored property
    */
    private ?int $filesStored = null;
    
    /**
     * @var int|null $id The Id property
    */
    private ?int $id = null;
    
    /**
     * @var string|null $name The Name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $password The Password property
    */
    private ?string $password = null;
    
    /**
     * @var float|null $priceOverride The PriceOverride property
    */
    private ?float $priceOverride = null;
    
    /**
     * @var array<PullZone>|null $pullZones The PullZones property
    */
    private ?array $pullZones = null;
    
    /**
     * @var string|null $readOnlyPassword The ReadOnlyPassword property
    */
    private ?string $readOnlyPassword = null;
    
    /**
     * @var StandardRegions|null $region The Region property
    */
    private ?StandardRegions $region = null;
    
    /**
     * @var bool|null $replicationChangeInProgress The ReplicationChangeInProgress property
    */
    private ?bool $replicationChangeInProgress = null;
    
    /**
     * @var array<EdgeReplicationRegions>|null $replicationRegions The ReplicationRegions property
    */
    private ?array $replicationRegions = null;
    
    /**
     * @var bool|null $rewrite404To200 The Rewrite404To200 property
    */
    private ?bool $rewrite404To200 = null;
    
    /**
     * @var string|null $storageHostname The StorageHostname property
    */
    private ?string $storageHostname = null;
    
    /**
     * @var int|null $storageUsed The StorageUsed property
    */
    private ?int $storageUsed = null;
    
    /**
     * @var string|null $userId The UserId property
    */
    private ?string $userId = null;
    
    /**
     * @var float|null $zoneTier The ZoneTier property
    */
    private ?float $zoneTier = null;
    
    /**
     * Instantiates a new StorageZone and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StorageZone
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StorageZone {
        return new StorageZone();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the Custom404FilePath property value. The Custom404FilePath property
     * @return string|null
    */
    public function getCustom404FilePath(): ?string {
        return $this->custom404FilePath;
    }

    /**
     * Gets the DateModified property value. The DateModified property
     * @return DateTime|null
    */
    public function getDateModified(): ?DateTime {
        return $this->dateModified;
    }

    /**
     * Gets the Deleted property value. The Deleted property
     * @return bool|null
    */
    public function getDeleted(): ?bool {
        return $this->deleted;
    }

    /**
     * Gets the Discount property value. The Discount property
     * @return int|null
    */
    public function getDiscount(): ?int {
        return $this->discount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Custom404FilePath' => fn(ParseNode $n) => $o->setCustom404FilePath($n->getStringValue()),
            'DateModified' => fn(ParseNode $n) => $o->setDateModified($n->getDateTimeValue()),
            'Deleted' => fn(ParseNode $n) => $o->setDeleted($n->getBooleanValue()),
            'Discount' => fn(ParseNode $n) => $o->setDiscount($n->getIntegerValue()),
            'FilesStored' => fn(ParseNode $n) => $o->setFilesStored($n->getIntegerValue()),
            'Id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'Password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'PriceOverride' => fn(ParseNode $n) => $o->setPriceOverride($n->getFloatValue()),
            'PullZones' => fn(ParseNode $n) => $o->setPullZones($n->getCollectionOfObjectValues([PullZone::class, 'createFromDiscriminatorValue'])),
            'ReadOnlyPassword' => fn(ParseNode $n) => $o->setReadOnlyPassword($n->getStringValue()),
            'Region' => fn(ParseNode $n) => $o->setRegion($n->getEnumValue(StandardRegions::class)),
            'ReplicationChangeInProgress' => fn(ParseNode $n) => $o->setReplicationChangeInProgress($n->getBooleanValue()),
            'ReplicationRegions' => fn(ParseNode $n) => $o->setReplicationRegions($n->getCollectionOfEnumValues(EdgeReplicationRegions::class)),
            'Rewrite404To200' => fn(ParseNode $n) => $o->setRewrite404To200($n->getBooleanValue()),
            'StorageHostname' => fn(ParseNode $n) => $o->setStorageHostname($n->getStringValue()),
            'StorageUsed' => fn(ParseNode $n) => $o->setStorageUsed($n->getIntegerValue()),
            'UserId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'ZoneTier' => fn(ParseNode $n) => $o->setZoneTier($n->getFloatValue()),
        ];
    }

    /**
     * Gets the FilesStored property value. The FilesStored property
     * @return int|null
    */
    public function getFilesStored(): ?int {
        return $this->filesStored;
    }

    /**
     * Gets the Id property value. The Id property
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the Name property value. The Name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the Password property value. The Password property
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Gets the PriceOverride property value. The PriceOverride property
     * @return float|null
    */
    public function getPriceOverride(): ?float {
        return $this->priceOverride;
    }

    /**
     * Gets the PullZones property value. The PullZones property
     * @return array<PullZone>|null
    */
    public function getPullZones(): ?array {
        return $this->pullZones;
    }

    /**
     * Gets the ReadOnlyPassword property value. The ReadOnlyPassword property
     * @return string|null
    */
    public function getReadOnlyPassword(): ?string {
        return $this->readOnlyPassword;
    }

    /**
     * Gets the Region property value. The Region property
     * @return StandardRegions|null
    */
    public function getRegion(): ?StandardRegions {
        return $this->region;
    }

    /**
     * Gets the ReplicationChangeInProgress property value. The ReplicationChangeInProgress property
     * @return bool|null
    */
    public function getReplicationChangeInProgress(): ?bool {
        return $this->replicationChangeInProgress;
    }

    /**
     * Gets the ReplicationRegions property value. The ReplicationRegions property
     * @return array<EdgeReplicationRegions>|null
    */
    public function getReplicationRegions(): ?array {
        return $this->replicationRegions;
    }

    /**
     * Gets the Rewrite404To200 property value. The Rewrite404To200 property
     * @return bool|null
    */
    public function getRewrite404To200(): ?bool {
        return $this->rewrite404To200;
    }

    /**
     * Gets the StorageHostname property value. The StorageHostname property
     * @return string|null
    */
    public function getStorageHostname(): ?string {
        return $this->storageHostname;
    }

    /**
     * Gets the StorageUsed property value. The StorageUsed property
     * @return int|null
    */
    public function getStorageUsed(): ?int {
        return $this->storageUsed;
    }

    /**
     * Gets the UserId property value. The UserId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the ZoneTier property value. The ZoneTier property
     * @return float|null
    */
    public function getZoneTier(): ?float {
        return $this->zoneTier;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Custom404FilePath', $this->getCustom404FilePath());
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeEnumValue('Region', $this->getRegion());
        $writer->writeCollectionOfEnumValues('ReplicationRegions', $this->getReplicationRegions());
        $writer->writeBooleanValue('Rewrite404To200', $this->getRewrite404To200());
        $writer->writeFloatValue('ZoneTier', $this->getZoneTier());
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
     * Sets the Custom404FilePath property value. The Custom404FilePath property
     * @param string|null $value Value to set for the Custom404FilePath property.
    */
    public function setCustom404FilePath(?string $value): void {
        $this->custom404FilePath = $value;
    }

    /**
     * Sets the DateModified property value. The DateModified property
     * @param DateTime|null $value Value to set for the DateModified property.
    */
    public function setDateModified(?DateTime $value): void {
        $this->dateModified = $value;
    }

    /**
     * Sets the Deleted property value. The Deleted property
     * @param bool|null $value Value to set for the Deleted property.
    */
    public function setDeleted(?bool $value): void {
        $this->deleted = $value;
    }

    /**
     * Sets the Discount property value. The Discount property
     * @param int|null $value Value to set for the Discount property.
    */
    public function setDiscount(?int $value): void {
        $this->discount = $value;
    }

    /**
     * Sets the FilesStored property value. The FilesStored property
     * @param int|null $value Value to set for the FilesStored property.
    */
    public function setFilesStored(?int $value): void {
        $this->filesStored = $value;
    }

    /**
     * Sets the Id property value. The Id property
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the Name property value. The Name property
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the Password property value. The Password property
     * @param string|null $value Value to set for the Password property.
    */
    public function setPassword(?string $value): void {
        $this->password = $value;
    }

    /**
     * Sets the PriceOverride property value. The PriceOverride property
     * @param float|null $value Value to set for the PriceOverride property.
    */
    public function setPriceOverride(?float $value): void {
        $this->priceOverride = $value;
    }

    /**
     * Sets the PullZones property value. The PullZones property
     * @param array<PullZone>|null $value Value to set for the PullZones property.
    */
    public function setPullZones(?array $value): void {
        $this->pullZones = $value;
    }

    /**
     * Sets the ReadOnlyPassword property value. The ReadOnlyPassword property
     * @param string|null $value Value to set for the ReadOnlyPassword property.
    */
    public function setReadOnlyPassword(?string $value): void {
        $this->readOnlyPassword = $value;
    }

    /**
     * Sets the Region property value. The Region property
     * @param StandardRegions|null $value Value to set for the Region property.
    */
    public function setRegion(?StandardRegions $value): void {
        $this->region = $value;
    }

    /**
     * Sets the ReplicationChangeInProgress property value. The ReplicationChangeInProgress property
     * @param bool|null $value Value to set for the ReplicationChangeInProgress property.
    */
    public function setReplicationChangeInProgress(?bool $value): void {
        $this->replicationChangeInProgress = $value;
    }

    /**
     * Sets the ReplicationRegions property value. The ReplicationRegions property
     * @param array<EdgeReplicationRegions>|null $value Value to set for the ReplicationRegions property.
    */
    public function setReplicationRegions(?array $value): void {
        $this->replicationRegions = $value;
    }

    /**
     * Sets the Rewrite404To200 property value. The Rewrite404To200 property
     * @param bool|null $value Value to set for the Rewrite404To200 property.
    */
    public function setRewrite404To200(?bool $value): void {
        $this->rewrite404To200 = $value;
    }

    /**
     * Sets the StorageHostname property value. The StorageHostname property
     * @param string|null $value Value to set for the StorageHostname property.
    */
    public function setStorageHostname(?string $value): void {
        $this->storageHostname = $value;
    }

    /**
     * Sets the StorageUsed property value. The StorageUsed property
     * @param int|null $value Value to set for the StorageUsed property.
    */
    public function setStorageUsed(?int $value): void {
        $this->storageUsed = $value;
    }

    /**
     * Sets the UserId property value. The UserId property
     * @param string|null $value Value to set for the UserId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

    /**
     * Sets the ZoneTier property value. The ZoneTier property
     * @param float|null $value Value to set for the ZoneTier property.
    */
    public function setZoneTier(?float $value): void {
        $this->zoneTier = $value;
    }

}
