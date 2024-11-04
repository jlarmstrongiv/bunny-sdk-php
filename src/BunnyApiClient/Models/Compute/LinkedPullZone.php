<?php

namespace BunnyApiClient\Models\Compute;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LinkedPullZone implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $defaultHostname The DefaultHostname property
    */
    private ?string $defaultHostname = null;
    
    /**
     * @var int|null $id The Id property
    */
    private ?int $id = null;
    
    /**
     * @var string|null $pullZoneName The PullZoneName property
    */
    private ?string $pullZoneName = null;
    
    /**
     * Instantiates a new LinkedPullZone and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LinkedPullZone
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LinkedPullZone {
        return new LinkedPullZone();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the DefaultHostname property value. The DefaultHostname property
     * @return string|null
    */
    public function getDefaultHostname(): ?string {
        return $this->defaultHostname;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'DefaultHostname' => fn(ParseNode $n) => $o->setDefaultHostname($n->getStringValue()),
            'Id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'PullZoneName' => fn(ParseNode $n) => $o->setPullZoneName($n->getStringValue()),
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
     * Gets the PullZoneName property value. The PullZoneName property
     * @return string|null
    */
    public function getPullZoneName(): ?string {
        return $this->pullZoneName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('DefaultHostname', $this->getDefaultHostname());
        $writer->writeIntegerValue('Id', $this->getId());
        $writer->writeStringValue('PullZoneName', $this->getPullZoneName());
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
     * Sets the DefaultHostname property value. The DefaultHostname property
     * @param string|null $value Value to set for the DefaultHostname property.
    */
    public function setDefaultHostname(?string $value): void {
        $this->defaultHostname = $value;
    }

    /**
     * Sets the Id property value. The Id property
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the PullZoneName property value. The PullZoneName property
     * @param string|null $value Value to set for the PullZoneName property.
    */
    public function setPullZoneName(?string $value): void {
        $this->pullZoneName = $value;
    }

}
