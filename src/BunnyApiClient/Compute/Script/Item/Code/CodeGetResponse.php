<?php

namespace BunnyApiClient\Compute\Script\Item\Code;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CodeGetResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $code The Code property
    */
    private ?string $code = null;
    
    /**
     * @var DateTime|null $lastModified The LastModified property
    */
    private ?DateTime $lastModified = null;
    
    /**
     * Instantiates a new CodeGetResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CodeGetResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CodeGetResponse {
        return new CodeGetResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the Code property value. The Code property
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'LastModified' => fn(ParseNode $n) => $o->setLastModified($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the LastModified property value. The LastModified property
     * @return DateTime|null
    */
    public function getLastModified(): ?DateTime {
        return $this->lastModified;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Code', $this->getCode());
        $writer->writeDateTimeValue('LastModified', $this->getLastModified());
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
     * Sets the Code property value. The Code property
     * @param string|null $value Value to set for the Code property.
    */
    public function setCode(?string $value): void {
        $this->code = $value;
    }

    /**
     * Sets the LastModified property value. The LastModified property
     * @param DateTime|null $value Value to set for the LastModified property.
    */
    public function setLastModified(?DateTime $value): void {
        $this->lastModified = $value;
    }

}
