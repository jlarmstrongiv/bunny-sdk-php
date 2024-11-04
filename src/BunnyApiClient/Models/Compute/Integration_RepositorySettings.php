<?php

namespace BunnyApiClient\Models\Compute;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Integration_RepositorySettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $escapedPrivate The Private property
    */
    private ?bool $escapedPrivate = null;
    
    /**
     * @var int|null $id The Id property
    */
    private ?int $id = null;
    
    /**
     * @var string|null $name The Name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $templateUrl The TemplateUrl property
    */
    private ?string $templateUrl = null;
    
    /**
     * Instantiates a new Integration_RepositorySettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Integration_RepositorySettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Integration_RepositorySettings {
        return new Integration_RepositorySettings();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the Private property value. The Private property
     * @return bool|null
    */
    public function getEscapedPrivate(): ?bool {
        return $this->escapedPrivate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Private' => fn(ParseNode $n) => $o->setEscapedPrivate($n->getBooleanValue()),
            'Id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'TemplateUrl' => fn(ParseNode $n) => $o->setTemplateUrl($n->getStringValue()),
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
     * Gets the Name property value. The Name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the TemplateUrl property value. The TemplateUrl property
     * @return string|null
    */
    public function getTemplateUrl(): ?string {
        return $this->templateUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('Private', $this->getEscapedPrivate());
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeStringValue('TemplateUrl', $this->getTemplateUrl());
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
     * Sets the Private property value. The Private property
     * @param bool|null $value Value to set for the Private property.
    */
    public function setEscapedPrivate(?bool $value): void {
        $this->escapedPrivate = $value;
    }

    /**
     * Sets the Id property value. The Id property
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the Name property value. The Name property
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the TemplateUrl property value. The TemplateUrl property
     * @param string|null $value Value to set for the TemplateUrl property.
    */
    public function setTemplateUrl(?string $value): void {
        $this->templateUrl = $value;
    }

}
