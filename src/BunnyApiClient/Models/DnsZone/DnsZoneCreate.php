<?php

namespace BunnyApiClient\Models\DnsZone;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DnsZoneCreate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $customNameserversEnabled The CustomNameserversEnabled property
    */
    private ?bool $customNameserversEnabled = null;
    
    /**
     * @var float|null $logAnonymizationType The LogAnonymizationType property
    */
    private ?float $logAnonymizationType = null;
    
    /**
     * @var bool|null $loggingEnabled The LoggingEnabled property
    */
    private ?bool $loggingEnabled = null;
    
    /**
     * @var bool|null $loggingIPAnonymizationEnabled Determines if the log anonymization should be enabled
    */
    private ?bool $loggingIPAnonymizationEnabled = null;
    
    /**
     * @var string|null $nameserver1 The Nameserver1 property
    */
    private ?string $nameserver1 = null;
    
    /**
     * @var string|null $nameserver2 The Nameserver2 property
    */
    private ?string $nameserver2 = null;
    
    /**
     * @var string|null $soaEmail The SoaEmail property
    */
    private ?string $soaEmail = null;
    
    /**
     * Instantiates a new DnsZoneCreate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DnsZoneCreate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DnsZoneCreate {
        return new DnsZoneCreate();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the CustomNameserversEnabled property value. The CustomNameserversEnabled property
     * @return bool|null
    */
    public function getCustomNameserversEnabled(): ?bool {
        return $this->customNameserversEnabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'CustomNameserversEnabled' => fn(ParseNode $n) => $o->setCustomNameserversEnabled($n->getBooleanValue()),
            'LogAnonymizationType' => fn(ParseNode $n) => $o->setLogAnonymizationType($n->getFloatValue()),
            'LoggingEnabled' => fn(ParseNode $n) => $o->setLoggingEnabled($n->getBooleanValue()),
            'LoggingIPAnonymizationEnabled' => fn(ParseNode $n) => $o->setLoggingIPAnonymizationEnabled($n->getBooleanValue()),
            'Nameserver1' => fn(ParseNode $n) => $o->setNameserver1($n->getStringValue()),
            'Nameserver2' => fn(ParseNode $n) => $o->setNameserver2($n->getStringValue()),
            'SoaEmail' => fn(ParseNode $n) => $o->setSoaEmail($n->getStringValue()),
        ];
    }

    /**
     * Gets the LogAnonymizationType property value. The LogAnonymizationType property
     * @return float|null
    */
    public function getLogAnonymizationType(): ?float {
        return $this->logAnonymizationType;
    }

    /**
     * Gets the LoggingEnabled property value. The LoggingEnabled property
     * @return bool|null
    */
    public function getLoggingEnabled(): ?bool {
        return $this->loggingEnabled;
    }

    /**
     * Gets the LoggingIPAnonymizationEnabled property value. Determines if the log anonymization should be enabled
     * @return bool|null
    */
    public function getLoggingIPAnonymizationEnabled(): ?bool {
        return $this->loggingIPAnonymizationEnabled;
    }

    /**
     * Gets the Nameserver1 property value. The Nameserver1 property
     * @return string|null
    */
    public function getNameserver1(): ?string {
        return $this->nameserver1;
    }

    /**
     * Gets the Nameserver2 property value. The Nameserver2 property
     * @return string|null
    */
    public function getNameserver2(): ?string {
        return $this->nameserver2;
    }

    /**
     * Gets the SoaEmail property value. The SoaEmail property
     * @return string|null
    */
    public function getSoaEmail(): ?string {
        return $this->soaEmail;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('CustomNameserversEnabled', $this->getCustomNameserversEnabled());
        $writer->writeFloatValue('LogAnonymizationType', $this->getLogAnonymizationType());
        $writer->writeBooleanValue('LoggingEnabled', $this->getLoggingEnabled());
        $writer->writeBooleanValue('LoggingIPAnonymizationEnabled', $this->getLoggingIPAnonymizationEnabled());
        $writer->writeStringValue('Nameserver1', $this->getNameserver1());
        $writer->writeStringValue('Nameserver2', $this->getNameserver2());
        $writer->writeStringValue('SoaEmail', $this->getSoaEmail());
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
     * Sets the CustomNameserversEnabled property value. The CustomNameserversEnabled property
     * @param bool|null $value Value to set for the CustomNameserversEnabled property.
    */
    public function setCustomNameserversEnabled(?bool $value): void {
        $this->customNameserversEnabled = $value;
    }

    /**
     * Sets the LogAnonymizationType property value. The LogAnonymizationType property
     * @param float|null $value Value to set for the LogAnonymizationType property.
    */
    public function setLogAnonymizationType(?float $value): void {
        $this->logAnonymizationType = $value;
    }

    /**
     * Sets the LoggingEnabled property value. The LoggingEnabled property
     * @param bool|null $value Value to set for the LoggingEnabled property.
    */
    public function setLoggingEnabled(?bool $value): void {
        $this->loggingEnabled = $value;
    }

    /**
     * Sets the LoggingIPAnonymizationEnabled property value. Determines if the log anonymization should be enabled
     * @param bool|null $value Value to set for the LoggingIPAnonymizationEnabled property.
    */
    public function setLoggingIPAnonymizationEnabled(?bool $value): void {
        $this->loggingIPAnonymizationEnabled = $value;
    }

    /**
     * Sets the Nameserver1 property value. The Nameserver1 property
     * @param string|null $value Value to set for the Nameserver1 property.
    */
    public function setNameserver1(?string $value): void {
        $this->nameserver1 = $value;
    }

    /**
     * Sets the Nameserver2 property value. The Nameserver2 property
     * @param string|null $value Value to set for the Nameserver2 property.
    */
    public function setNameserver2(?string $value): void {
        $this->nameserver2 = $value;
    }

    /**
     * Sets the SoaEmail property value. The SoaEmail property
     * @param string|null $value Value to set for the SoaEmail property.
    */
    public function setSoaEmail(?string $value): void {
        $this->soaEmail = $value;
    }

}
