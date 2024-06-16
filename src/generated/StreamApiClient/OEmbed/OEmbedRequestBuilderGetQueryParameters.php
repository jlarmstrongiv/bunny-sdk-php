<?php

namespace StreamApiClient\OEmbed;

/**
 * [OEmbed API Docs](https://docs.bunny.net/reference/oembed_getoembed)
*/
class OEmbedRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $expires 
    */
    public ?int $expires = null;
    
    /**
     * @var int|null $maxHeight 
    */
    public ?int $maxHeight = null;
    
    /**
     * @var int|null $maxWidth 
    */
    public ?int $maxWidth = null;
    
    /**
     * @var string|null $token 
    */
    public ?string $token = null;
    
    /**
     * @var string|null $url 
    */
    public ?string $url = null;
    
    /**
     * Instantiates a new OEmbedRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $expires 
     * @param int|null $maxHeight 
     * @param int|null $maxWidth 
     * @param string|null $token 
     * @param string|null $url 
    */
    public function __construct(?int $expires = null, ?int $maxHeight = null, ?int $maxWidth = null, ?string $token = null, ?string $url = null) {
        $this->expires = $expires;
        $this->maxHeight = $maxHeight;
        $this->maxWidth = $maxWidth;
        $this->token = $token;
        $this->url = $url;
    }

}
