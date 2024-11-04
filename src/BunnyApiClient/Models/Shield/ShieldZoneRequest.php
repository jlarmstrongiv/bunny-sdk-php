<?php

namespace BunnyApiClient\Models\Shield;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ShieldZoneRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $dDoSChallengeWindow The dDoSChallengeWindow property
    */
    private ?int $dDoSChallengeWindow = null;
    
    /**
     * @var float|null $dDoSShieldSensitivity The dDoSShieldSensitivity property
    */
    private ?float $dDoSShieldSensitivity = null;
    
    /**
     * @var bool|null $learningMode The learningMode property
    */
    private ?bool $learningMode = null;
    
    /**
     * @var bool|null $premiumPlan The premiumPlan property
    */
    private ?bool $premiumPlan = null;
    
    /**
     * @var int|null $shieldZoneId The shieldZoneId property
    */
    private ?int $shieldZoneId = null;
    
    /**
     * @var array<string>|null $wafDisabledRuleGroups The wafDisabledRuleGroups property
    */
    private ?array $wafDisabledRuleGroups = null;
    
    /**
     * @var array<string>|null $wafDisabledRules The wafDisabledRules property
    */
    private ?array $wafDisabledRules = null;
    
    /**
     * @var bool|null $wafEnabled The wafEnabled property
    */
    private ?bool $wafEnabled = null;
    
    /**
     * @var array<PullZoneWafConfigVariableModel>|null $wafEngineConfig The wafEngineConfig property
    */
    private ?array $wafEngineConfig = null;
    
    /**
     * @var float|null $wafExecutionMode The wafExecutionMode property
    */
    private ?float $wafExecutionMode = null;
    
    /**
     * @var array<string>|null $wafLogOnlyRules The wafLogOnlyRules property
    */
    private ?array $wafLogOnlyRules = null;
    
    /**
     * @var int|null $wafProfileId The wafProfileId property
    */
    private ?int $wafProfileId = null;
    
    /**
     * @var bool|null $wafRequestHeaderLoggingEnabled The wafRequestHeaderLoggingEnabled property
    */
    private ?bool $wafRequestHeaderLoggingEnabled = null;
    
    /**
     * @var array<string>|null $wafRequestIgnoredHeaders The wafRequestIgnoredHeaders property
    */
    private ?array $wafRequestIgnoredHeaders = null;
    
    /**
     * Instantiates a new ShieldZoneRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShieldZoneRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShieldZoneRequest {
        return new ShieldZoneRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dDoSChallengeWindow property value. The dDoSChallengeWindow property
     * @return int|null
    */
    public function getDDoSChallengeWindow(): ?int {
        return $this->dDoSChallengeWindow;
    }

    /**
     * Gets the dDoSShieldSensitivity property value. The dDoSShieldSensitivity property
     * @return float|null
    */
    public function getDDoSShieldSensitivity(): ?float {
        return $this->dDoSShieldSensitivity;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dDoSChallengeWindow' => fn(ParseNode $n) => $o->setDDoSChallengeWindow($n->getIntegerValue()),
            'dDoSShieldSensitivity' => fn(ParseNode $n) => $o->setDDoSShieldSensitivity($n->getFloatValue()),
            'learningMode' => fn(ParseNode $n) => $o->setLearningMode($n->getBooleanValue()),
            'premiumPlan' => fn(ParseNode $n) => $o->setPremiumPlan($n->getBooleanValue()),
            'shieldZoneId' => fn(ParseNode $n) => $o->setShieldZoneId($n->getIntegerValue()),
            'wafDisabledRuleGroups' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setWafDisabledRuleGroups($val);
            },
            'wafDisabledRules' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setWafDisabledRules($val);
            },
            'wafEnabled' => fn(ParseNode $n) => $o->setWafEnabled($n->getBooleanValue()),
            'wafEngineConfig' => fn(ParseNode $n) => $o->setWafEngineConfig($n->getCollectionOfObjectValues([PullZoneWafConfigVariableModel::class, 'createFromDiscriminatorValue'])),
            'wafExecutionMode' => fn(ParseNode $n) => $o->setWafExecutionMode($n->getFloatValue()),
            'wafLogOnlyRules' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setWafLogOnlyRules($val);
            },
            'wafProfileId' => fn(ParseNode $n) => $o->setWafProfileId($n->getIntegerValue()),
            'wafRequestHeaderLoggingEnabled' => fn(ParseNode $n) => $o->setWafRequestHeaderLoggingEnabled($n->getBooleanValue()),
            'wafRequestIgnoredHeaders' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setWafRequestIgnoredHeaders($val);
            },
        ];
    }

    /**
     * Gets the learningMode property value. The learningMode property
     * @return bool|null
    */
    public function getLearningMode(): ?bool {
        return $this->learningMode;
    }

    /**
     * Gets the premiumPlan property value. The premiumPlan property
     * @return bool|null
    */
    public function getPremiumPlan(): ?bool {
        return $this->premiumPlan;
    }

    /**
     * Gets the shieldZoneId property value. The shieldZoneId property
     * @return int|null
    */
    public function getShieldZoneId(): ?int {
        return $this->shieldZoneId;
    }

    /**
     * Gets the wafDisabledRuleGroups property value. The wafDisabledRuleGroups property
     * @return array<string>|null
    */
    public function getWafDisabledRuleGroups(): ?array {
        return $this->wafDisabledRuleGroups;
    }

    /**
     * Gets the wafDisabledRules property value. The wafDisabledRules property
     * @return array<string>|null
    */
    public function getWafDisabledRules(): ?array {
        return $this->wafDisabledRules;
    }

    /**
     * Gets the wafEnabled property value. The wafEnabled property
     * @return bool|null
    */
    public function getWafEnabled(): ?bool {
        return $this->wafEnabled;
    }

    /**
     * Gets the wafEngineConfig property value. The wafEngineConfig property
     * @return array<PullZoneWafConfigVariableModel>|null
    */
    public function getWafEngineConfig(): ?array {
        return $this->wafEngineConfig;
    }

    /**
     * Gets the wafExecutionMode property value. The wafExecutionMode property
     * @return float|null
    */
    public function getWafExecutionMode(): ?float {
        return $this->wafExecutionMode;
    }

    /**
     * Gets the wafLogOnlyRules property value. The wafLogOnlyRules property
     * @return array<string>|null
    */
    public function getWafLogOnlyRules(): ?array {
        return $this->wafLogOnlyRules;
    }

    /**
     * Gets the wafProfileId property value. The wafProfileId property
     * @return int|null
    */
    public function getWafProfileId(): ?int {
        return $this->wafProfileId;
    }

    /**
     * Gets the wafRequestHeaderLoggingEnabled property value. The wafRequestHeaderLoggingEnabled property
     * @return bool|null
    */
    public function getWafRequestHeaderLoggingEnabled(): ?bool {
        return $this->wafRequestHeaderLoggingEnabled;
    }

    /**
     * Gets the wafRequestIgnoredHeaders property value. The wafRequestIgnoredHeaders property
     * @return array<string>|null
    */
    public function getWafRequestIgnoredHeaders(): ?array {
        return $this->wafRequestIgnoredHeaders;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('dDoSChallengeWindow', $this->getDDoSChallengeWindow());
        $writer->writeFloatValue('dDoSShieldSensitivity', $this->getDDoSShieldSensitivity());
        $writer->writeBooleanValue('learningMode', $this->getLearningMode());
        $writer->writeBooleanValue('premiumPlan', $this->getPremiumPlan());
        $writer->writeIntegerValue('shieldZoneId', $this->getShieldZoneId());
        $writer->writeCollectionOfPrimitiveValues('wafDisabledRuleGroups', $this->getWafDisabledRuleGroups());
        $writer->writeCollectionOfPrimitiveValues('wafDisabledRules', $this->getWafDisabledRules());
        $writer->writeBooleanValue('wafEnabled', $this->getWafEnabled());
        $writer->writeCollectionOfObjectValues('wafEngineConfig', $this->getWafEngineConfig());
        $writer->writeFloatValue('wafExecutionMode', $this->getWafExecutionMode());
        $writer->writeCollectionOfPrimitiveValues('wafLogOnlyRules', $this->getWafLogOnlyRules());
        $writer->writeIntegerValue('wafProfileId', $this->getWafProfileId());
        $writer->writeBooleanValue('wafRequestHeaderLoggingEnabled', $this->getWafRequestHeaderLoggingEnabled());
        $writer->writeCollectionOfPrimitiveValues('wafRequestIgnoredHeaders', $this->getWafRequestIgnoredHeaders());
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
     * Sets the dDoSChallengeWindow property value. The dDoSChallengeWindow property
     * @param int|null $value Value to set for the dDoSChallengeWindow property.
    */
    public function setDDoSChallengeWindow(?int $value): void {
        $this->dDoSChallengeWindow = $value;
    }

    /**
     * Sets the dDoSShieldSensitivity property value. The dDoSShieldSensitivity property
     * @param float|null $value Value to set for the dDoSShieldSensitivity property.
    */
    public function setDDoSShieldSensitivity(?float $value): void {
        $this->dDoSShieldSensitivity = $value;
    }

    /**
     * Sets the learningMode property value. The learningMode property
     * @param bool|null $value Value to set for the learningMode property.
    */
    public function setLearningMode(?bool $value): void {
        $this->learningMode = $value;
    }

    /**
     * Sets the premiumPlan property value. The premiumPlan property
     * @param bool|null $value Value to set for the premiumPlan property.
    */
    public function setPremiumPlan(?bool $value): void {
        $this->premiumPlan = $value;
    }

    /**
     * Sets the shieldZoneId property value. The shieldZoneId property
     * @param int|null $value Value to set for the shieldZoneId property.
    */
    public function setShieldZoneId(?int $value): void {
        $this->shieldZoneId = $value;
    }

    /**
     * Sets the wafDisabledRuleGroups property value. The wafDisabledRuleGroups property
     * @param array<string>|null $value Value to set for the wafDisabledRuleGroups property.
    */
    public function setWafDisabledRuleGroups(?array $value): void {
        $this->wafDisabledRuleGroups = $value;
    }

    /**
     * Sets the wafDisabledRules property value. The wafDisabledRules property
     * @param array<string>|null $value Value to set for the wafDisabledRules property.
    */
    public function setWafDisabledRules(?array $value): void {
        $this->wafDisabledRules = $value;
    }

    /**
     * Sets the wafEnabled property value. The wafEnabled property
     * @param bool|null $value Value to set for the wafEnabled property.
    */
    public function setWafEnabled(?bool $value): void {
        $this->wafEnabled = $value;
    }

    /**
     * Sets the wafEngineConfig property value. The wafEngineConfig property
     * @param array<PullZoneWafConfigVariableModel>|null $value Value to set for the wafEngineConfig property.
    */
    public function setWafEngineConfig(?array $value): void {
        $this->wafEngineConfig = $value;
    }

    /**
     * Sets the wafExecutionMode property value. The wafExecutionMode property
     * @param float|null $value Value to set for the wafExecutionMode property.
    */
    public function setWafExecutionMode(?float $value): void {
        $this->wafExecutionMode = $value;
    }

    /**
     * Sets the wafLogOnlyRules property value. The wafLogOnlyRules property
     * @param array<string>|null $value Value to set for the wafLogOnlyRules property.
    */
    public function setWafLogOnlyRules(?array $value): void {
        $this->wafLogOnlyRules = $value;
    }

    /**
     * Sets the wafProfileId property value. The wafProfileId property
     * @param int|null $value Value to set for the wafProfileId property.
    */
    public function setWafProfileId(?int $value): void {
        $this->wafProfileId = $value;
    }

    /**
     * Sets the wafRequestHeaderLoggingEnabled property value. The wafRequestHeaderLoggingEnabled property
     * @param bool|null $value Value to set for the wafRequestHeaderLoggingEnabled property.
    */
    public function setWafRequestHeaderLoggingEnabled(?bool $value): void {
        $this->wafRequestHeaderLoggingEnabled = $value;
    }

    /**
     * Sets the wafRequestIgnoredHeaders property value. The wafRequestIgnoredHeaders property
     * @param array<string>|null $value Value to set for the wafRequestIgnoredHeaders property.
    */
    public function setWafRequestIgnoredHeaders(?array $value): void {
        $this->wafRequestIgnoredHeaders = $value;
    }

}
