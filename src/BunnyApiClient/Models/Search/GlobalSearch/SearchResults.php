<?php

namespace BunnyApiClient\Models\Search\GlobalSearch;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SearchResults implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $from The number of results skipped in the search query
    */
    private ?int $from = null;
    
    /**
     * @var string|null $query The input query for the search request
    */
    private ?string $query = null;
    
    /**
     * @var array<SearchResult>|null $searchResults The list of search results found for the query
    */
    private ?array $searchResults = null;
    
    /**
     * @var int|null $size The size of the result set
    */
    private ?int $size = null;
    
    /**
     * @var int|null $total The total number of search results found matching the query
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new SearchResults and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchResults
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchResults {
        return new SearchResults();
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
            'From' => fn(ParseNode $n) => $o->setFrom($n->getIntegerValue()),
            'Query' => fn(ParseNode $n) => $o->setQuery($n->getStringValue()),
            'SearchResults' => fn(ParseNode $n) => $o->setSearchResults($n->getCollectionOfObjectValues([SearchResult::class, 'createFromDiscriminatorValue'])),
            'Size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'Total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the From property value. The number of results skipped in the search query
     * @return int|null
    */
    public function getFrom(): ?int {
        return $this->from;
    }

    /**
     * Gets the Query property value. The input query for the search request
     * @return string|null
    */
    public function getQuery(): ?string {
        return $this->query;
    }

    /**
     * Gets the SearchResults property value. The list of search results found for the query
     * @return array<SearchResult>|null
    */
    public function getSearchResults(): ?array {
        return $this->searchResults;
    }

    /**
     * Gets the Size property value. The size of the result set
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Gets the Total property value. The total number of search results found matching the query
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('From', $this->getFrom());
        $writer->writeStringValue('Query', $this->getQuery());
        $writer->writeCollectionOfObjectValues('SearchResults', $this->getSearchResults());
        $writer->writeIntegerValue('Size', $this->getSize());
        $writer->writeIntegerValue('Total', $this->getTotal());
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
     * Sets the From property value. The number of results skipped in the search query
     * @param int|null $value Value to set for the From property.
    */
    public function setFrom(?int $value): void {
        $this->from = $value;
    }

    /**
     * Sets the Query property value. The input query for the search request
     * @param string|null $value Value to set for the Query property.
    */
    public function setQuery(?string $value): void {
        $this->query = $value;
    }

    /**
     * Sets the SearchResults property value. The list of search results found for the query
     * @param array<SearchResult>|null $value Value to set for the SearchResults property.
    */
    public function setSearchResults(?array $value): void {
        $this->searchResults = $value;
    }

    /**
     * Sets the Size property value. The size of the result set
     * @param int|null $value Value to set for the Size property.
    */
    public function setSize(?int $value): void {
        $this->size = $value;
    }

    /**
     * Sets the Total property value. The total number of search results found matching the query
     * @param int|null $value Value to set for the Total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
