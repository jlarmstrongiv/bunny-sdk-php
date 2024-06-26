<?php

namespace StreamApiClient\Library\Item\Collections;

/**
 * [GetCollectionList API Docs](https://docs.bunny.net/reference/collection_list)
*/
class CollectionsRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $includeThumbnails 
    */
    public ?bool $includeThumbnails = null;
    
    /**
     * @var int|null $itemsPerPage 
    */
    public ?int $itemsPerPage = null;
    
    /**
     * @var GetOrderByQueryParameterType|null $orderBy 
    */
    public ?GetOrderByQueryParameterType $orderBy = null;
    
    /**
     * @var int|null $page 
    */
    public ?int $page = null;
    
    /**
     * @var string|null $search 
    */
    public ?string $search = null;
    
    /**
     * Instantiates a new CollectionsRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $includeThumbnails 
     * @param int|null $itemsPerPage 
     * @param GetOrderByQueryParameterType|null $orderBy 
     * @param int|null $page 
     * @param string|null $search 
    */
    public function __construct(?bool $includeThumbnails = null, ?int $itemsPerPage = null, ?GetOrderByQueryParameterType $orderBy = null, ?int $page = null, ?string $search = null) {
        $this->includeThumbnails = $includeThumbnails;
        $this->itemsPerPage = $itemsPerPage;
        $this->orderBy = $orderBy;
        $this->page = $page;
        $this->search = $search;
    }

}
