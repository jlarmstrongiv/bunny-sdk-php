<?php

namespace BunnyApiClient\Storagezone;

/**
 * [ListStorageZones API Docs](https://docs.bunny.net/reference/storagezonepublic_index)
*/
class StoragezoneRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $includeDeleted 
    */
    public ?bool $includeDeleted = null;
    
    /**
     * @var int|null $page 
    */
    public ?int $page = null;
    
    /**
     * @var int|null $perPage 
    */
    public ?int $perPage = null;
    
    /**
     * @var string|null $search 
    */
    public ?string $search = null;
    
    /**
     * Instantiates a new StoragezoneRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $includeDeleted 
     * @param int|null $page 
     * @param int|null $perPage 
     * @param string|null $search 
    */
    public function __construct(?bool $includeDeleted = null, ?int $page = null, ?int $perPage = null, ?string $search = null) {
        $this->includeDeleted = $includeDeleted;
        $this->page = $page;
        $this->perPage = $perPage;
        $this->search = $search;
    }

}
