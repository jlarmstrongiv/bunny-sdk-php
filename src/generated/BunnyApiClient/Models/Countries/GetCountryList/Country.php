<?php

namespace BunnyApiClient\Models\Countries\GetCountryList;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Country implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $flagUrl The FlagUrl property
    */
    private ?string $flagUrl = null;
    
    /**
     * @var bool|null $isEU The IsEU property
    */
    private ?bool $isEU = null;
    
    /**
     * @var string|null $isoCode The IsoCode property
    */
    private ?string $isoCode = null;
    
    /**
     * @var string|null $name The Name property
    */
    private ?string $name = null;
    
    /**
     * @var array<string>|null $popList The PopList property
    */
    private ?array $popList = null;
    
    /**
     * @var string|null $taxPrefix The TaxPrefix property
    */
    private ?string $taxPrefix = null;
    
    /**
     * @var int|null $taxRate The TaxRate property
    */
    private ?int $taxRate = null;
    
    /**
     * Instantiates a new Country and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Country
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Country {
        return new Country();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'FlagUrl' => fn(ParseNode $n) => $o->setFlagUrl($n->getStringValue()),
            'IsEU' => fn(ParseNode $n) => $o->setIsEU($n->getBooleanValue()),
            'IsoCode' => fn(ParseNode $n) => $o->setIsoCode($n->getStringValue()),
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'PopList' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPopList($val);
            },
            'TaxPrefix' => fn(ParseNode $n) => $o->setTaxPrefix($n->getStringValue()),
            'TaxRate' => fn(ParseNode $n) => $o->setTaxRate($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the FlagUrl property value. The FlagUrl property
     * @return string|null
    */
    public function getFlagUrl(): ?string {
        return $this->flagUrl;
    }

    /**
     * Gets the IsEU property value. The IsEU property
     * @return bool|null
    */
    public function getIsEU(): ?bool {
        return $this->isEU;
    }

    /**
     * Gets the IsoCode property value. The IsoCode property
     * @return string|null
    */
    public function getIsoCode(): ?string {
        return $this->isoCode;
    }

    /**
     * Gets the Name property value. The Name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the PopList property value. The PopList property
     * @return array<string>|null
    */
    public function getPopList(): ?array {
        return $this->popList;
    }

    /**
     * Gets the TaxPrefix property value. The TaxPrefix property
     * @return string|null
    */
    public function getTaxPrefix(): ?string {
        return $this->taxPrefix;
    }

    /**
     * Gets the TaxRate property value. The TaxRate property
     * @return int|null
    */
    public function getTaxRate(): ?int {
        return $this->taxRate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('FlagUrl', $this->getFlagUrl());
        $writer->writeBooleanValue('IsEU', $this->getIsEU());
        $writer->writeStringValue('IsoCode', $this->getIsoCode());
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('PopList', $this->getPopList());
        $writer->writeStringValue('TaxPrefix', $this->getTaxPrefix());
        $writer->writeIntegerValue('TaxRate', $this->getTaxRate());
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
     * Sets the FlagUrl property value. The FlagUrl property
     * @param string|null $value Value to set for the FlagUrl property.
    */
    public function setFlagUrl(?string $value): void {
        $this->flagUrl = $value;
    }

    /**
     * Sets the IsEU property value. The IsEU property
     * @param bool|null $value Value to set for the IsEU property.
    */
    public function setIsEU(?bool $value): void {
        $this->isEU = $value;
    }

    /**
     * Sets the IsoCode property value. The IsoCode property
     * @param string|null $value Value to set for the IsoCode property.
    */
    public function setIsoCode(?string $value): void {
        $this->isoCode = $value;
    }

    /**
     * Sets the Name property value. The Name property
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the PopList property value. The PopList property
     * @param array<string>|null $value Value to set for the PopList property.
    */
    public function setPopList(?array $value): void {
        $this->popList = $value;
    }

    /**
     * Sets the TaxPrefix property value. The TaxPrefix property
     * @param string|null $value Value to set for the TaxPrefix property.
    */
    public function setTaxPrefix(?string $value): void {
        $this->taxPrefix = $value;
    }

    /**
     * Sets the TaxRate property value. The TaxRate property
     * @param int|null $value Value to set for the TaxRate property.
    */
    public function setTaxRate(?int $value): void {
        $this->taxRate = $value;
    }

}
