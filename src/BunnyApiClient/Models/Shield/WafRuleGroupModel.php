<?php

namespace BunnyApiClient\Models\Shield;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WafRuleGroupModel implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $code The code property
    */
    private ?string $code = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $fileName The fileName property
    */
    private ?string $fileName = null;
    
    /**
     * @var int|null $id The id property
    */
    private ?int $id = null;
    
    /**
     * @var string|null $mainGroup The mainGroup property
    */
    private ?string $mainGroup = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var array<WafRuleModel>|null $rules The rules property
    */
    private ?array $rules = null;
    
    /**
     * @var string|null $ruleset The ruleset property
    */
    private ?string $ruleset = null;
    
    /**
     * Instantiates a new WafRuleGroupModel and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WafRuleGroupModel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WafRuleGroupModel {
        return new WafRuleGroupModel();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the code property value. The code property
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'mainGroup' => fn(ParseNode $n) => $o->setMainGroup($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'rules' => fn(ParseNode $n) => $o->setRules($n->getCollectionOfObjectValues([WafRuleModel::class, 'createFromDiscriminatorValue'])),
            'ruleset' => fn(ParseNode $n) => $o->setRuleset($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileName property value. The fileName property
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the id property value. The id property
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the mainGroup property value. The mainGroup property
     * @return string|null
    */
    public function getMainGroup(): ?string {
        return $this->mainGroup;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the rules property value. The rules property
     * @return array<WafRuleModel>|null
    */
    public function getRules(): ?array {
        return $this->rules;
    }

    /**
     * Gets the ruleset property value. The ruleset property
     * @return string|null
    */
    public function getRuleset(): ?string {
        return $this->ruleset;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('code', $this->getCode());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeIntegerValue('id', $this->getId());
        $writer->writeStringValue('mainGroup', $this->getMainGroup());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('rules', $this->getRules());
        $writer->writeStringValue('ruleset', $this->getRuleset());
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
     * Sets the code property value. The code property
     * @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value): void {
        $this->code = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the fileName property value. The fileName property
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->fileName = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param int|null $value Value to set for the id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the mainGroup property value. The mainGroup property
     * @param string|null $value Value to set for the mainGroup property.
    */
    public function setMainGroup(?string $value): void {
        $this->mainGroup = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the rules property value. The rules property
     * @param array<WafRuleModel>|null $value Value to set for the rules property.
    */
    public function setRules(?array $value): void {
        $this->rules = $value;
    }

    /**
     * Sets the ruleset property value. The ruleset property
     * @param string|null $value Value to set for the ruleset property.
    */
    public function setRuleset(?string $value): void {
        $this->ruleset = $value;
    }

}
