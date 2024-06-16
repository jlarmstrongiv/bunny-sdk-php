<?php

namespace BunnyApiClient\Pullzone;

/**
 * [ListPullZones API Docs](https://docs.bunny.net/reference/pullzonepublic_index)
*/
class PullzoneRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $includeCertificate Determines if the result hostnames should contain the SSL certificate
    */
    public ?bool $includeCertificate = null;
    
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
     * Instantiates a new PullzoneRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $includeCertificate Determines if the result hostnames should contain the SSL certificate
     * @param int|null $page 
     * @param int|null $perPage 
     * @param string|null $search The search term that will be used to filter the results
    */
    public function __construct(?bool $includeCertificate = null, ?int $page = null, ?int $perPage = null, ?string $search = null) {
        $this->includeCertificate = $includeCertificate;
        $this->page = $page;
        $this->perPage = $perPage;
        $this->search = $search;
    }

}
