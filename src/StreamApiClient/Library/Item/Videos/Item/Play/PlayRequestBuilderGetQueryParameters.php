<?php

namespace StreamApiClient\Library\Item\Videos\Item\Play;

/**
 * [GetVideoPlayData API Docs](https://docs.bunny.net/reference/video_getvideoplaydata)
*/
class PlayRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $expires 
    */
    public ?int $expires = null;
    
    /**
     * @var string|null $token 
    */
    public ?string $token = null;
    
    /**
     * Instantiates a new PlayRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $expires 
     * @param string|null $token 
    */
    public function __construct(?int $expires = null, ?string $token = null) {
        $this->expires = $expires;
        $this->token = $token;
    }

}
