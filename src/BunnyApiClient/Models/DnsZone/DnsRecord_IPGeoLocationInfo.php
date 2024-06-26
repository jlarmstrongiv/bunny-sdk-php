<?php

namespace BunnyApiClient\Models\DnsZone;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DnsRecord_IPGeoLocationInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $aSN The ASN property
    */
    private ?int $aSN = null;
    
    /**
     * @var string|null $city The City property
    */
    private ?string $city = null;
    
    /**
     * @var string|null $country The Country property
    */
    private ?string $country = null;
    
    /**
     * @var string|null $countryCode The CountryCode property
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $organizationName The OrganizationName property
    */
    private ?string $organizationName = null;
    
    /**
     * Instantiates a new DnsRecord_IPGeoLocationInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DnsRecord_IPGeoLocationInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DnsRecord_IPGeoLocationInfo {
        return new DnsRecord_IPGeoLocationInfo();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the ASN property value. The ASN property
     * @return int|null
    */
    public function getASN(): ?int {
        return $this->aSN;
    }

    /**
     * Gets the City property value. The City property
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the Country property value. The Country property
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the CountryCode property value. The CountryCode property
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->countryCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ASN' => fn(ParseNode $n) => $o->setASN($n->getIntegerValue()),
            'City' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'Country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'CountryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'OrganizationName' => fn(ParseNode $n) => $o->setOrganizationName($n->getStringValue()),
        ];
    }

    /**
     * Gets the OrganizationName property value. The OrganizationName property
     * @return string|null
    */
    public function getOrganizationName(): ?string {
        return $this->organizationName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('ASN', $this->getASN());
        $writer->writeStringValue('City', $this->getCity());
        $writer->writeStringValue('Country', $this->getCountry());
        $writer->writeStringValue('CountryCode', $this->getCountryCode());
        $writer->writeStringValue('OrganizationName', $this->getOrganizationName());
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
     * Sets the ASN property value. The ASN property
     * @param int|null $value Value to set for the ASN property.
    */
    public function setASN(?int $value): void {
        $this->aSN = $value;
    }

    /**
     * Sets the City property value. The City property
     * @param string|null $value Value to set for the City property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the Country property value. The Country property
     * @param string|null $value Value to set for the Country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the CountryCode property value. The CountryCode property
     * @param string|null $value Value to set for the CountryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the OrganizationName property value. The OrganizationName property
     * @param string|null $value Value to set for the OrganizationName property.
    */
    public function setOrganizationName(?string $value): void {
        $this->organizationName = $value;
    }

}
