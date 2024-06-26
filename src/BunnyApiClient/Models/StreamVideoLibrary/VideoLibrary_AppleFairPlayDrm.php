<?php

namespace BunnyApiClient\Models\StreamVideoLibrary;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VideoLibrary_AppleFairPlayDrm implements AdditionalDataHolder, Parsable 
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
     * @var string|null $provider The Provider property
    */
    private ?string $provider = null;
    
    /**
     * Instantiates a new VideoLibrary_AppleFairPlayDrm and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoLibrary_AppleFairPlayDrm
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoLibrary_AppleFairPlayDrm {
        return new VideoLibrary_AppleFairPlayDrm();
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
            'Provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
        ];
    }

    /**
     * Gets the Provider property value. The Provider property
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('CertificateExpirationDate', $this->getCertificateExpirationDate());
        $writer->writeIntegerValue('CertificateId', $this->getCertificateId());
        $writer->writeBooleanValue('Enabled', $this->getEnabled());
        $writer->writeStringValue('Provider', $this->getProvider());
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
     * Sets the Provider property value. The Provider property
     * @param string|null $value Value to set for the Provider property.
    */
    public function setProvider(?string $value): void {
        $this->provider = $value;
    }

}
