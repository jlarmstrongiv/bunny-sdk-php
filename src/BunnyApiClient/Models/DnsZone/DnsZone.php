<?php

namespace BunnyApiClient\Models\DnsZone;

use BunnyApiClient\Models\DnsZone\UpdateDnsRecord\DnsRecord;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DnsZone implements AdditionalDataHolder, Parsable 
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
     * @var DateTime|null $dateCreated The DateCreated property
    */
    private ?DateTime $dateCreated = null;
    
    /**
     * @var DateTime|null $dateModified The DateModified property
    */
    private ?DateTime $dateModified = null;
    
    /**
     * @var string|null $domain The Domain property
    */
    private ?string $domain = null;
    
    /**
     * @var int|null $id The Id property
    */
    private ?int $id = null;
    
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
     * @var bool|null $nameserversDetected The NameserversDetected property
    */
    private ?bool $nameserversDetected = null;
    
    /**
     * @var DateTime|null $nameserversNextCheck The NameserversNextCheck property
    */
    private ?DateTime $nameserversNextCheck = null;
    
    /**
     * @var array<DnsRecord>|null $records The Records property
    */
    private ?array $records = null;
    
    /**
     * @var string|null $soaEmail The SoaEmail property
    */
    private ?string $soaEmail = null;
    
    /**
     * Instantiates a new DnsZone and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DnsZone
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DnsZone {
        return new DnsZone();
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
     * Gets the DateCreated property value. The DateCreated property
     * @return DateTime|null
    */
    public function getDateCreated(): ?DateTime {
        return $this->dateCreated;
    }

    /**
     * Gets the DateModified property value. The DateModified property
     * @return DateTime|null
    */
    public function getDateModified(): ?DateTime {
        return $this->dateModified;
    }

    /**
     * Gets the Domain property value. The Domain property
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->domain;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'CustomNameserversEnabled' => fn(ParseNode $n) => $o->setCustomNameserversEnabled($n->getBooleanValue()),
            'DateCreated' => fn(ParseNode $n) => $o->setDateCreated($n->getDateTimeValue()),
            'DateModified' => fn(ParseNode $n) => $o->setDateModified($n->getDateTimeValue()),
            'Domain' => fn(ParseNode $n) => $o->setDomain($n->getStringValue()),
            'Id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'LogAnonymizationType' => fn(ParseNode $n) => $o->setLogAnonymizationType($n->getFloatValue()),
            'LoggingEnabled' => fn(ParseNode $n) => $o->setLoggingEnabled($n->getBooleanValue()),
            'LoggingIPAnonymizationEnabled' => fn(ParseNode $n) => $o->setLoggingIPAnonymizationEnabled($n->getBooleanValue()),
            'Nameserver1' => fn(ParseNode $n) => $o->setNameserver1($n->getStringValue()),
            'Nameserver2' => fn(ParseNode $n) => $o->setNameserver2($n->getStringValue()),
            'NameserversDetected' => fn(ParseNode $n) => $o->setNameserversDetected($n->getBooleanValue()),
            'NameserversNextCheck' => fn(ParseNode $n) => $o->setNameserversNextCheck($n->getDateTimeValue()),
            'Records' => fn(ParseNode $n) => $o->setRecords($n->getCollectionOfObjectValues([DnsRecord::class, 'createFromDiscriminatorValue'])),
            'SoaEmail' => fn(ParseNode $n) => $o->setSoaEmail($n->getStringValue()),
        ];
    }

    /**
     * Gets the Id property value. The Id property
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
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
     * Gets the NameserversDetected property value. The NameserversDetected property
     * @return bool|null
    */
    public function getNameserversDetected(): ?bool {
        return $this->nameserversDetected;
    }

    /**
     * Gets the NameserversNextCheck property value. The NameserversNextCheck property
     * @return DateTime|null
    */
    public function getNameserversNextCheck(): ?DateTime {
        return $this->nameserversNextCheck;
    }

    /**
     * Gets the Records property value. The Records property
     * @return array<DnsRecord>|null
    */
    public function getRecords(): ?array {
        return $this->records;
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
     * Sets the DateCreated property value. The DateCreated property
     * @param DateTime|null $value Value to set for the DateCreated property.
    */
    public function setDateCreated(?DateTime $value): void {
        $this->dateCreated = $value;
    }

    /**
     * Sets the DateModified property value. The DateModified property
     * @param DateTime|null $value Value to set for the DateModified property.
    */
    public function setDateModified(?DateTime $value): void {
        $this->dateModified = $value;
    }

    /**
     * Sets the Domain property value. The Domain property
     * @param string|null $value Value to set for the Domain property.
    */
    public function setDomain(?string $value): void {
        $this->domain = $value;
    }

    /**
     * Sets the Id property value. The Id property
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
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
     * Sets the NameserversDetected property value. The NameserversDetected property
     * @param bool|null $value Value to set for the NameserversDetected property.
    */
    public function setNameserversDetected(?bool $value): void {
        $this->nameserversDetected = $value;
    }

    /**
     * Sets the NameserversNextCheck property value. The NameserversNextCheck property
     * @param DateTime|null $value Value to set for the NameserversNextCheck property.
    */
    public function setNameserversNextCheck(?DateTime $value): void {
        $this->nameserversNextCheck = $value;
    }

    /**
     * Sets the Records property value. The Records property
     * @param array<DnsRecord>|null $value Value to set for the Records property.
    */
    public function setRecords(?array $value): void {
        $this->records = $value;
    }

    /**
     * Sets the SoaEmail property value. The SoaEmail property
     * @param string|null $value Value to set for the SoaEmail property.
    */
    public function setSoaEmail(?string $value): void {
        $this->soaEmail = $value;
    }

}
