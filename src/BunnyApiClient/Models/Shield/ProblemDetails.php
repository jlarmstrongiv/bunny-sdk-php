<?php

namespace BunnyApiClient\Models\Shield;

use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProblemDetails extends ApiException implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $detail The detail property
    */
    private ?string $detail = null;
    
    /**
     * @var string|null $instance The instance property
    */
    private ?string $instance = null;
    
    /**
     * @var int|null $status The status property
    */
    private ?int $status = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new ProblemDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProblemDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProblemDetails {
        return new ProblemDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the detail property value. The detail property
     * @return string|null
    */
    public function getDetail(): ?string {
        return $this->detail;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getStringValue()),
            'instance' => fn(ParseNode $n) => $o->setInstance($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getIntegerValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the instance property value. The instance property
     * @return string|null
    */
    public function getInstance(): ?string {
        return $this->instance;
    }

    /**
     * The primary error message.
     * @return string
    */
    public function getPrimaryErrorMessage(): string {
        return parent::getMessage();
    }

    /**
     * Gets the status property value. The status property
     * @return int|null
    */
    public function getStatus(): ?int {
        return $this->status;
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('detail', $this->getDetail());
        $writer->writeStringValue('instance', $this->getInstance());
        $writer->writeIntegerValue('status', $this->getStatus());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('type', $this->getType());
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
     * Sets the detail property value. The detail property
     * @param string|null $value Value to set for the detail property.
    */
    public function setDetail(?string $value): void {
        $this->detail = $value;
    }

    /**
     * Sets the instance property value. The instance property
     * @param string|null $value Value to set for the instance property.
    */
    public function setInstance(?string $value): void {
        $this->instance = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param int|null $value Value to set for the status property.
    */
    public function setStatus(?int $value): void {
        $this->status = $value;
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
