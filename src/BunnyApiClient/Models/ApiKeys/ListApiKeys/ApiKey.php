<?php

namespace BunnyApiClient\Models\ApiKeys\ListApiKeys;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApiKey implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $id The Id property
    */
    private ?int $id = null;
    
    /**
     * @var string|null $key The Key property
    */
    private ?string $key = null;
    
    /**
     * @var array<string>|null $roles The Roles property
    */
    private ?array $roles = null;
    
    /**
     * Instantiates a new ApiKey and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApiKey
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApiKey {
        return new ApiKey();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'Key' => fn(ParseNode $n) => $o->setKey($n->getStringValue()),
            'Roles' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoles($val);
            },
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
     * Gets the Key property value. The Key property
     * @return string|null
    */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Gets the Roles property value. The Roles property
     * @return array<string>|null
    */
    public function getRoles(): ?array {
        return $this->roles;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('Id', $this->getId());
        $writer->writeStringValue('Key', $this->getKey());
        $writer->writeCollectionOfPrimitiveValues('Roles', $this->getRoles());
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
     * Sets the Id property value. The Id property
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the Key property value. The Key property
     * @param string|null $value Value to set for the Key property.
    */
    public function setKey(?string $value): void {
        $this->key = $value;
    }

    /**
     * Sets the Roles property value. The Roles property
     * @param array<string>|null $value Value to set for the Roles property.
    */
    public function setRoles(?array $value): void {
        $this->roles = $value;
    }

}
