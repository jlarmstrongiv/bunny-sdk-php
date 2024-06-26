<?php

namespace StreamApiClient\Library\Item\Videos\Fetch;

/**
 * [FetchVideo API Docs](https://docs.bunny.net/reference/video_fetchnewvideo)
*/
class FetchRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $collectionId 
    */
    public ?string $collectionId = null;
    
    /**
     * @var int|null $thumbnailTime Video time in ms to extract the main video thumbnail.
    */
    public ?int $thumbnailTime = null;
    
    /**
     * Instantiates a new FetchRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $collectionId 
     * @param int|null $thumbnailTime Video time in ms to extract the main video thumbnail.
    */
    public function __construct(?string $collectionId = null, ?int $thumbnailTime = null) {
        $this->collectionId = $collectionId;
        $this->thumbnailTime = $thumbnailTime;
    }

}
