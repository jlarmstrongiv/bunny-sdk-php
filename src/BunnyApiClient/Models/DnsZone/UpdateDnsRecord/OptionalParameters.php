<?php

namespace BunnyApiClient\Models\DnsZone\UpdateDnsRecord;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The template for adding optional properties.
*/
class OptionalParameters implements AdditionalDataHolder, Parsable 
{
    /**
     * @var bool|null $accelerated The Accelerated property
    */
    private ?bool $accelerated = null;
    
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
     * @var array<OptionalParameters_EnviromentalVariables>|null $enviromentalVariables The EnviromentalVariables property
    */
    private ?array $enviromentalVariables = null;
    
    /**
     * @var int|null $flags The Flags property
    */
    private ?int $flags = null;
    
    /**
     * @var float|null $geolocationLatitude The GeolocationLatitude property
    */
    private ?float $geolocationLatitude = null;
    
    /**
     * @var float|null $geolocationLongitude The GeolocationLongitude property
    */
    private ?float $geolocationLongitude = null;
    
    /**
     * @var string|null $latencyZone The LatencyZone property
    */
    private ?string $latencyZone = null;
    
    /**
     * @var float|null $monitorType The MonitorType property
    */
    private ?float $monitorType = null;
    
    /**
     * @var int|null $port The Port property
    */
    private ?int $port = null;
    
    /**
     * @var int|null $priority The Priority property
    */
    private ?int $priority = null;
    
    /**
     * @var int|null $pullZoneId The PullZoneId property
    */
    private ?int $pullZoneId = null;
    
    /**
     * @var int|null $scriptId The ScriptId property
    */
    private ?int $scriptId = null;
    
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
     * @var int|null $weight The Weight property
    */
    private ?int $weight = null;
    
    /**
     * Instantiates a new OptionalParameters and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OptionalParameters
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OptionalParameters {
        return new OptionalParameters();
    }

    /**
     * Gets the Accelerated property value. The Accelerated property
     * @return bool|null
    */
    public function getAccelerated(): ?bool {
        return $this->accelerated;
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
     * @return array<OptionalParameters_EnviromentalVariables>|null
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
            'Comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'Disabled' => fn(ParseNode $n) => $o->setDisabled($n->getBooleanValue()),
            'EnviromentalVariables' => fn(ParseNode $n) => $o->setEnviromentalVariables($n->getCollectionOfObjectValues([OptionalParameters_EnviromentalVariables::class, 'createFromDiscriminatorValue'])),
            'Flags' => fn(ParseNode $n) => $o->setFlags($n->getIntegerValue()),
            'GeolocationLatitude' => fn(ParseNode $n) => $o->setGeolocationLatitude($n->getFloatValue()),
            'GeolocationLongitude' => fn(ParseNode $n) => $o->setGeolocationLongitude($n->getFloatValue()),
            'LatencyZone' => fn(ParseNode $n) => $o->setLatencyZone($n->getStringValue()),
            'MonitorType' => fn(ParseNode $n) => $o->setMonitorType($n->getFloatValue()),
            'Port' => fn(ParseNode $n) => $o->setPort($n->getIntegerValue()),
            'Priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'PullZoneId' => fn(ParseNode $n) => $o->setPullZoneId($n->getIntegerValue()),
            'ScriptId' => fn(ParseNode $n) => $o->setScriptId($n->getIntegerValue()),
            'SmartRoutingType' => fn(ParseNode $n) => $o->setSmartRoutingType($n->getFloatValue()),
            'Tag' => fn(ParseNode $n) => $o->setTag($n->getStringValue()),
            'Ttl' => fn(ParseNode $n) => $o->setTtl($n->getFloatValue()),
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
     * Gets the LatencyZone property value. The LatencyZone property
     * @return string|null
    */
    public function getLatencyZone(): ?string {
        return $this->latencyZone;
    }

    /**
     * Gets the MonitorType property value. The MonitorType property
     * @return float|null
    */
    public function getMonitorType(): ?float {
        return $this->monitorType;
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
     * Gets the PullZoneId property value. The PullZoneId property
     * @return int|null
    */
    public function getPullZoneId(): ?int {
        return $this->pullZoneId;
    }

    /**
     * Gets the ScriptId property value. The ScriptId property
     * @return int|null
    */
    public function getScriptId(): ?int {
        return $this->scriptId;
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
        $writer->writeIntegerValue('Port', $this->getPort());
        $writer->writeIntegerValue('Priority', $this->getPriority());
        $writer->writeIntegerValue('PullZoneId', $this->getPullZoneId());
        $writer->writeIntegerValue('ScriptId', $this->getScriptId());
        $writer->writeFloatValue('SmartRoutingType', $this->getSmartRoutingType());
        $writer->writeStringValue('Tag', $this->getTag());
        $writer->writeFloatValue('Ttl', $this->getTtl());
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
     * @param array<OptionalParameters_EnviromentalVariables>|null $value Value to set for the EnviromentalVariables property.
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
     * Sets the LatencyZone property value. The LatencyZone property
     * @param string|null $value Value to set for the LatencyZone property.
    */
    public function setLatencyZone(?string $value): void {
        $this->latencyZone = $value;
    }

    /**
     * Sets the MonitorType property value. The MonitorType property
     * @param float|null $value Value to set for the MonitorType property.
    */
    public function setMonitorType(?float $value): void {
        $this->monitorType = $value;
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
     * Sets the PullZoneId property value. The PullZoneId property
     * @param int|null $value Value to set for the PullZoneId property.
    */
    public function setPullZoneId(?int $value): void {
        $this->pullZoneId = $value;
    }

    /**
     * Sets the ScriptId property value. The ScriptId property
     * @param int|null $value Value to set for the ScriptId property.
    */
    public function setScriptId(?int $value): void {
        $this->scriptId = $value;
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
     * Sets the Weight property value. The Weight property
     * @param int|null $value Value to set for the Weight property.
    */
    public function setWeight(?int $value): void {
        $this->weight = $value;
    }

}
