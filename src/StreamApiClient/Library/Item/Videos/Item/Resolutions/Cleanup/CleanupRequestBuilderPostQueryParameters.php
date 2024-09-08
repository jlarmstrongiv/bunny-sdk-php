<?php

namespace StreamApiClient\Library\Item\Videos\Item\Resolutions\Cleanup;

/**
 * [CleanupUnconfiguredResolutions API Docs](https://docs.bunny.net/reference/video_deleteresolutions)
*/
class CleanupRequestBuilderPostQueryParameters 
{
    /**
     * @var bool|null $deleteMp4Files 
    */
    public ?bool $deleteMp4Files = null;
    
    /**
     * @var bool|null $deleteNonConfiguredResolutions 
    */
    public ?bool $deleteNonConfiguredResolutions = null;
    
    /**
     * @var bool|null $deleteOriginal 
    */
    public ?bool $deleteOriginal = null;
    
    /**
     * @var string|null $resolutionsToDelete 
    */
    public ?string $resolutionsToDelete = null;
    
    /**
     * Instantiates a new CleanupRequestBuilderPostQueryParameters and sets the default values.
     * @param bool|null $deleteMp4Files 
     * @param bool|null $deleteNonConfiguredResolutions 
     * @param bool|null $deleteOriginal 
     * @param string|null $resolutionsToDelete 
    */
    public function __construct(?bool $deleteMp4Files = null, ?bool $deleteNonConfiguredResolutions = null, ?bool $deleteOriginal = null, ?string $resolutionsToDelete = null) {
        $this->deleteMp4Files = $deleteMp4Files;
        $this->deleteNonConfiguredResolutions = $deleteNonConfiguredResolutions;
        $this->deleteOriginal = $deleteOriginal;
        $this->resolutionsToDelete = $resolutionsToDelete;
    }

}
