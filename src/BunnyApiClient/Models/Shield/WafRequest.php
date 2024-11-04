<?php

namespace BunnyApiClient\Models\Shield;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WafRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $dateTime The dateTime property
    */
    private ?DateTime $dateTime = null;
    
    /**
     * @var float|null $requestCount The requestCount property
    */
    private ?float $requestCount = null;
    
    /**
     * Instantiates a new WafRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WafRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WafRequest {
        return new WafRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dateTime property value. The dateTime property
     * @return DateTime|null
    */
    public function getDateTime(): ?DateTime {
        return $this->dateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dateTime' => fn(ParseNode $n) => $o->setDateTime($n->getDateTimeValue()),
            'requestCount' => fn(ParseNode $n) => $o->setRequestCount($n->getFloatValue()),
        ];
    }

    /**
     * Gets the requestCount property value. The requestCount property
     * @return float|null
    */
    public function getRequestCount(): ?float {
        return $this->requestCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('dateTime', $this->getDateTime());
        $writer->writeFloatValue('requestCount', $this->getRequestCount());
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
     * Sets the dateTime property value. The dateTime property
     * @param DateTime|null $value Value to set for the dateTime property.
    */
    public function setDateTime(?DateTime $value): void {
        $this->dateTime = $value;
    }

    /**
     * Sets the requestCount property value. The requestCount property
     * @param float|null $value Value to set for the requestCount property.
    */
    public function setRequestCount(?float $value): void {
        $this->requestCount = $value;
    }

}
