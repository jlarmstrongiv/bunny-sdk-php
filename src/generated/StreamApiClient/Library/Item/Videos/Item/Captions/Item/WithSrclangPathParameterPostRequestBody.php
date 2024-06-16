<?php

namespace StreamApiClient\Library\Item\Videos\Item\Captions\Item;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WithSrclangPathParameterPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $captionsFile Base64 encoded captions file
    */
    private ?string $captionsFile = null;
    
    /**
     * @var string|null $label The text description label for the caption
    */
    private ?string $label = null;
    
    /**
     * @var string|null $srclang The unique srclang shortcode for the caption
    */
    private ?string $srclang = null;
    
    /**
     * Instantiates a new WithSrclangPathParameterPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WithSrclangPathParameterPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WithSrclangPathParameterPostRequestBody {
        return new WithSrclangPathParameterPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the captionsFile property value. Base64 encoded captions file
     * @return string|null
    */
    public function getCaptionsFile(): ?string {
        return $this->captionsFile;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'captionsFile' => fn(ParseNode $n) => $o->setCaptionsFile($n->getStringValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'srclang' => fn(ParseNode $n) => $o->setSrclang($n->getStringValue()),
        ];
    }

    /**
     * Gets the label property value. The text description label for the caption
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the srclang property value. The unique srclang shortcode for the caption
     * @return string|null
    */
    public function getSrclang(): ?string {
        return $this->srclang;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('captionsFile', $this->getCaptionsFile());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('srclang', $this->getSrclang());
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
     * Sets the captionsFile property value. Base64 encoded captions file
     * @param string|null $value Value to set for the captionsFile property.
    */
    public function setCaptionsFile(?string $value): void {
        $this->captionsFile = $value;
    }

    /**
     * Sets the label property value. The text description label for the caption
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the srclang property value. The unique srclang shortcode for the caption
     * @param string|null $value Value to set for the srclang property.
    */
    public function setSrclang(?string $value): void {
        $this->srclang = $value;
    }

}
