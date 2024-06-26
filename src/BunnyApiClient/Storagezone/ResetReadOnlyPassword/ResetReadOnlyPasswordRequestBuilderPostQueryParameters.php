<?php

namespace BunnyApiClient\Storagezone\ResetReadOnlyPassword;

/**
 * [ResetReadOnlyPassword API Docs](https://docs.bunny.net/reference/storagezonepublic_resetreadonlypassword)
*/
class ResetReadOnlyPasswordRequestBuilderPostQueryParameters 
{
    /**
     * @var int|null $id 
    */
    public ?int $id = null;
    
    /**
     * Instantiates a new ResetReadOnlyPasswordRequestBuilderPostQueryParameters and sets the default values.
     * @param int|null $id 
    */
    public function __construct(?int $id = null) {
        $this->id = $id;
    }

}
