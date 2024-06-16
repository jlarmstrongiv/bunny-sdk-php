<?php

namespace BunnyApiClient\Videolibrary\ResetApiKey;

/**
 * [ResetPasswordQuery API Docs](https://docs.bunny.net/reference/videolibrarypublic_resetpassword)
*/
class ResetApiKeyRequestBuilderPostQueryParameters 
{
    /**
     * @var int|null $id The ID of the Video Library that should have the password reset
    */
    public ?int $id = null;
    
    /**
     * Instantiates a new ResetApiKeyRequestBuilderPostQueryParameters and sets the default values.
     * @param int|null $id The ID of the Video Library that should have the password reset
    */
    public function __construct(?int $id = null) {
        $this->id = $id;
    }

}
