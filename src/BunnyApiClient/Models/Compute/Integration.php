<?php

namespace BunnyApiClient\Models\Compute;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Integration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Integration_DeployConfiguration|null $deployConfiguration The DeployConfiguration property
    */
    private ?Integration_DeployConfiguration $deployConfiguration = null;
    
    /**
     * @var int|null $integrationId The IntegrationId property
    */
    private ?int $integrationId = null;
    
    /**
     * @var Integration_RepositorySettings|null $repositorySettings The RepositorySettings property
    */
    private ?Integration_RepositorySettings $repositorySettings = null;
    
    /**
     * Instantiates a new Integration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Integration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Integration {
        return new Integration();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the DeployConfiguration property value. The DeployConfiguration property
     * @return Integration_DeployConfiguration|null
    */
    public function getDeployConfiguration(): ?Integration_DeployConfiguration {
        return $this->deployConfiguration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'DeployConfiguration' => fn(ParseNode $n) => $o->setDeployConfiguration($n->getObjectValue([Integration_DeployConfiguration::class, 'createFromDiscriminatorValue'])),
            'IntegrationId' => fn(ParseNode $n) => $o->setIntegrationId($n->getIntegerValue()),
            'RepositorySettings' => fn(ParseNode $n) => $o->setRepositorySettings($n->getObjectValue([Integration_RepositorySettings::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the IntegrationId property value. The IntegrationId property
     * @return int|null
    */
    public function getIntegrationId(): ?int {
        return $this->integrationId;
    }

    /**
     * Gets the RepositorySettings property value. The RepositorySettings property
     * @return Integration_RepositorySettings|null
    */
    public function getRepositorySettings(): ?Integration_RepositorySettings {
        return $this->repositorySettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('IntegrationId', $this->getIntegrationId());
        $writer->writeObjectValue('RepositorySettings', $this->getRepositorySettings());
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
     * Sets the DeployConfiguration property value. The DeployConfiguration property
     * @param Integration_DeployConfiguration|null $value Value to set for the DeployConfiguration property.
    */
    public function setDeployConfiguration(?Integration_DeployConfiguration $value): void {
        $this->deployConfiguration = $value;
    }

    /**
     * Sets the IntegrationId property value. The IntegrationId property
     * @param int|null $value Value to set for the IntegrationId property.
    */
    public function setIntegrationId(?int $value): void {
        $this->integrationId = $value;
    }

    /**
     * Sets the RepositorySettings property value. The RepositorySettings property
     * @param Integration_RepositorySettings|null $value Value to set for the RepositorySettings property.
    */
    public function setRepositorySettings(?Integration_RepositorySettings $value): void {
        $this->repositorySettings = $value;
    }

}
