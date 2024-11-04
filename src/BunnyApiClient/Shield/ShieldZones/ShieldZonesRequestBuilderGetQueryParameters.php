<?php

namespace BunnyApiClient\Shield\ShieldZones;

class ShieldZonesRequestBuilderGetQueryParameters 
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
     * Instantiates a new ShieldZonesRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $page 
     * @param int|null $perPage 
    */
    public function __construct(?int $page = null, ?int $perPage = null) {
        $this->page = $page;
        $this->perPage = $perPage;
    }

}
