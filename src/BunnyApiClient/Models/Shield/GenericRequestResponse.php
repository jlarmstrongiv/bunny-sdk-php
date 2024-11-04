<?php

namespace BunnyApiClient\Models\Shield;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GenericRequestResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $errorKey The errorKey property
    */
    private ?string $errorKey = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var float|null $statusCode The statusCode property
    */
    private ?float $statusCode = null;
    
    /**
     * @var bool|null $success The success property
    */
    private ?bool $success = null;
    
    /**
     * Instantiates a new GenericRequestResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GenericRequestResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GenericRequestResponse {
        return new GenericRequestResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the errorKey property value. The errorKey property
     * @return string|null
    */
    public function getErrorKey(): ?string {
        return $this->errorKey;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errorKey' => fn(ParseNode $n) => $o->setErrorKey($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getFloatValue()),
            'success' => fn(ParseNode $n) => $o->setSuccess($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the statusCode property value. The statusCode property
     * @return float|null
    */
    public function getStatusCode(): ?float {
        return $this->statusCode;
    }

    /**
     * Gets the success property value. The success property
     * @return bool|null
    */
    public function getSuccess(): ?bool {
        return $this->success;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('errorKey', $this->getErrorKey());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeFloatValue('statusCode', $this->getStatusCode());
        $writer->writeBooleanValue('success', $this->getSuccess());
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
     * Sets the errorKey property value. The errorKey property
     * @param string|null $value Value to set for the errorKey property.
    */
    public function setErrorKey(?string $value): void {
        $this->errorKey = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the statusCode property value. The statusCode property
     * @param float|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?float $value): void {
        $this->statusCode = $value;
    }

    /**
     * Sets the success property value. The success property
     * @param bool|null $value Value to set for the success property.
    */
    public function setSuccess(?bool $value): void {
        $this->success = $value;
    }

}
