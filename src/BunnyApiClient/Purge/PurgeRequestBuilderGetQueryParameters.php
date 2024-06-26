<?php

namespace BunnyApiClient\Purge;

/**
 * [PurgeUrlGet API Docs](https://docs.bunny.net/reference/purgepublic_index)
*/
class PurgeRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $async 
    */
    public ?bool $async = null;
    
    /**
     * @var string|null $headerName 
    */
    public ?string $headerName = null;
    
    /**
     * @var string|null $headerValue 
    */
    public ?string $headerValue = null;
    
    /**
     * @var string|null $url 
    */
    public ?string $url = null;
    
    /**
     * Instantiates a new PurgeRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $async 
     * @param string|null $headerName 
     * @param string|null $headerValue 
     * @param string|null $url 
    */
    public function __construct(?bool $async = null, ?string $headerName = null, ?string $headerValue = null, ?string $url = null) {
        $this->async = $async;
        $this->headerName = $headerName;
        $this->headerValue = $headerValue;
        $this->url = $url;
    }

}
