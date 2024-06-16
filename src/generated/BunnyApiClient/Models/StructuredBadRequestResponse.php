<?php

namespace BunnyApiClient\Models;

use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The server could not understand the request due to invalid syntax.
*/
class StructuredBadRequestResponse extends ApiException implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $errorKey The ErrorKey property
    */
    private ?string $errorKey = null;
    
    /**
     * @var string|null $escapedMessage The Message property
    */
    private ?string $escapedMessage = null;
    
    /**
     * @var string|null $field The Field property
    */
    private ?string $field = null;
    
    /**
     * Instantiates a new StructuredBadRequestResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StructuredBadRequestResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StructuredBadRequestResponse {
        return new StructuredBadRequestResponse();
    }

    /**
     * Gets the Message property value. The Message property
     * @return string|null
    */
    public function escapedGetMessage(): ?string {
        return $this->escapedMessage;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the ErrorKey property value. The ErrorKey property
     * @return string|null
    */
    public function getErrorKey(): ?string {
        return $this->errorKey;
    }

    /**
     * Gets the Field property value. The Field property
     * @return string|null
    */
    public function getField(): ?string {
        return $this->field;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ErrorKey' => fn(ParseNode $n) => $o->setErrorKey($n->getStringValue()),
            'Message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'Field' => fn(ParseNode $n) => $o->setField($n->getStringValue()),
        ];
    }

    /**
     * The primary error message.
     * @return string
    */
    public function getPrimaryErrorMessage(): string {
        return parent::getMessage();
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('ErrorKey', $this->getErrorKey());
        $writer->writeStringValue('Message', $this->escapedGetMessage());
        $writer->writeStringValue('Field', $this->getField());
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
     * Sets the ErrorKey property value. The ErrorKey property
     * @param string|null $value Value to set for the ErrorKey property.
    */
    public function setErrorKey(?string $value): void {
        $this->errorKey = $value;
    }

    /**
     * Sets the Field property value. The Field property
     * @param string|null $value Value to set for the Field property.
    */
    public function setField(?string $value): void {
        $this->field = $value;
    }

    /**
     * Sets the Message property value. The Message property
     * @param string|null $value Value to set for the Message property.
    */
    public function setMessage(?string $value): void {
        $this->escapedMessage = $value;
    }

}
