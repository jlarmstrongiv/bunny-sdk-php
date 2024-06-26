<?php

namespace BunnyApiClient\Dnszone;

use BunnyApiClient\Models\DnsZone\DnsZone;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DnszoneGetResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $currentPage The CurrentPage property
    */
    private ?int $currentPage = null;
    
    /**
     * @var bool|null $hasMoreItems The HasMoreItems property
    */
    private ?bool $hasMoreItems = null;
    
    /**
     * @var array<DnsZone>|null $items The Items property
    */
    private ?array $items = null;
    
    /**
     * @var int|null $totalItems The TotalItems property
    */
    private ?int $totalItems = null;
    
    /**
     * Instantiates a new DnszoneGetResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DnszoneGetResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DnszoneGetResponse {
        return new DnszoneGetResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the CurrentPage property value. The CurrentPage property
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
            'CurrentPage' => fn(ParseNode $n) => $o->setCurrentPage($n->getIntegerValue()),
            'HasMoreItems' => fn(ParseNode $n) => $o->setHasMoreItems($n->getBooleanValue()),
            'Items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([DnsZone::class, 'createFromDiscriminatorValue'])),
            'TotalItems' => fn(ParseNode $n) => $o->setTotalItems($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the HasMoreItems property value. The HasMoreItems property
     * @return bool|null
    */
    public function getHasMoreItems(): ?bool {
        return $this->hasMoreItems;
    }

    /**
     * Gets the Items property value. The Items property
     * @return array<DnsZone>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the TotalItems property value. The TotalItems property
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
        $writer->writeIntegerValue('CurrentPage', $this->getCurrentPage());
        $writer->writeBooleanValue('HasMoreItems', $this->getHasMoreItems());
        $writer->writeCollectionOfObjectValues('Items', $this->getItems());
        $writer->writeIntegerValue('TotalItems', $this->getTotalItems());
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
     * Sets the CurrentPage property value. The CurrentPage property
     * @param int|null $value Value to set for the CurrentPage property.
    */
    public function setCurrentPage(?int $value): void {
        $this->currentPage = $value;
    }

    /**
     * Sets the HasMoreItems property value. The HasMoreItems property
     * @param bool|null $value Value to set for the HasMoreItems property.
    */
    public function setHasMoreItems(?bool $value): void {
        $this->hasMoreItems = $value;
    }

    /**
     * Sets the Items property value. The Items property
     * @param array<DnsZone>|null $value Value to set for the Items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the TotalItems property value. The TotalItems property
     * @param int|null $value Value to set for the TotalItems property.
    */
    public function setTotalItems(?int $value): void {
        $this->totalItems = $value;
    }

}
