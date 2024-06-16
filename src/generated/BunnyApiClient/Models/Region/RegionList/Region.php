<?php

namespace BunnyApiClient\Models\Region\RegionList;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Region implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $allowLatencyRouting The AllowLatencyRouting property
    */
    private ?bool $allowLatencyRouting = null;
    
    /**
     * @var string|null $continentCode The ContinentCode property
    */
    private ?string $continentCode = null;
    
    /**
     * @var string|null $countryCode The CountryCode property
    */
    private ?string $countryCode = null;
    
    /**
     * @var int|null $id The Id property
    */
    private ?int $id = null;
    
    /**
     * @var float|null $latitude The Latitude property
    */
    private ?float $latitude = null;
    
    /**
     * @var float|null $longitude The Longitude property
    */
    private ?float $longitude = null;
    
    /**
     * @var string|null $name The Name property
    */
    private ?string $name = null;
    
    /**
     * @var float|null $pricePerGigabyte The PricePerGigabyte property
    */
    private ?float $pricePerGigabyte = null;
    
    /**
     * @var string|null $regionCode The RegionCode property
    */
    private ?string $regionCode = null;
    
    /**
     * Instantiates a new Region and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Region
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Region {
        return new Region();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the AllowLatencyRouting property value. The AllowLatencyRouting property
     * @return bool|null
    */
    public function getAllowLatencyRouting(): ?bool {
        return $this->allowLatencyRouting;
    }

    /**
     * Gets the ContinentCode property value. The ContinentCode property
     * @return string|null
    */
    public function getContinentCode(): ?string {
        return $this->continentCode;
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
            'AllowLatencyRouting' => fn(ParseNode $n) => $o->setAllowLatencyRouting($n->getBooleanValue()),
            'ContinentCode' => fn(ParseNode $n) => $o->setContinentCode($n->getStringValue()),
            'CountryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'Id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'Latitude' => fn(ParseNode $n) => $o->setLatitude($n->getFloatValue()),
            'Longitude' => fn(ParseNode $n) => $o->setLongitude($n->getFloatValue()),
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'PricePerGigabyte' => fn(ParseNode $n) => $o->setPricePerGigabyte($n->getFloatValue()),
            'RegionCode' => fn(ParseNode $n) => $o->setRegionCode($n->getStringValue()),
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
     * Gets the Name property value. The Name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the PricePerGigabyte property value. The PricePerGigabyte property
     * @return float|null
    */
    public function getPricePerGigabyte(): ?float {
        return $this->pricePerGigabyte;
    }

    /**
     * Gets the RegionCode property value. The RegionCode property
     * @return string|null
    */
    public function getRegionCode(): ?string {
        return $this->regionCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('AllowLatencyRouting', $this->getAllowLatencyRouting());
        $writer->writeStringValue('ContinentCode', $this->getContinentCode());
        $writer->writeStringValue('CountryCode', $this->getCountryCode());
        $writer->writeIntegerValue('Id', $this->getId());
        $writer->writeFloatValue('Latitude', $this->getLatitude());
        $writer->writeFloatValue('Longitude', $this->getLongitude());
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeFloatValue('PricePerGigabyte', $this->getPricePerGigabyte());
        $writer->writeStringValue('RegionCode', $this->getRegionCode());
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
     * Sets the AllowLatencyRouting property value. The AllowLatencyRouting property
     * @param bool|null $value Value to set for the AllowLatencyRouting property.
    */
    public function setAllowLatencyRouting(?bool $value): void {
        $this->allowLatencyRouting = $value;
    }

    /**
     * Sets the ContinentCode property value. The ContinentCode property
     * @param string|null $value Value to set for the ContinentCode property.
    */
    public function setContinentCode(?string $value): void {
        $this->continentCode = $value;
    }

    /**
     * Sets the CountryCode property value. The CountryCode property
     * @param string|null $value Value to set for the CountryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the Id property value. The Id property
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
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

    /**
     * Sets the Name property value. The Name property
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the PricePerGigabyte property value. The PricePerGigabyte property
     * @param float|null $value Value to set for the PricePerGigabyte property.
    */
    public function setPricePerGigabyte(?float $value): void {
        $this->pricePerGigabyte = $value;
    }

    /**
     * Sets the RegionCode property value. The RegionCode property
     * @param string|null $value Value to set for the RegionCode property.
    */
    public function setRegionCode(?string $value): void {
        $this->regionCode = $value;
    }

}
