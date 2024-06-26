<?php

namespace BunnyApiClient\Videolibrary\Item;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VideolibraryPostRequestBody_GoogleWidevineDrm implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $certificateExpirationDate The CertificateExpirationDate property
    */
    private ?DateTime $certificateExpirationDate = null;
    
    /**
     * @var int|null $certificateId The CertificateId property
    */
    private ?int $certificateId = null;
    
    /**
     * @var bool|null $enabled The Enabled property
    */
    private ?bool $enabled = null;
    
    /**
     * @var float|null $minClientSecurityLevel The MinClientSecurityLevel property
    */
    private ?float $minClientSecurityLevel = null;
    
    /**
     * @var string|null $provider The Provider property
    */
    private ?string $provider = null;
    
    /**
     * @var bool|null $sdOnlyForL3 The SdOnlyForL3 property
    */
    private ?bool $sdOnlyForL3 = null;
    
    /**
     * Instantiates a new VideolibraryPostRequestBody_GoogleWidevineDrm and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideolibraryPostRequestBody_GoogleWidevineDrm
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideolibraryPostRequestBody_GoogleWidevineDrm {
        return new VideolibraryPostRequestBody_GoogleWidevineDrm();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the CertificateExpirationDate property value. The CertificateExpirationDate property
     * @return DateTime|null
    */
    public function getCertificateExpirationDate(): ?DateTime {
        return $this->certificateExpirationDate;
    }

    /**
     * Gets the CertificateId property value. The CertificateId property
     * @return int|null
    */
    public function getCertificateId(): ?int {
        return $this->certificateId;
    }

    /**
     * Gets the Enabled property value. The Enabled property
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'CertificateExpirationDate' => fn(ParseNode $n) => $o->setCertificateExpirationDate($n->getDateTimeValue()),
            'CertificateId' => fn(ParseNode $n) => $o->setCertificateId($n->getIntegerValue()),
            'Enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'MinClientSecurityLevel' => fn(ParseNode $n) => $o->setMinClientSecurityLevel($n->getFloatValue()),
            'Provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
            'SdOnlyForL3' => fn(ParseNode $n) => $o->setSdOnlyForL3($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the MinClientSecurityLevel property value. The MinClientSecurityLevel property
     * @return float|null
    */
    public function getMinClientSecurityLevel(): ?float {
        return $this->minClientSecurityLevel;
    }

    /**
     * Gets the Provider property value. The Provider property
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Gets the SdOnlyForL3 property value. The SdOnlyForL3 property
     * @return bool|null
    */
    public function getSdOnlyForL3(): ?bool {
        return $this->sdOnlyForL3;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('CertificateExpirationDate', $this->getCertificateExpirationDate());
        $writer->writeIntegerValue('CertificateId', $this->getCertificateId());
        $writer->writeBooleanValue('Enabled', $this->getEnabled());
        $writer->writeFloatValue('MinClientSecurityLevel', $this->getMinClientSecurityLevel());
        $writer->writeStringValue('Provider', $this->getProvider());
        $writer->writeBooleanValue('SdOnlyForL3', $this->getSdOnlyForL3());
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
     * Sets the CertificateExpirationDate property value. The CertificateExpirationDate property
     * @param DateTime|null $value Value to set for the CertificateExpirationDate property.
    */
    public function setCertificateExpirationDate(?DateTime $value): void {
        $this->certificateExpirationDate = $value;
    }

    /**
     * Sets the CertificateId property value. The CertificateId property
     * @param int|null $value Value to set for the CertificateId property.
    */
    public function setCertificateId(?int $value): void {
        $this->certificateId = $value;
    }

    /**
     * Sets the Enabled property value. The Enabled property
     * @param bool|null $value Value to set for the Enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the MinClientSecurityLevel property value. The MinClientSecurityLevel property
     * @param float|null $value Value to set for the MinClientSecurityLevel property.
    */
    public function setMinClientSecurityLevel(?float $value): void {
        $this->minClientSecurityLevel = $value;
    }

    /**
     * Sets the Provider property value. The Provider property
     * @param string|null $value Value to set for the Provider property.
    */
    public function setProvider(?string $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the SdOnlyForL3 property value. The SdOnlyForL3 property
     * @param bool|null $value Value to set for the SdOnlyForL3 property.
    */
    public function setSdOnlyForL3(?bool $value): void {
        $this->sdOnlyForL3 = $value;
    }

}
