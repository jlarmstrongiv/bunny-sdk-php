<?php

namespace StreamApiClient\Library\Item\Videos\Item;

/**
 * [UploadVideo API Docs](https://docs.bunny.net/reference/video_uploadvideo)
*/
class WithVideoItemRequestBuilderPutQueryParameters 
{
    /**
     * @var string|null $enabledResolutions 
    */
    public ?string $enabledResolutions = null;
    
    /**
     * Instantiates a new WithVideoItemRequestBuilderPutQueryParameters and sets the default values.
     * @param string|null $enabledResolutions 
    */
    public function __construct(?string $enabledResolutions = null) {
        $this->enabledResolutions = $enabledResolutions;
    }

}
