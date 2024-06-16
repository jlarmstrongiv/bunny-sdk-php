<?php

namespace BunnyApiClient\Dnszone;

/**
 * [ListDnsZones API Docs](https://docs.bunny.net/reference/dnszonepublic_index)
*/
class DnszoneRequestBuilderGetQueryParameters 
{
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
     * Instantiates a new DnszoneRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $page 
     * @param int|null $perPage 
     * @param string|null $search The search term that will be used to filter the results
    */
    public function __construct(?int $page = null, ?int $perPage = null, ?string $search = null) {
        $this->page = $page;
        $this->perPage = $perPage;
        $this->search = $search;
    }

}
