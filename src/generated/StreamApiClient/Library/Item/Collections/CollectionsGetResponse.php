<?php

namespace StreamApiClient\Library\Item\Collections;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use StreamApiClient\Models\ManageCollections\Collection;

class CollectionsGetResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $currentPage The currentPage property
    */
    private ?int $currentPage = null;
    
    /**
     * @var array<Collection>|null $items The items property
    */
    private ?array $items = null;
    
    /**
     * @var int|null $itemsPerPage The itemsPerPage property
    */
    private ?int $itemsPerPage = null;
    
    /**
     * @var int|null $totalItems The totalItems property
    */
    private ?int $totalItems = null;
    
    /**
     * Instantiates a new CollectionsGetResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CollectionsGetResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CollectionsGetResponse {
        return new CollectionsGetResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the currentPage property value. The currentPage property
     * @return int|null
    */
    public function getCurrentPage(): ?int {
        return $this->currentPage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currentPage' => fn(ParseNode $n) => $o->setCurrentPage($n->getIntegerValue()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([Collection::class, 'createFromDiscriminatorValue'])),
            'itemsPerPage' => fn(ParseNode $n) => $o->setItemsPerPage($n->getIntegerValue()),
            'totalItems' => fn(ParseNode $n) => $o->setTotalItems($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the items property value. The items property
     * @return array<Collection>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the itemsPerPage property value. The itemsPerPage property
     * @return int|null
    */
    public function getItemsPerPage(): ?int {
        return $this->itemsPerPage;
    }

    /**
     * Gets the totalItems property value. The totalItems property
     * @return int|null
    */
    public function getTotalItems(): ?int {
        return $this->totalItems;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('currentPage', $this->getCurrentPage());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeIntegerValue('itemsPerPage', $this->getItemsPerPage());
        $writer->writeIntegerValue('totalItems', $this->getTotalItems());
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
     * Sets the currentPage property value. The currentPage property
     * @param int|null $value Value to set for the currentPage property.
    */
    public function setCurrentPage(?int $value): void {
        $this->currentPage = $value;
    }

    /**
     * Sets the items property value. The items property
     * @param array<Collection>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the itemsPerPage property value. The itemsPerPage property
     * @param int|null $value Value to set for the itemsPerPage property.
    */
    public function setItemsPerPage(?int $value): void {
        $this->itemsPerPage = $value;
    }

    /**
     * Sets the totalItems property value. The totalItems property
     * @param int|null $value Value to set for the totalItems property.
    */
    public function setTotalItems(?int $value): void {
        $this->totalItems = $value;
    }

}
