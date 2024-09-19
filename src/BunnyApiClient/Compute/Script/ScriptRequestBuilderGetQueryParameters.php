<?php

namespace BunnyApiClient\Compute\Script;

/**
 * [ListComputeScripts API Docs](https://docs.bunny.net/reference/computeedgescriptpublic_index)
*/
class ScriptRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $includeLinkedPullZones 
    */
    public ?bool $includeLinkedPullZones = null;
    
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
     * Instantiates a new ScriptRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $includeLinkedPullZones 
     * @param int|null $page 
     * @param int|null $perPage 
     * @param string|null $search The search term that will be used to filter the results
    */
    public function __construct(?bool $includeLinkedPullZones = null, ?int $page = null, ?int $perPage = null, ?string $search = null) {
        $this->includeLinkedPullZones = $includeLinkedPullZones;
        $this->page = $page;
        $this->perPage = $perPage;
        $this->search = $search;
    }

}
