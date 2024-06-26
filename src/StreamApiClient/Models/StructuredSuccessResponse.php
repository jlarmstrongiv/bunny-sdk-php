<?php

namespace StreamApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The request has succeeded.
*/
class StructuredSuccessResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $message Response message description
    */
    private ?string $message = null;
    
    /**
     * @var bool|null $success Determines if the request was successful
    */
    private ?bool $success = null;
    
    /**
     * Instantiates a new StructuredSuccessResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StructuredSuccessResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StructuredSuccessResponse {
        return new StructuredSuccessResponse();
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
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'success' => fn(ParseNode $n) => $o->setSuccess($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the message property value. Response message description
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the success property value. Determines if the request was successful
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
        $writer->writeStringValue('message', $this->getMessage());
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
     * Sets the message property value. Response message description
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the success property value. Determines if the request was successful
     * @param bool|null $value Value to set for the success property.
    */
    public function setSuccess(?bool $value): void {
        $this->success = $value;
    }

}
