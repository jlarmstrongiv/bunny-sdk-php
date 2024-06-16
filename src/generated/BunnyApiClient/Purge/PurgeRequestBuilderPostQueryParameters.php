<?php

namespace BunnyApiClient\Purge;

/**
 * [PurgeUrlPost API Docs](https://docs.bunny.net/reference/purgepublic_indexpost)
*/
class PurgeRequestBuilderPostQueryParameters 
{
    /**
     * @var bool|null $async 
    */
    public ?bool $async = null;
    
    /**
     * @var string|null $url 
    */
    public ?string $url = null;
    
    /**
     * Instantiates a new PurgeRequestBuilderPostQueryParameters and sets the default values.
     * @param bool|null $async 
     * @param string|null $url 
    */
    public function __construct(?bool $async = null, ?string $url = null) {
        $this->async = $async;
        $this->url = $url;
    }

}
