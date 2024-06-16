<?php

namespace BunnyApiClient\Models\DnsZone;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DnsRecord_GeolocationInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $city The City property
    */
    private ?string $city = null;
    
    /**
     * @var string|null $country The Country property
    */
    private ?string $country = null;
    
    /**
     * @var float|null $latitude The Latitude property
    */
    private ?float $latitude = null;
    
    /**
     * @var float|null $longitude The Longitude property
    */
    private ?float $longitude = null;
    
    /**
     * Instantiates a new DnsRecord_GeolocationInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DnsRecord_GeolocationInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DnsRecord_GeolocationInfo {
        return new DnsRecord_GeolocationInfo();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'City' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'Country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'Latitude' => fn(ParseNode $n) => $o->setLatitude($n->getFloatValue()),
            'Longitude' => fn(ParseNode $n) => $o->setLongitude($n->getFloatValue()),
        ];
    }

    /**
     * Gets the Latitude property value. The Latitude property
     * @return float|null
    */
    public function getLatitude(): ?float {
        return $this->latitude;
    }

    /**
     * Gets the Longitude property value. The Longitude property
     * @return float|null
    */
    public function getLongitude(): ?float {
        return $this->longitude;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('City', $this->getCity());
        $writer->writeStringValue('Country', $this->getCountry());
        $writer->writeFloatValue('Latitude', $this->getLatitude());
        $writer->writeFloatValue('Longitude', $this->getLongitude());
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
     * Sets the Latitude property value. The Latitude property
     * @param float|null $value Value to set for the Latitude property.
    */
    public function setLatitude(?float $value): void {
        $this->latitude = $value;
    }

    /**
     * Sets the Longitude property value. The Longitude property
     * @param float|null $value Value to set for the Longitude property.
    */
    public function setLongitude(?float $value): void {
        $this->longitude = $value;
    }

}
