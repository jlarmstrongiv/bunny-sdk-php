<?php

namespace StreamApiClient\Library\Item\Videos\Item\Repackage;

/**
 * [RepackageVideo API Docs](https://docs.bunny.net/reference/video_repackage)
*/
class RepackageRequestBuilderPostQueryParameters 
{
    /**
     * @var bool|null $keepOriginalFiles Marks whether previous file versions should be kept in storage, allows for faster repackage later on. Default is true.
    */
    public ?bool $keepOriginalFiles = null;
    
    /**
     * Instantiates a new RepackageRequestBuilderPostQueryParameters and sets the default values.
     * @param bool|null $keepOriginalFiles Marks whether previous file versions should be kept in storage, allows for faster repackage later on. Default is true.
    */
    public function __construct(?bool $keepOriginalFiles = null) {
        $this->keepOriginalFiles = $keepOriginalFiles;
    }

}
