<?php

namespace BunnyApiClient\Pullzone\Item\AddCertificate;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddCertificatePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $certificate The Base64Url encoded binary data of the certificate file
    */
    private ?string $certificate = null;
    
    /**
     * @var string|null $certificateKey The Base64Url encoded binary data of the certificate key file
    */
    private ?string $certificateKey = null;
    
    /**
     * @var string|null $hostname The hostname to which the certificate will be added
    */
    private ?string $hostname = null;
    
    /**
     * Instantiates a new AddCertificatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddCertificatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddCertificatePostRequestBody {
        return new AddCertificatePostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the Certificate property value. The Base64Url encoded binary data of the certificate file
     * @return string|null
    */
    public function getCertificate(): ?string {
        return $this->certificate;
    }

    /**
     * Gets the CertificateKey property value. The Base64Url encoded binary data of the certificate key file
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
            'Hostname' => fn(ParseNode $n) => $o->setHostname($n->getStringValue()),
        ];
    }

    /**
     * Gets the Hostname property value. The hostname to which the certificate will be added
     * @return string|null
    */
    public function getHostname(): ?string {
        return $this->hostname;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Certificate', $this->getCertificate());
        $writer->writeStringValue('CertificateKey', $this->getCertificateKey());
        $writer->writeStringValue('Hostname', $this->getHostname());
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
     * Sets the Certificate property value. The Base64Url encoded binary data of the certificate file
     * @param string|null $value Value to set for the Certificate property.
    */
    public function setCertificate(?string $value): void {
        $this->certificate = $value;
    }

    /**
     * Sets the CertificateKey property value. The Base64Url encoded binary data of the certificate key file
     * @param string|null $value Value to set for the CertificateKey property.
    */
    public function setCertificateKey(?string $value): void {
        $this->certificateKey = $value;
    }

    /**
     * Sets the Hostname property value. The hostname to which the certificate will be added
     * @param string|null $value Value to set for the Hostname property.
    */
    public function setHostname(?string $value): void {
        $this->hostname = $value;
    }

}
