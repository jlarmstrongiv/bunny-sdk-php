<?php

namespace StreamApiClient\Library\Item\Videos;

/**
 * [ListVideos API Docs](https://docs.bunny.net/reference/video_list)
*/
class VideosRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $collection 
    */
    public ?string $collection = null;
    
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
     * Instantiates a new VideosRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $collection 
     * @param int|null $itemsPerPage 
     * @param GetOrderByQueryParameterType|null $orderBy 
     * @param int|null $page 
     * @param string|null $search 
    */
    public function __construct(?string $collection = null, ?int $itemsPerPage = null, ?GetOrderByQueryParameterType $orderBy = null, ?int $page = null, ?string $search = null) {
        $this->collection = $collection;
        $this->itemsPerPage = $itemsPerPage;
        $this->orderBy = $orderBy;
        $this->page = $page;
        $this->search = $search;
    }

}
