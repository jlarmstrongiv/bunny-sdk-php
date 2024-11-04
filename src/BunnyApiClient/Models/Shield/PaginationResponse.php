<?php

namespace BunnyApiClient\Models\Shield;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PaginationResponse implements AdditionalDataHolder, Parsable 
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
     * @var int|null $nextPage The nextPage property
    */
    private ?int $nextPage = null;
    
    /**
     * @var int|null $pageSize The pageSize property
    */
    private ?int $pageSize = null;
    
    /**
     * @var int|null $totalCount The totalCount property
    */
    private ?int $totalCount = null;
    
    /**
     * @var int|null $totalPages The totalPages property
    */
    private ?int $totalPages = null;
    
    /**
     * Instantiates a new PaginationResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaginationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaginationResponse {
        return new PaginationResponse();
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
            'nextPage' => fn(ParseNode $n) => $o->setNextPage($n->getIntegerValue()),
            'pageSize' => fn(ParseNode $n) => $o->setPageSize($n->getIntegerValue()),
            'totalCount' => fn(ParseNode $n) => $o->setTotalCount($n->getIntegerValue()),
            'totalPages' => fn(ParseNode $n) => $o->setTotalPages($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the nextPage property value. The nextPage property
     * @return int|null
    */
    public function getNextPage(): ?int {
        return $this->nextPage;
    }

    /**
     * Gets the pageSize property value. The pageSize property
     * @return int|null
    */
    public function getPageSize(): ?int {
        return $this->pageSize;
    }

    /**
     * Gets the totalCount property value. The totalCount property
     * @return int|null
    */
    public function getTotalCount(): ?int {
        return $this->totalCount;
    }

    /**
     * Gets the totalPages property value. The totalPages property
     * @return int|null
    */
    public function getTotalPages(): ?int {
        return $this->totalPages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('currentPage', $this->getCurrentPage());
        $writer->writeIntegerValue('nextPage', $this->getNextPage());
        $writer->writeIntegerValue('pageSize', $this->getPageSize());
        $writer->writeIntegerValue('totalCount', $this->getTotalCount());
        $writer->writeIntegerValue('totalPages', $this->getTotalPages());
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
     * Sets the nextPage property value. The nextPage property
     * @param int|null $value Value to set for the nextPage property.
    */
    public function setNextPage(?int $value): void {
        $this->nextPage = $value;
    }

    /**
     * Sets the pageSize property value. The pageSize property
     * @param int|null $value Value to set for the pageSize property.
    */
    public function setPageSize(?int $value): void {
        $this->pageSize = $value;
    }

    /**
     * Sets the totalCount property value. The totalCount property
     * @param int|null $value Value to set for the totalCount property.
    */
    public function setTotalCount(?int $value): void {
        $this->totalCount = $value;
    }

    /**
     * Sets the totalPages property value. The totalPages property
     * @param int|null $value Value to set for the totalPages property.
    */
    public function setTotalPages(?int $value): void {
        $this->totalPages = $value;
    }

}
