<?php

namespace BunnyApiClient\Models\DnsZone\UpdateDnsRecord;

use BunnyApiClient\Models\DnsZone\DnsRecord_EnviromentalVariables;
use BunnyApiClient\Models\DnsZone\DnsRecord_GeolocationInfo;
use BunnyApiClient\Models\DnsZone\DnsRecord_IPGeoLocationInfo;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DnsRecord implements AdditionalDataHolder, Parsable 
{
    /**
     * @var bool|null $accelerated The Accelerated property
    */
    private ?bool $accelerated = null;
    
    /**
     * @var int|null $acceleratedPullZoneId The AcceleratedPullZoneId property
    */
    private ?int $acceleratedPullZoneId = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $comment The Comment property
    */
    private ?string $comment = null;
    
    /**
     * @var bool|null $disabled The Disabled property
    */
    private ?bool $disabled = null;
    
    /**
     * @var array<DnsRecord_EnviromentalVariables>|null $enviromentalVariables The EnviromentalVariables property
    */
    private ?array $enviromentalVariables = null;
    
    /**
     * @var int|null $flags The Flags property
    */
    private ?int $flags = null;
    
    /**
     * @var DnsRecord_GeolocationInfo|null $geolocationInfo The GeolocationInfo property
    */
    private ?DnsRecord_GeolocationInfo $geolocationInfo = null;
    
    /**
     * @var float|null $geolocationLatitude The GeolocationLatitude property
    */
    private ?float $geolocationLatitude = null;
    
    /**
     * @var float|null $geolocationLongitude The GeolocationLongitude property
    */
    private ?float $geolocationLongitude = null;
    
    /**
     * @var int|null $id The Id property
    */
    private ?int $id = null;
    
    /**
     * @var DnsRecord_IPGeoLocationInfo|null $iPGeoLocationInfo The IPGeoLocationInfo property
    */
    private ?DnsRecord_IPGeoLocationInfo $iPGeoLocationInfo = null;
    
    /**
     * @var string|null $latencyZone The LatencyZone property
    */
    private ?string $latencyZone = null;
    
    /**
     * @var string|null $linkName The LinkName property
    */
    private ?string $linkName = null;
    
    /**
     * @var float|null $monitorStatus The MonitorStatus property
    */
    private ?float $monitorStatus = null;
    
    /**
     * @var float|null $monitorType The MonitorType property
    */
    private ?float $monitorType = null;
    
    /**
     * @var string|null $name The Name property
    */
    private ?string $name = null;
    
    /**
     * @var int|null $port The Port property
    */
    private ?int $port = null;
    
    /**
     * @var int|null $priority The Priority property
    */
    private ?int $priority = null;
    
    /**
     * @var float|null $smartRoutingType The SmartRoutingType property
    */
    private ?float $smartRoutingType = null;
    
    /**
     * @var string|null $tag The Tag property
    */
    private ?string $tag = null;
    
    /**
     * @var float|null $ttl The Ttl property
    */
    private ?float $ttl = null;
    
    /**
     * @var float|null $type The Type property
    */
    private ?float $type = null;
    
    /**
     * @var string|null $value The Value property
    */
    private ?string $value = null;
    
    /**
     * @var int|null $weight The Weight property
    */
    private ?int $weight = null;
    
    /**
     * Instantiates a new DnsRecord and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DnsRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DnsRecord {
        return new DnsRecord();
    }

    /**
     * Gets the Accelerated property value. The Accelerated property
     * @return bool|null
    */
    public function getAccelerated(): ?bool {
        return $this->accelerated;
    }

    /**
     * Gets the AcceleratedPullZoneId property value. The AcceleratedPullZoneId property
     * @return int|null
    */
    public function getAcceleratedPullZoneId(): ?int {
        return $this->acceleratedPullZoneId;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the Comment property value. The Comment property
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * Gets the Disabled property value. The Disabled property
     * @return bool|null
    */
    public function getDisabled(): ?bool {
        return $this->disabled;
    }

    /**
     * Gets the EnviromentalVariables property value. The EnviromentalVariables property
     * @return array<DnsRecord_EnviromentalVariables>|null
    */
    public function getEnviromentalVariables(): ?array {
        return $this->enviromentalVariables;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Accelerated' => fn(ParseNode $n) => $o->setAccelerated($n->getBooleanValue()),
            'AcceleratedPullZoneId' => fn(ParseNode $n) => $o->setAcceleratedPullZoneId($n->getIntegerValue()),
            'Comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'Disabled' => fn(ParseNode $n) => $o->setDisabled($n->getBooleanValue()),
            'EnviromentalVariables' => fn(ParseNode $n) => $o->setEnviromentalVariables($n->getCollectionOfObjectValues([DnsRecord_EnviromentalVariables::class, 'createFromDiscriminatorValue'])),
            'Flags' => fn(ParseNode $n) => $o->setFlags($n->getIntegerValue()),
            'GeolocationInfo' => fn(ParseNode $n) => $o->setGeolocationInfo($n->getObjectValue([DnsRecord_GeolocationInfo::class, 'createFromDiscriminatorValue'])),
            'GeolocationLatitude' => fn(ParseNode $n) => $o->setGeolocationLatitude($n->getFloatValue()),
            'GeolocationLongitude' => fn(ParseNode $n) => $o->setGeolocationLongitude($n->getFloatValue()),
            'Id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'IPGeoLocationInfo' => fn(ParseNode $n) => $o->setIPGeoLocationInfo($n->getObjectValue([DnsRecord_IPGeoLocationInfo::class, 'createFromDiscriminatorValue'])),
            'LatencyZone' => fn(ParseNode $n) => $o->setLatencyZone($n->getStringValue()),
            'LinkName' => fn(ParseNode $n) => $o->setLinkName($n->getStringValue()),
            'MonitorStatus' => fn(ParseNode $n) => $o->setMonitorStatus($n->getFloatValue()),
            'MonitorType' => fn(ParseNode $n) => $o->setMonitorType($n->getFloatValue()),
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'Port' => fn(ParseNode $n) => $o->setPort($n->getIntegerValue()),
            'Priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'SmartRoutingType' => fn(ParseNode $n) => $o->setSmartRoutingType($n->getFloatValue()),
            'Tag' => fn(ParseNode $n) => $o->setTag($n->getStringValue()),
            'Ttl' => fn(ParseNode $n) => $o->setTtl($n->getFloatValue()),
            'Type' => fn(ParseNode $n) => $o->setType($n->getFloatValue()),
            'Value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
            'Weight' => fn(ParseNode $n) => $o->setWeight($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the Flags property value. The Flags property
     * @return int|null
    */
    public function getFlags(): ?int {
        return $this->flags;
    }

    /**
     * Gets the GeolocationInfo property value. The GeolocationInfo property
     * @return DnsRecord_GeolocationInfo|null
    */
    public function getGeolocationInfo(): ?DnsRecord_GeolocationInfo {
        return $this->geolocationInfo;
    }

    /**
     * Gets the GeolocationLatitude property value. The GeolocationLatitude property
     * @return float|null
    */
    public function getGeolocationLatitude(): ?float {
        return $this->geolocationLatitude;
    }

    /**
     * Gets the GeolocationLongitude property value. The GeolocationLongitude property
     * @return float|null
    */
    public function getGeolocationLongitude(): ?float {
        return $this->geolocationLongitude;
    }

    /**
     * Gets the Id property value. The Id property
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the IPGeoLocationInfo property value. The IPGeoLocationInfo property
     * @return DnsRecord_IPGeoLocationInfo|null
    */
    public function getIPGeoLocationInfo(): ?DnsRecord_IPGeoLocationInfo {
        return $this->iPGeoLocationInfo;
    }

    /**
     * Gets the LatencyZone property value. The LatencyZone property
     * @return string|null
    */
    public function getLatencyZone(): ?string {
        return $this->latencyZone;
    }

    /**
     * Gets the LinkName property value. The LinkName property
     * @return string|null
    */
    public function getLinkName(): ?string {
        return $this->linkName;
    }

    /**
     * Gets the MonitorStatus property value. The MonitorStatus property
     * @return float|null
    */
    public function getMonitorStatus(): ?float {
        return $this->monitorStatus;
    }

    /**
     * Gets the MonitorType property value. The MonitorType property
     * @return float|null
    */
    public function getMonitorType(): ?float {
        return $this->monitorType;
    }

    /**
     * Gets the Name property value. The Name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the Port property value. The Port property
     * @return int|null
    */
    public function getPort(): ?int {
        return $this->port;
    }

    /**
     * Gets the Priority property value. The Priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the SmartRoutingType property value. The SmartRoutingType property
     * @return float|null
    */
    public function getSmartRoutingType(): ?float {
        return $this->smartRoutingType;
    }

    /**
     * Gets the Tag property value. The Tag property
     * @return string|null
    */
    public function getTag(): ?string {
        return $this->tag;
    }

    /**
     * Gets the Ttl property value. The Ttl property
     * @return float|null
    */
    public function getTtl(): ?float {
        return $this->ttl;
    }

    /**
     * Gets the Type property value. The Type property
     * @return float|null
    */
    public function getType(): ?float {
        return $this->type;
    }

    /**
     * Gets the Value property value. The Value property
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Gets the Weight property value. The Weight property
     * @return int|null
    */
    public function getWeight(): ?int {
        return $this->weight;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('Accelerated', $this->getAccelerated());
        $writer->writeStringValue('Comment', $this->getComment());
        $writer->writeBooleanValue('Disabled', $this->getDisabled());
        $writer->writeCollectionOfObjectValues('EnviromentalVariables', $this->getEnviromentalVariables());
        $writer->writeIntegerValue('Flags', $this->getFlags());
        $writer->writeFloatValue('GeolocationLatitude', $this->getGeolocationLatitude());
        $writer->writeFloatValue('GeolocationLongitude', $this->getGeolocationLongitude());
        $writer->writeStringValue('LatencyZone', $this->getLatencyZone());
        $writer->writeFloatValue('MonitorType', $this->getMonitorType());
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeIntegerValue('Port', $this->getPort());
        $writer->writeIntegerValue('Priority', $this->getPriority());
        $writer->writeFloatValue('SmartRoutingType', $this->getSmartRoutingType());
        $writer->writeStringValue('Tag', $this->getTag());
        $writer->writeFloatValue('Ttl', $this->getTtl());
        $writer->writeFloatValue('Type', $this->getType());
        $writer->writeStringValue('Value', $this->getValue());
        $writer->writeIntegerValue('Weight', $this->getWeight());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the Accelerated property value. The Accelerated property
     * @param bool|null $value Value to set for the Accelerated property.
    */
    public function setAccelerated(?bool $value): void {
        $this->accelerated = $value;
    }

    /**
     * Sets the AcceleratedPullZoneId property value. The AcceleratedPullZoneId property
     * @param int|null $value Value to set for the AcceleratedPullZoneId property.
    */
    public function setAcceleratedPullZoneId(?int $value): void {
        $this->acceleratedPullZoneId = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the Comment property value. The Comment property
     * @param string|null $value Value to set for the Comment property.
    */
    public function setComment(?string $value): void {
        $this->comment = $value;
    }

    /**
     * Sets the Disabled property value. The Disabled property
     * @param bool|null $value Value to set for the Disabled property.
    */
    public function setDisabled(?bool $value): void {
        $this->disabled = $value;
    }

    /**
     * Sets the EnviromentalVariables property value. The EnviromentalVariables property
     * @param array<DnsRecord_EnviromentalVariables>|null $value Value to set for the EnviromentalVariables property.
    */
    public function setEnviromentalVariables(?array $value): void {
        $this->enviromentalVariables = $value;
    }

    /**
     * Sets the Flags property value. The Flags property
     * @param int|null $value Value to set for the Flags property.
    */
    public function setFlags(?int $value): void {
        $this->flags = $value;
    }

    /**
     * Sets the GeolocationInfo property value. The GeolocationInfo property
     * @param DnsRecord_GeolocationInfo|null $value Value to set for the GeolocationInfo property.
    */
    public function setGeolocationInfo(?DnsRecord_GeolocationInfo $value): void {
        $this->geolocationInfo = $value;
    }

    /**
     * Sets the GeolocationLatitude property value. The GeolocationLatitude property
     * @param float|null $value Value to set for the GeolocationLatitude property.
    */
    public function setGeolocationLatitude(?float $value): void {
        $this->geolocationLatitude = $value;
    }

    /**
     * Sets the GeolocationLongitude property value. The GeolocationLongitude property
     * @param float|null $value Value to set for the GeolocationLongitude property.
    */
    public function setGeolocationLongitude(?float $value): void {
        $this->geolocationLongitude = $value;
    }

    /**
     * Sets the Id property value. The Id property
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the IPGeoLocationInfo property value. The IPGeoLocationInfo property
     * @param DnsRecord_IPGeoLocationInfo|null $value Value to set for the IPGeoLocationInfo property.
    */
    public function setIPGeoLocationInfo(?DnsRecord_IPGeoLocationInfo $value): void {
        $this->iPGeoLocationInfo = $value;
    }

    /**
     * Sets the LatencyZone property value. The LatencyZone property
     * @param string|null $value Value to set for the LatencyZone property.
    */
    public function setLatencyZone(?string $value): void {
        $this->latencyZone = $value;
    }

    /**
     * Sets the LinkName property value. The LinkName property
     * @param string|null $value Value to set for the LinkName property.
    */
    public function setLinkName(?string $value): void {
        $this->linkName = $value;
    }

    /**
     * Sets the MonitorStatus property value. The MonitorStatus property
     * @param float|null $value Value to set for the MonitorStatus property.
    */
    public function setMonitorStatus(?float $value): void {
        $this->monitorStatus = $value;
    }

    /**
     * Sets the MonitorType property value. The MonitorType property
     * @param float|null $value Value to set for the MonitorType property.
    */
    public function setMonitorType(?float $value): void {
        $this->monitorType = $value;
    }

    /**
     * Sets the Name property value. The Name property
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the Port property value. The Port property
     * @param int|null $value Value to set for the Port property.
    */
    public function setPort(?int $value): void {
        $this->port = $value;
    }

    /**
     * Sets the Priority property value. The Priority property
     * @param int|null $value Value to set for the Priority property.
    */
    public function setPriority(?int $value): void {
        $this->priority = $value;
    }

    /**
     * Sets the SmartRoutingType property value. The SmartRoutingType property
     * @param float|null $value Value to set for the SmartRoutingType property.
    */
    public function setSmartRoutingType(?float $value): void {
        $this->smartRoutingType = $value;
    }

    /**
     * Sets the Tag property value. The Tag property
     * @param string|null $value Value to set for the Tag property.
    */
    public function setTag(?string $value): void {
        $this->tag = $value;
    }

    /**
     * Sets the Ttl property value. The Ttl property
     * @param float|null $value Value to set for the Ttl property.
    */
    public function setTtl(?float $value): void {
        $this->ttl = $value;
    }

    /**
     * Sets the Type property value. The Type property
     * @param float|null $value Value to set for the Type property.
    */
    public function setType(?float $value): void {
        $this->type = $value;
    }

    /**
     * Sets the Value property value. The Value property
     * @param string|null $value Value to set for the Value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

    /**
     * Sets the Weight property value. The Weight property
     * @param int|null $value Value to set for the Weight property.
    */
    public function setWeight(?int $value): void {
        $this->weight = $value;
    }

}
