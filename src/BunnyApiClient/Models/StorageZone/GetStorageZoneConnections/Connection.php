<?php

namespace BunnyApiClient\Models\StorageZone\GetStorageZoneConnections;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Connection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $connectionType The ConnectionType property
    */
    private ?float $connectionType = null;
    
    /**
     * @var string|null $mainCustomDomain The main custom connected CDN domain
    */
    private ?string $mainCustomDomain = null;
    
    /**
     * @var float|null $monthlyBandwidthUsed The total amount of bandwidth served by this zone this month
    */
    private ?float $monthlyBandwidthUsed = null;
    
    /**
     * @var float|null $monthlyCharges The total monthly charges incurred by this zone
    */
    private ?float $monthlyCharges = null;
    
    /**
     * @var int|null $pullZoneId The ID of the connected pull zone
    */
    private ?int $pullZoneId = null;
    
    /**
     * @var string|null $pullZoneName The name of the connected pull zone
    */
    private ?string $pullZoneName = null;
    
    /**
     * @var float|null $tier The Tier property
    */
    private ?float $tier = null;
    
    /**
     * Instantiates a new Connection and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Connection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Connection {
        return new Connection();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the ConnectionType property value. The ConnectionType property
     * @return float|null
    */
    public function getConnectionType(): ?float {
        return $this->connectionType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ConnectionType' => fn(ParseNode $n) => $o->setConnectionType($n->getFloatValue()),
            'MainCustomDomain' => fn(ParseNode $n) => $o->setMainCustomDomain($n->getStringValue()),
            'MonthlyBandwidthUsed' => fn(ParseNode $n) => $o->setMonthlyBandwidthUsed($n->getFloatValue()),
            'MonthlyCharges' => fn(ParseNode $n) => $o->setMonthlyCharges($n->getFloatValue()),
            'PullZoneId' => fn(ParseNode $n) => $o->setPullZoneId($n->getIntegerValue()),
            'PullZoneName' => fn(ParseNode $n) => $o->setPullZoneName($n->getStringValue()),
            'Tier' => fn(ParseNode $n) => $o->setTier($n->getFloatValue()),
        ];
    }

    /**
     * Gets the MainCustomDomain property value. The main custom connected CDN domain
     * @return string|null
    */
    public function getMainCustomDomain(): ?string {
        return $this->mainCustomDomain;
    }

    /**
     * Gets the MonthlyBandwidthUsed property value. The total amount of bandwidth served by this zone this month
     * @return float|null
    */
    public function getMonthlyBandwidthUsed(): ?float {
        return $this->monthlyBandwidthUsed;
    }

    /**
     * Gets the MonthlyCharges property value. The total monthly charges incurred by this zone
     * @return float|null
    */
    public function getMonthlyCharges(): ?float {
        return $this->monthlyCharges;
    }

    /**
     * Gets the PullZoneId property value. The ID of the connected pull zone
     * @return int|null
    */
    public function getPullZoneId(): ?int {
        return $this->pullZoneId;
    }

    /**
     * Gets the PullZoneName property value. The name of the connected pull zone
     * @return string|null
    */
    public function getPullZoneName(): ?string {
        return $this->pullZoneName;
    }

    /**
     * Gets the Tier property value. The Tier property
     * @return float|null
    */
    public function getTier(): ?float {
        return $this->tier;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('ConnectionType', $this->getConnectionType());
        $writer->writeStringValue('MainCustomDomain', $this->getMainCustomDomain());
        $writer->writeFloatValue('MonthlyBandwidthUsed', $this->getMonthlyBandwidthUsed());
        $writer->writeFloatValue('MonthlyCharges', $this->getMonthlyCharges());
        $writer->writeIntegerValue('PullZoneId', $this->getPullZoneId());
        $writer->writeStringValue('PullZoneName', $this->getPullZoneName());
        $writer->writeFloatValue('Tier', $this->getTier());
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
     * Sets the ConnectionType property value. The ConnectionType property
     * @param float|null $value Value to set for the ConnectionType property.
    */
    public function setConnectionType(?float $value): void {
        $this->connectionType = $value;
    }

    /**
     * Sets the MainCustomDomain property value. The main custom connected CDN domain
     * @param string|null $value Value to set for the MainCustomDomain property.
    */
    public function setMainCustomDomain(?string $value): void {
        $this->mainCustomDomain = $value;
    }

    /**
     * Sets the MonthlyBandwidthUsed property value. The total amount of bandwidth served by this zone this month
     * @param float|null $value Value to set for the MonthlyBandwidthUsed property.
    */
    public function setMonthlyBandwidthUsed(?float $value): void {
        $this->monthlyBandwidthUsed = $value;
    }

    /**
     * Sets the MonthlyCharges property value. The total monthly charges incurred by this zone
     * @param float|null $value Value to set for the MonthlyCharges property.
    */
    public function setMonthlyCharges(?float $value): void {
        $this->monthlyCharges = $value;
    }

    /**
     * Sets the PullZoneId property value. The ID of the connected pull zone
     * @param int|null $value Value to set for the PullZoneId property.
    */
    public function setPullZoneId(?int $value): void {
        $this->pullZoneId = $value;
    }

    /**
     * Sets the PullZoneName property value. The name of the connected pull zone
     * @param string|null $value Value to set for the PullZoneName property.
    */
    public function setPullZoneName(?string $value): void {
        $this->pullZoneName = $value;
    }

    /**
     * Sets the Tier property value. The Tier property
     * @param float|null $value Value to set for the Tier property.
    */
    public function setTier(?float $value): void {
        $this->tier = $value;
    }

}
