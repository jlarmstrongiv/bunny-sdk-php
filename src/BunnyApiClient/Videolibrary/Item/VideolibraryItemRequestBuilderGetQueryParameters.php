<?php

namespace BunnyApiClient\Videolibrary\Item;

/**
 * [GetVideoLibrary API Docs](https://docs.bunny.net/reference/videolibrarypublic_index2)
*/
class VideolibraryItemRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $includeAccessKey 
    */
    public ?bool $includeAccessKey = null;
    
    /**
     * Instantiates a new VideolibraryItemRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $includeAccessKey 
    */
    public function __construct(?bool $includeAccessKey = null) {
        $this->includeAccessKey = $includeAccessKey;
    }

}
