<?php

namespace BunnyApiClient\Search;

/**
 * [GlobalSearch API Docs](https://docs.bunny.net/reference/searchpublic_globalsearch)
*/
class SearchRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $from The number of results skipped in the search query
    */
    public ?int $from = null;
    
    /**
     * @var string|null $search The input query for the search request
    */
    public ?string $search = null;
    
    /**
     * @var int|null $size The size of the result set
    */
    public ?int $size = null;
    
    /**
     * Instantiates a new SearchRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $from The number of results skipped in the search query
     * @param string|null $search The input query for the search request
     * @param int|null $size The size of the result set
    */
    public function __construct(?int $from = null, ?string $search = null, ?int $size = null) {
        $this->from = $from;
        $this->search = $search;
        $this->size = $size;
    }

}
