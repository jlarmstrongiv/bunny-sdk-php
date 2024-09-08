<?php

namespace BunnyApiClient\Compute\Script\Item\Publish;

/**
 * [PublishComputeScript API Docs](https://docs.bunny.net/reference/computeedgescriptpublic_publish)
*/
class PublishRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $uuid The UUID of the script release that will be published
    */
    public ?string $uuid = null;
    
    /**
     * Instantiates a new PublishRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $uuid The UUID of the script release that will be published
    */
    public function __construct(?string $uuid = null) {
        $this->uuid = $uuid;
    }

}
