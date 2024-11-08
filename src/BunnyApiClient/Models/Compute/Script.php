<?php

namespace BunnyApiClient\Models\Compute;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Script implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $currentReleaseId The CurrentReleaseId property
    */
    private ?int $currentReleaseId = null;
    
    /**
     * @var string|null $defaultHostname The DefaultHostname property
    */
    private ?string $defaultHostname = null;
    
    /**
     * @var bool|null $deleted The Deleted property
    */
    private ?bool $deleted = null;
    
    /**
     * @var string|null $deploymentKey The DeploymentKey property
    */
    private ?string $deploymentKey = null;
    
    /**
     * @var array<EdgeScriptVariable>|null $edgeScriptVariables The EdgeScriptVariables property
    */
    private ?array $edgeScriptVariables = null;
    
    /**
     * @var int|null $id The Id property
    */
    private ?int $id = null;
    
    /**
     * @var Integration|null $integration The Integration property
    */
    private ?Integration $integration = null;
    
    /**
     * @var int|null $integrationId The IntegrationId property
    */
    private ?int $integrationId = null;
    
    /**
     * @var DateTime|null $lastModified The LastModified property
    */
    private ?DateTime $lastModified = null;
    
    /**
     * @var array<LinkedPullZone>|null $linkedPullZones The LinkedPullZones property
    */
    private ?array $linkedPullZones = null;
    
    /**
     * @var float|null $monthlyCost The MonthlyCost property
    */
    private ?float $monthlyCost = null;
    
    /**
     * @var int|null $monthlyCpuTime The MonthlyCpuTime property
    */
    private ?int $monthlyCpuTime = null;
    
    /**
     * @var int|null $monthlyRequestCount The MonthlyRequestCount property
    */
    private ?int $monthlyRequestCount = null;
    
    /**
     * @var string|null $name The Name property
    */
    private ?string $name = null;
    
    /**
     * @var int|null $repositoryId The RepositoryId property
    */
    private ?int $repositoryId = null;
    
    /**
     * @var float|null $scriptType The ScriptType property
    */
    private ?float $scriptType = null;
    
    /**
     * @var string|null $systemHostname The SystemHostname property
    */
    private ?string $systemHostname = null;
    
    /**
     * Instantiates a new Script and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Script
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Script {
        return new Script();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the CurrentReleaseId property value. The CurrentReleaseId property
     * @return int|null
    */
    public function getCurrentReleaseId(): ?int {
        return $this->currentReleaseId;
    }

    /**
     * Gets the DefaultHostname property value. The DefaultHostname property
     * @return string|null
    */
    public function getDefaultHostname(): ?string {
        return $this->defaultHostname;
    }

    /**
     * Gets the Deleted property value. The Deleted property
     * @return bool|null
    */
    public function getDeleted(): ?bool {
        return $this->deleted;
    }

    /**
     * Gets the DeploymentKey property value. The DeploymentKey property
     * @return string|null
    */
    public function getDeploymentKey(): ?string {
        return $this->deploymentKey;
    }

    /**
     * Gets the EdgeScriptVariables property value. The EdgeScriptVariables property
     * @return array<EdgeScriptVariable>|null
    */
    public function getEdgeScriptVariables(): ?array {
        return $this->edgeScriptVariables;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'CurrentReleaseId' => fn(ParseNode $n) => $o->setCurrentReleaseId($n->getIntegerValue()),
            'DefaultHostname' => fn(ParseNode $n) => $o->setDefaultHostname($n->getStringValue()),
            'Deleted' => fn(ParseNode $n) => $o->setDeleted($n->getBooleanValue()),
            'DeploymentKey' => fn(ParseNode $n) => $o->setDeploymentKey($n->getStringValue()),
            'EdgeScriptVariables' => fn(ParseNode $n) => $o->setEdgeScriptVariables($n->getCollectionOfObjectValues([EdgeScriptVariable::class, 'createFromDiscriminatorValue'])),
            'Id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'Integration' => fn(ParseNode $n) => $o->setIntegration($n->getObjectValue([Integration::class, 'createFromDiscriminatorValue'])),
            'IntegrationId' => fn(ParseNode $n) => $o->setIntegrationId($n->getIntegerValue()),
            'LastModified' => fn(ParseNode $n) => $o->setLastModified($n->getDateTimeValue()),
            'LinkedPullZones' => fn(ParseNode $n) => $o->setLinkedPullZones($n->getCollectionOfObjectValues([LinkedPullZone::class, 'createFromDiscriminatorValue'])),
            'MonthlyCost' => fn(ParseNode $n) => $o->setMonthlyCost($n->getFloatValue()),
            'MonthlyCpuTime' => fn(ParseNode $n) => $o->setMonthlyCpuTime($n->getIntegerValue()),
            'MonthlyRequestCount' => fn(ParseNode $n) => $o->setMonthlyRequestCount($n->getIntegerValue()),
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'RepositoryId' => fn(ParseNode $n) => $o->setRepositoryId($n->getIntegerValue()),
            'ScriptType' => fn(ParseNode $n) => $o->setScriptType($n->getFloatValue()),
            'SystemHostname' => fn(ParseNode $n) => $o->setSystemHostname($n->getStringValue()),
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
     * Gets the Integration property value. The Integration property
     * @return Integration|null
    */
    public function getIntegration(): ?Integration {
        return $this->integration;
    }

    /**
     * Gets the IntegrationId property value. The IntegrationId property
     * @return int|null
    */
    public function getIntegrationId(): ?int {
        return $this->integrationId;
    }

    /**
     * Gets the LastModified property value. The LastModified property
     * @return DateTime|null
    */
    public function getLastModified(): ?DateTime {
        return $this->lastModified;
    }

    /**
     * Gets the LinkedPullZones property value. The LinkedPullZones property
     * @return array<LinkedPullZone>|null
    */
    public function getLinkedPullZones(): ?array {
        return $this->linkedPullZones;
    }

    /**
     * Gets the MonthlyCost property value. The MonthlyCost property
     * @return float|null
    */
    public function getMonthlyCost(): ?float {
        return $this->monthlyCost;
    }

    /**
     * Gets the MonthlyCpuTime property value. The MonthlyCpuTime property
     * @return int|null
    */
    public function getMonthlyCpuTime(): ?int {
        return $this->monthlyCpuTime;
    }

    /**
     * Gets the MonthlyRequestCount property value. The MonthlyRequestCount property
     * @return int|null
    */
    public function getMonthlyRequestCount(): ?int {
        return $this->monthlyRequestCount;
    }

    /**
     * Gets the Name property value. The Name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the RepositoryId property value. The RepositoryId property
     * @return int|null
    */
    public function getRepositoryId(): ?int {
        return $this->repositoryId;
    }

    /**
     * Gets the ScriptType property value. The ScriptType property
     * @return float|null
    */
    public function getScriptType(): ?float {
        return $this->scriptType;
    }

    /**
     * Gets the SystemHostname property value. The SystemHostname property
     * @return string|null
    */
    public function getSystemHostname(): ?string {
        return $this->systemHostname;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('Integration', $this->getIntegration());
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeFloatValue('ScriptType', $this->getScriptType());
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
     * Sets the CurrentReleaseId property value. The CurrentReleaseId property
     * @param int|null $value Value to set for the CurrentReleaseId property.
    */
    public function setCurrentReleaseId(?int $value): void {
        $this->currentReleaseId = $value;
    }

    /**
     * Sets the DefaultHostname property value. The DefaultHostname property
     * @param string|null $value Value to set for the DefaultHostname property.
    */
    public function setDefaultHostname(?string $value): void {
        $this->defaultHostname = $value;
    }

    /**
     * Sets the Deleted property value. The Deleted property
     * @param bool|null $value Value to set for the Deleted property.
    */
    public function setDeleted(?bool $value): void {
        $this->deleted = $value;
    }

    /**
     * Sets the DeploymentKey property value. The DeploymentKey property
     * @param string|null $value Value to set for the DeploymentKey property.
    */
    public function setDeploymentKey(?string $value): void {
        $this->deploymentKey = $value;
    }

    /**
     * Sets the EdgeScriptVariables property value. The EdgeScriptVariables property
     * @param array<EdgeScriptVariable>|null $value Value to set for the EdgeScriptVariables property.
    */
    public function setEdgeScriptVariables(?array $value): void {
        $this->edgeScriptVariables = $value;
    }

    /**
     * Sets the Id property value. The Id property
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the Integration property value. The Integration property
     * @param Integration|null $value Value to set for the Integration property.
    */
    public function setIntegration(?Integration $value): void {
        $this->integration = $value;
    }

    /**
     * Sets the IntegrationId property value. The IntegrationId property
     * @param int|null $value Value to set for the IntegrationId property.
    */
    public function setIntegrationId(?int $value): void {
        $this->integrationId = $value;
    }

    /**
     * Sets the LastModified property value. The LastModified property
     * @param DateTime|null $value Value to set for the LastModified property.
    */
    public function setLastModified(?DateTime $value): void {
        $this->lastModified = $value;
    }

    /**
     * Sets the LinkedPullZones property value. The LinkedPullZones property
     * @param array<LinkedPullZone>|null $value Value to set for the LinkedPullZones property.
    */
    public function setLinkedPullZones(?array $value): void {
        $this->linkedPullZones = $value;
    }

    /**
     * Sets the MonthlyCost property value. The MonthlyCost property
     * @param float|null $value Value to set for the MonthlyCost property.
    */
    public function setMonthlyCost(?float $value): void {
        $this->monthlyCost = $value;
    }

    /**
     * Sets the MonthlyCpuTime property value. The MonthlyCpuTime property
     * @param int|null $value Value to set for the MonthlyCpuTime property.
    */
    public function setMonthlyCpuTime(?int $value): void {
        $this->monthlyCpuTime = $value;
    }

    /**
     * Sets the MonthlyRequestCount property value. The MonthlyRequestCount property
     * @param int|null $value Value to set for the MonthlyRequestCount property.
    */
    public function setMonthlyRequestCount(?int $value): void {
        $this->monthlyRequestCount = $value;
    }

    /**
     * Sets the Name property value. The Name property
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the RepositoryId property value. The RepositoryId property
     * @param int|null $value Value to set for the RepositoryId property.
    */
    public function setRepositoryId(?int $value): void {
        $this->repositoryId = $value;
    }

    /**
     * Sets the ScriptType property value. The ScriptType property
     * @param float|null $value Value to set for the ScriptType property.
    */
    public function setScriptType(?float $value): void {
        $this->scriptType = $value;
    }

    /**
     * Sets the SystemHostname property value. The SystemHostname property
     * @param string|null $value Value to set for the SystemHostname property.
    */
    public function setSystemHostname(?string $value): void {
        $this->systemHostname = $value;
    }

}
