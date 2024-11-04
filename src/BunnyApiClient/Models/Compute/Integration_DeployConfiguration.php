<?php

namespace BunnyApiClient\Models\Compute;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Integration_DeployConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $branch The Branch property
    */
    private ?string $branch = null;
    
    /**
     * @var string|null $buildCommand The BuildCommand property
    */
    private ?string $buildCommand = null;
    
    /**
     * @var bool|null $createWorkflow The CreateWorkflow property
    */
    private ?bool $createWorkflow = null;
    
    /**
     * @var string|null $entryFile The EntryFile property
    */
    private ?string $entryFile = null;
    
    /**
     * @var string|null $installCommand The InstallCommand property
    */
    private ?string $installCommand = null;
    
    /**
     * Instantiates a new Integration_DeployConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Integration_DeployConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Integration_DeployConfiguration {
        return new Integration_DeployConfiguration();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the Branch property value. The Branch property
     * @return string|null
    */
    public function getBranch(): ?string {
        return $this->branch;
    }

    /**
     * Gets the BuildCommand property value. The BuildCommand property
     * @return string|null
    */
    public function getBuildCommand(): ?string {
        return $this->buildCommand;
    }

    /**
     * Gets the CreateWorkflow property value. The CreateWorkflow property
     * @return bool|null
    */
    public function getCreateWorkflow(): ?bool {
        return $this->createWorkflow;
    }

    /**
     * Gets the EntryFile property value. The EntryFile property
     * @return string|null
    */
    public function getEntryFile(): ?string {
        return $this->entryFile;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Branch' => fn(ParseNode $n) => $o->setBranch($n->getStringValue()),
            'BuildCommand' => fn(ParseNode $n) => $o->setBuildCommand($n->getStringValue()),
            'CreateWorkflow' => fn(ParseNode $n) => $o->setCreateWorkflow($n->getBooleanValue()),
            'EntryFile' => fn(ParseNode $n) => $o->setEntryFile($n->getStringValue()),
            'InstallCommand' => fn(ParseNode $n) => $o->setInstallCommand($n->getStringValue()),
        ];
    }

    /**
     * Gets the InstallCommand property value. The InstallCommand property
     * @return string|null
    */
    public function getInstallCommand(): ?string {
        return $this->installCommand;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Branch', $this->getBranch());
        $writer->writeStringValue('BuildCommand', $this->getBuildCommand());
        $writer->writeBooleanValue('CreateWorkflow', $this->getCreateWorkflow());
        $writer->writeStringValue('EntryFile', $this->getEntryFile());
        $writer->writeStringValue('InstallCommand', $this->getInstallCommand());
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
     * Sets the Branch property value. The Branch property
     * @param string|null $value Value to set for the Branch property.
    */
    public function setBranch(?string $value): void {
        $this->branch = $value;
    }

    /**
     * Sets the BuildCommand property value. The BuildCommand property
     * @param string|null $value Value to set for the BuildCommand property.
    */
    public function setBuildCommand(?string $value): void {
        $this->buildCommand = $value;
    }

    /**
     * Sets the CreateWorkflow property value. The CreateWorkflow property
     * @param bool|null $value Value to set for the CreateWorkflow property.
    */
    public function setCreateWorkflow(?bool $value): void {
        $this->createWorkflow = $value;
    }

    /**
     * Sets the EntryFile property value. The EntryFile property
     * @param string|null $value Value to set for the EntryFile property.
    */
    public function setEntryFile(?string $value): void {
        $this->entryFile = $value;
    }

    /**
     * Sets the InstallCommand property value. The InstallCommand property
     * @param string|null $value Value to set for the InstallCommand property.
    */
    public function setInstallCommand(?string $value): void {
        $this->installCommand = $value;
    }

}
