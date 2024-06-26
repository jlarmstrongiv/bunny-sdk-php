<?php

namespace BunnyApiClient\Models\PullZone;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BunnyAiImageBlueprint_Properties implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $cfg The Cfg property
    */
    private ?string $cfg = null;
    
    /**
     * @var string|null $negativePrompt The NegativePrompt property
    */
    private ?string $negativePrompt = null;
    
    /**
     * @var string|null $postPrompt The PostPrompt property
    */
    private ?string $postPrompt = null;
    
    /**
     * @var string|null $prePrompt The PrePrompt property
    */
    private ?string $prePrompt = null;
    
    /**
     * @var string|null $steps The Steps property
    */
    private ?string $steps = null;
    
    /**
     * Instantiates a new BunnyAiImageBlueprint_Properties and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BunnyAiImageBlueprint_Properties
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BunnyAiImageBlueprint_Properties {
        return new BunnyAiImageBlueprint_Properties();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the Cfg property value. The Cfg property
     * @return string|null
    */
    public function getCfg(): ?string {
        return $this->cfg;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Cfg' => fn(ParseNode $n) => $o->setCfg($n->getStringValue()),
            'NegativePrompt' => fn(ParseNode $n) => $o->setNegativePrompt($n->getStringValue()),
            'PostPrompt' => fn(ParseNode $n) => $o->setPostPrompt($n->getStringValue()),
            'PrePrompt' => fn(ParseNode $n) => $o->setPrePrompt($n->getStringValue()),
            'Steps' => fn(ParseNode $n) => $o->setSteps($n->getStringValue()),
        ];
    }

    /**
     * Gets the NegativePrompt property value. The NegativePrompt property
     * @return string|null
    */
    public function getNegativePrompt(): ?string {
        return $this->negativePrompt;
    }

    /**
     * Gets the PostPrompt property value. The PostPrompt property
     * @return string|null
    */
    public function getPostPrompt(): ?string {
        return $this->postPrompt;
    }

    /**
     * Gets the PrePrompt property value. The PrePrompt property
     * @return string|null
    */
    public function getPrePrompt(): ?string {
        return $this->prePrompt;
    }

    /**
     * Gets the Steps property value. The Steps property
     * @return string|null
    */
    public function getSteps(): ?string {
        return $this->steps;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Cfg', $this->getCfg());
        $writer->writeStringValue('NegativePrompt', $this->getNegativePrompt());
        $writer->writeStringValue('PostPrompt', $this->getPostPrompt());
        $writer->writeStringValue('PrePrompt', $this->getPrePrompt());
        $writer->writeStringValue('Steps', $this->getSteps());
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
     * Sets the Cfg property value. The Cfg property
     * @param string|null $value Value to set for the Cfg property.
    */
    public function setCfg(?string $value): void {
        $this->cfg = $value;
    }

    /**
     * Sets the NegativePrompt property value. The NegativePrompt property
     * @param string|null $value Value to set for the NegativePrompt property.
    */
    public function setNegativePrompt(?string $value): void {
        $this->negativePrompt = $value;
    }

    /**
     * Sets the PostPrompt property value. The PostPrompt property
     * @param string|null $value Value to set for the PostPrompt property.
    */
    public function setPostPrompt(?string $value): void {
        $this->postPrompt = $value;
    }

    /**
     * Sets the PrePrompt property value. The PrePrompt property
     * @param string|null $value Value to set for the PrePrompt property.
    */
    public function setPrePrompt(?string $value): void {
        $this->prePrompt = $value;
    }

    /**
     * Sets the Steps property value. The Steps property
     * @param string|null $value Value to set for the Steps property.
    */
    public function setSteps(?string $value): void {
        $this->steps = $value;
    }

}
