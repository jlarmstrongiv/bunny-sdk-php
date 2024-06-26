<?php

namespace BunnyApiClient\Models\StorageZone;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StorageZoneCreate implements AdditionalDataHolder, Parsable 
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
     * @var string|null $name The Name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $originUrl The OriginUrl property
    */
    private ?string $originUrl = null;
    
    /**
     * @var StandardRegions|null $region The Region property
    */
    private ?StandardRegions $region = null;
    
    /**
     * @var array<EdgeReplicationRegions>|null $replicationRegions The ReplicationRegions property
    */
    private ?array $replicationRegions = null;
    
    /**
     * @var bool|null $rewrite404To200 The Rewrite404To200 property
    */
    private ?bool $rewrite404To200 = null;
    
    /**
     * @var float|null $zoneTier The ZoneTier property
    */
    private ?float $zoneTier = null;
    
    /**
     * Instantiates a new StorageZoneCreate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StorageZoneCreate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StorageZoneCreate {
        return new StorageZoneCreate();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Custom404FilePath' => fn(ParseNode $n) => $o->setCustom404FilePath($n->getStringValue()),
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'OriginUrl' => fn(ParseNode $n) => $o->setOriginUrl($n->getStringValue()),
            'Region' => fn(ParseNode $n) => $o->setRegion($n->getEnumValue(StandardRegions::class)),
            'ReplicationRegions' => fn(ParseNode $n) => $o->setReplicationRegions($n->getCollectionOfEnumValues(EdgeReplicationRegions::class)),
            'Rewrite404To200' => fn(ParseNode $n) => $o->setRewrite404To200($n->getBooleanValue()),
            'ZoneTier' => fn(ParseNode $n) => $o->setZoneTier($n->getFloatValue()),
        ];
    }

    /**
     * Gets the Name property value. The Name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the OriginUrl property value. The OriginUrl property
     * @return string|null
    */
    public function getOriginUrl(): ?string {
        return $this->originUrl;
    }

    /**
     * Gets the Region property value. The Region property
     * @return StandardRegions|null
    */
    public function getRegion(): ?StandardRegions {
        return $this->region;
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
        $writer->writeStringValue('OriginUrl', $this->getOriginUrl());
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
     * Sets the Name property value. The Name property
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the OriginUrl property value. The OriginUrl property
     * @param string|null $value Value to set for the OriginUrl property.
    */
    public function setOriginUrl(?string $value): void {
        $this->originUrl = $value;
    }

    /**
     * Sets the Region property value. The Region property
     * @param StandardRegions|null $value Value to set for the Region property.
    */
    public function setRegion(?StandardRegions $value): void {
        $this->region = $value;
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
     * Sets the ZoneTier property value. The ZoneTier property
     * @param float|null $value Value to set for the ZoneTier property.
    */
    public function setZoneTier(?float $value): void {
        $this->zoneTier = $value;
    }

}
