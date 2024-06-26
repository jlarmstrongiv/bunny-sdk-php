<?php

namespace BunnyApiClient\Models\PullZone;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Hostname implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $certificate Contains the Base64Url encoded certificate for the hostname
    */
    private ?string $certificate = null;
    
    /**
     * @var string|null $certificateKey Contains the Base64Url encoded certificate key for the hostname
    */
    private ?string $certificateKey = null;
    
    /**
     * @var bool|null $forceSSL Determines if the Force SSL feature is enabled
    */
    private ?bool $forceSSL = null;
    
    /**
     * @var bool|null $hasCertificate Determines if the hostname has an SSL certificate configured
    */
    private ?bool $hasCertificate = null;
    
    /**
     * @var int|null $id The unique ID of the hostname
    */
    private ?int $id = null;
    
    /**
     * @var bool|null $isSystemHostname Determines if this is a system hostname controlled by bunny.net
    */
    private ?bool $isSystemHostname = null;
    
    /**
     * @var string|null $value The hostname value for the domain name
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new Hostname and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Hostname
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Hostname {
        return new Hostname();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the Certificate property value. Contains the Base64Url encoded certificate for the hostname
     * @return string|null
    */
    public function getCertificate(): ?string {
        return $this->certificate;
    }

    /**
     * Gets the CertificateKey property value. Contains the Base64Url encoded certificate key for the hostname
     * @return string|null
    */
    public function getCertificateKey(): ?string {
        return $this->certificateKey;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Certificate' => fn(ParseNode $n) => $o->setCertificate($n->getStringValue()),
            'CertificateKey' => fn(ParseNode $n) => $o->setCertificateKey($n->getStringValue()),
            'ForceSSL' => fn(ParseNode $n) => $o->setForceSSL($n->getBooleanValue()),
            'HasCertificate' => fn(ParseNode $n) => $o->setHasCertificate($n->getBooleanValue()),
            'Id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'IsSystemHostname' => fn(ParseNode $n) => $o->setIsSystemHostname($n->getBooleanValue()),
            'Value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the ForceSSL property value. Determines if the Force SSL feature is enabled
     * @return bool|null
    */
    public function getForceSSL(): ?bool {
        return $this->forceSSL;
    }

    /**
     * Gets the HasCertificate property value. Determines if the hostname has an SSL certificate configured
     * @return bool|null
    */
    public function getHasCertificate(): ?bool {
        return $this->hasCertificate;
    }

    /**
     * Gets the Id property value. The unique ID of the hostname
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the IsSystemHostname property value. Determines if this is a system hostname controlled by bunny.net
     * @return bool|null
    */
    public function getIsSystemHostname(): ?bool {
        return $this->isSystemHostname;
    }

    /**
     * Gets the Value property value. The hostname value for the domain name
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Certificate', $this->getCertificate());
        $writer->writeStringValue('CertificateKey', $this->getCertificateKey());
        $writer->writeBooleanValue('ForceSSL', $this->getForceSSL());
        $writer->writeBooleanValue('HasCertificate', $this->getHasCertificate());
        $writer->writeIntegerValue('Id', $this->getId());
        $writer->writeBooleanValue('IsSystemHostname', $this->getIsSystemHostname());
        $writer->writeStringValue('Value', $this->getValue());
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
     * Sets the Certificate property value. Contains the Base64Url encoded certificate for the hostname
     * @param string|null $value Value to set for the Certificate property.
    */
    public function setCertificate(?string $value): void {
        $this->certificate = $value;
    }

    /**
     * Sets the CertificateKey property value. Contains the Base64Url encoded certificate key for the hostname
     * @param string|null $value Value to set for the CertificateKey property.
    */
    public function setCertificateKey(?string $value): void {
        $this->certificateKey = $value;
    }

    /**
     * Sets the ForceSSL property value. Determines if the Force SSL feature is enabled
     * @param bool|null $value Value to set for the ForceSSL property.
    */
    public function setForceSSL(?bool $value): void {
        $this->forceSSL = $value;
    }

    /**
     * Sets the HasCertificate property value. Determines if the hostname has an SSL certificate configured
     * @param bool|null $value Value to set for the HasCertificate property.
    */
    public function setHasCertificate(?bool $value): void {
        $this->hasCertificate = $value;
    }

    /**
     * Sets the Id property value. The unique ID of the hostname
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the IsSystemHostname property value. Determines if this is a system hostname controlled by bunny.net
     * @param bool|null $value Value to set for the IsSystemHostname property.
    */
    public function setIsSystemHostname(?bool $value): void {
        $this->isSystemHostname = $value;
    }

    /**
     * Sets the Value property value. The hostname value for the domain name
     * @param string|null $value Value to set for the Value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
