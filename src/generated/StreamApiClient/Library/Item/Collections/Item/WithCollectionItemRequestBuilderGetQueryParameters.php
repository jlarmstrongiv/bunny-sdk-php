<?php

namespace StreamApiClient\Library\Item\Collections\Item;

/**
 * [GetCollection API Docs](https://docs.bunny.net/reference/collection_getcollection)
*/
class WithCollectionItemRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $includeThumbnails 
    */
    public ?bool $includeThumbnails = null;
    
    /**
     * Instantiates a new WithCollectionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $includeThumbnails 
    */
    public function __construct(?bool $includeThumbnails = null) {
        $this->includeThumbnails = $includeThumbnails;
    }

}
