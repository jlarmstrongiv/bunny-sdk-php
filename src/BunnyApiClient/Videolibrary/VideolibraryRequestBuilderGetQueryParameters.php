<?php

namespace BunnyApiClient\Videolibrary;

/**
 * [ListVideoLibraries API Docs](https://docs.bunny.net/reference/videolibrarypublic_index)
*/
class VideolibraryRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $includeAccessKey 
    */
    public ?bool $includeAccessKey = null;
    
    /**
     * @var int|null $page 
    */
    public ?int $page = null;
    
    /**
     * @var int|null $perPage 
    */
    public ?int $perPage = null;
    
    /**
     * @var string|null $search The search term that will be used to filter the results
    */
    public ?string $search = null;
    
    /**
     * Instantiates a new VideolibraryRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $includeAccessKey 
     * @param int|null $page 
     * @param int|null $perPage 
     * @param string|null $search The search term that will be used to filter the results
    */
    public function __construct(?bool $includeAccessKey = null, ?int $page = null, ?int $perPage = null, ?string $search = null) {
        $this->includeAccessKey = $includeAccessKey;
        $this->page = $page;
        $this->perPage = $perPage;
        $this->search = $search;
    }

}
