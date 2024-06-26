<?php

namespace StreamApiClient\Library\Item\Videos\Item\Thumbnail;

/**
 * [SetThumbnail API Docs](https://docs.bunny.net/reference/video_setthumbnail)
*/
class ThumbnailRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $thumbnailUrl 
    */
    public ?string $thumbnailUrl = null;
    
    /**
     * Instantiates a new ThumbnailRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $thumbnailUrl 
    */
    public function __construct(?string $thumbnailUrl = null) {
        $this->thumbnailUrl = $thumbnailUrl;
    }

}
