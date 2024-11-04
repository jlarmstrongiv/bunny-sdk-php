<?php

namespace StreamApiClient\Library\Item\Videos\Item\Transcribe;

/**
 * [TranscribeVideo API Docs](https://docs.bunny.net/reference/video_transcribevideo)
*/
class TranscribeRequestBuilderPostQueryParameters 
{
    /**
     * @var bool|null $force 
    */
    public ?bool $force = null;
    
    /**
     * @var string|null $language Video source language, use ISO 639-1 language code
    */
    public ?string $language = null;
    
    /**
     * Instantiates a new TranscribeRequestBuilderPostQueryParameters and sets the default values.
     * @param bool|null $force 
     * @param string|null $language Video source language, use ISO 639-1 language code
    */
    public function __construct(?bool $force = null, ?string $language = null) {
        $this->force = $force;
        $this->language = $language;
    }

}
