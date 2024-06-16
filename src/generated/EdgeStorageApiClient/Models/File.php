<?php

namespace EdgeStorageApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class File implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $arrayNumber The ArrayNumber property
    */
    private ?int $arrayNumber = null;
    
    /**
     * @var string|null $checksum The Checksum property
    */
    private ?string $checksum = null;
    
    /**
     * @var string|null $contentType The ContentType property
    */
    private ?string $contentType = null;
    
    /**
     * @var DateTime|null $dateCreated The DateCreated property
    */
    private ?DateTime $dateCreated = null;
    
    /**
     * @var string|null $guid The Guid property
    */
    private ?string $guid = null;
    
    /**
     * @var bool|null $isDirectory The IsDirectory property
    */
    private ?bool $isDirectory = null;
    
    /**
     * @var DateTime|null $lastChanged The LastChanged property
    */
    private ?DateTime $lastChanged = null;
    
    /**
     * @var int|null $length The Length property
    */
    private ?int $length = null;
    
    /**
     * @var string|null $objectName The ObjectName property
    */
    private ?string $objectName = null;
    
    /**
     * @var string|null $path The Path property
    */
    private ?string $path = null;
    
    /**
     * @var string|null $replicatedZones The ReplicatedZones property
    */
    private ?string $replicatedZones = null;
    
    /**
     * @var int|null $serverId The ServerId property
    */
    private ?int $serverId = null;
    
    /**
     * @var int|null $storageZoneId The StorageZoneId property
    */
    private ?int $storageZoneId = null;
    
    /**
     * @var string|null $storageZoneName The StorageZoneName property
    */
    private ?string $storageZoneName = null;
    
    /**
     * @var string|null $userId The UserId property
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new File and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return File
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): File {
        return new File();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the ArrayNumber property value. The ArrayNumber property
     * @return int|null
    */
    public function getArrayNumber(): ?int {
        return $this->arrayNumber;
    }

    /**
     * Gets the Checksum property value. The Checksum property
     * @return string|null
    */
    public function getChecksum(): ?string {
        return $this->checksum;
    }

    /**
     * Gets the ContentType property value. The ContentType property
     * @return string|null
    */
    public function getContentType(): ?string {
        return $this->contentType;
    }

    /**
     * Gets the DateCreated property value. The DateCreated property
     * @return DateTime|null
    */
    public function getDateCreated(): ?DateTime {
        return $this->dateCreated;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ArrayNumber' => fn(ParseNode $n) => $o->setArrayNumber($n->getIntegerValue()),
            'Checksum' => fn(ParseNode $n) => $o->setChecksum($n->getStringValue()),
            'ContentType' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'DateCreated' => fn(ParseNode $n) => $o->setDateCreated($n->getDateTimeValue()),
            'Guid' => fn(ParseNode $n) => $o->setGuid($n->getStringValue()),
            'IsDirectory' => fn(ParseNode $n) => $o->setIsDirectory($n->getBooleanValue()),
            'LastChanged' => fn(ParseNode $n) => $o->setLastChanged($n->getDateTimeValue()),
            'Length' => fn(ParseNode $n) => $o->setLength($n->getIntegerValue()),
            'ObjectName' => fn(ParseNode $n) => $o->setObjectName($n->getStringValue()),
            'Path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
            'ReplicatedZones' => fn(ParseNode $n) => $o->setReplicatedZones($n->getStringValue()),
            'ServerId' => fn(ParseNode $n) => $o->setServerId($n->getIntegerValue()),
            'StorageZoneId' => fn(ParseNode $n) => $o->setStorageZoneId($n->getIntegerValue()),
            'StorageZoneName' => fn(ParseNode $n) => $o->setStorageZoneName($n->getStringValue()),
            'UserId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the Guid property value. The Guid property
     * @return string|null
    */
    public function getGuid(): ?string {
        return $this->guid;
    }

    /**
     * Gets the IsDirectory property value. The IsDirectory property
     * @return bool|null
    */
    public function getIsDirectory(): ?bool {
        return $this->isDirectory;
    }

    /**
     * Gets the LastChanged property value. The LastChanged property
     * @return DateTime|null
    */
    public function getLastChanged(): ?DateTime {
        return $this->lastChanged;
    }

    /**
     * Gets the Length property value. The Length property
     * @return int|null
    */
    public function getLength(): ?int {
        return $this->length;
    }

    /**
     * Gets the ObjectName property value. The ObjectName property
     * @return string|null
    */
    public function getObjectName(): ?string {
        return $this->objectName;
    }

    /**
     * Gets the Path property value. The Path property
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->path;
    }

    /**
     * Gets the ReplicatedZones property value. The ReplicatedZones property
     * @return string|null
    */
    public function getReplicatedZones(): ?string {
        return $this->replicatedZones;
    }

    /**
     * Gets the ServerId property value. The ServerId property
     * @return int|null
    */
    public function getServerId(): ?int {
        return $this->serverId;
    }

    /**
     * Gets the StorageZoneId property value. The StorageZoneId property
     * @return int|null
    */
    public function getStorageZoneId(): ?int {
        return $this->storageZoneId;
    }

    /**
     * Gets the StorageZoneName property value. The StorageZoneName property
     * @return string|null
    */
    public function getStorageZoneName(): ?string {
        return $this->storageZoneName;
    }

    /**
     * Gets the UserId property value. The UserId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('ArrayNumber', $this->getArrayNumber());
        $writer->writeStringValue('Checksum', $this->getChecksum());
        $writer->writeStringValue('ContentType', $this->getContentType());
        $writer->writeDateTimeValue('DateCreated', $this->getDateCreated());
        $writer->writeStringValue('Guid', $this->getGuid());
        $writer->writeBooleanValue('IsDirectory', $this->getIsDirectory());
        $writer->writeDateTimeValue('LastChanged', $this->getLastChanged());
        $writer->writeIntegerValue('Length', $this->getLength());
        $writer->writeStringValue('ObjectName', $this->getObjectName());
        $writer->writeStringValue('Path', $this->getPath());
        $writer->writeStringValue('ReplicatedZones', $this->getReplicatedZones());
        $writer->writeIntegerValue('ServerId', $this->getServerId());
        $writer->writeIntegerValue('StorageZoneId', $this->getStorageZoneId());
        $writer->writeStringValue('StorageZoneName', $this->getStorageZoneName());
        $writer->writeStringValue('UserId', $this->getUserId());
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
     * Sets the ArrayNumber property value. The ArrayNumber property
     * @param int|null $value Value to set for the ArrayNumber property.
    */
    public function setArrayNumber(?int $value): void {
        $this->arrayNumber = $value;
    }

    /**
     * Sets the Checksum property value. The Checksum property
     * @param string|null $value Value to set for the Checksum property.
    */
    public function setChecksum(?string $value): void {
        $this->checksum = $value;
    }

    /**
     * Sets the ContentType property value. The ContentType property
     * @param string|null $value Value to set for the ContentType property.
    */
    public function setContentType(?string $value): void {
        $this->contentType = $value;
    }

    /**
     * Sets the DateCreated property value. The DateCreated property
     * @param DateTime|null $value Value to set for the DateCreated property.
    */
    public function setDateCreated(?DateTime $value): void {
        $this->dateCreated = $value;
    }

    /**
     * Sets the Guid property value. The Guid property
     * @param string|null $value Value to set for the Guid property.
    */
    public function setGuid(?string $value): void {
        $this->guid = $value;
    }

    /**
     * Sets the IsDirectory property value. The IsDirectory property
     * @param bool|null $value Value to set for the IsDirectory property.
    */
    public function setIsDirectory(?bool $value): void {
        $this->isDirectory = $value;
    }

    /**
     * Sets the LastChanged property value. The LastChanged property
     * @param DateTime|null $value Value to set for the LastChanged property.
    */
    public function setLastChanged(?DateTime $value): void {
        $this->lastChanged = $value;
    }

    /**
     * Sets the Length property value. The Length property
     * @param int|null $value Value to set for the Length property.
    */
    public function setLength(?int $value): void {
        $this->length = $value;
    }

    /**
     * Sets the ObjectName property value. The ObjectName property
     * @param string|null $value Value to set for the ObjectName property.
    */
    public function setObjectName(?string $value): void {
        $this->objectName = $value;
    }

    /**
     * Sets the Path property value. The Path property
     * @param string|null $value Value to set for the Path property.
    */
    public function setPath(?string $value): void {
        $this->path = $value;
    }

    /**
     * Sets the ReplicatedZones property value. The ReplicatedZones property
     * @param string|null $value Value to set for the ReplicatedZones property.
    */
    public function setReplicatedZones(?string $value): void {
        $this->replicatedZones = $value;
    }

    /**
     * Sets the ServerId property value. The ServerId property
     * @param int|null $value Value to set for the ServerId property.
    */
    public function setServerId(?int $value): void {
        $this->serverId = $value;
    }

    /**
     * Sets the StorageZoneId property value. The StorageZoneId property
     * @param int|null $value Value to set for the StorageZoneId property.
    */
    public function setStorageZoneId(?int $value): void {
        $this->storageZoneId = $value;
    }

    /**
     * Sets the StorageZoneName property value. The StorageZoneName property
     * @param string|null $value Value to set for the StorageZoneName property.
    */
    public function setStorageZoneName(?string $value): void {
        $this->storageZoneName = $value;
    }

    /**
     * Sets the UserId property value. The UserId property
     * @param string|null $value Value to set for the UserId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
