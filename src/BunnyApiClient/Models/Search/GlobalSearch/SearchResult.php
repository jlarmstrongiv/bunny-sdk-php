<?php

namespace BunnyApiClient\Models\Search\GlobalSearch;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SearchResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $id The ID of the search result item linked object
    */
    private ?int $id = null;
    
    /**
     * @var string|null $name The name of the object found
    */
    private ?string $name = null;
    
    /**
     * @var GlobalSearchType|null $type The type of the search result item. Possible values: cdn, storage, dns, script, stream
    */
    private ?GlobalSearchType $type = null;
    
    /**
     * Instantiates a new SearchResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchResult {
        return new SearchResult();
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
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'Type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(GlobalSearchType::class)),
        ];
    }

    /**
     * Gets the Id property value. The ID of the search result item linked object
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the Name property value. The name of the object found
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the Type property value. The type of the search result item. Possible values: cdn, storage, dns, script, stream
     * @return GlobalSearchType|null
    */
    public function getType(): ?GlobalSearchType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('Id', $this->getId());
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeEnumValue('Type', $this->getType());
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
     * Sets the Id property value. The ID of the search result item linked object
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the Name property value. The name of the object found
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the Type property value. The type of the search result item. Possible values: cdn, storage, dns, script, stream
     * @param GlobalSearchType|null $value Value to set for the Type property.
    */
    public function setType(?GlobalSearchType $value): void {
        $this->type = $value;
    }

}
