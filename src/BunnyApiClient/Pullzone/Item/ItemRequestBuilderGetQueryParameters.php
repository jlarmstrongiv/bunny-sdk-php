<?php

namespace BunnyApiClient\Pullzone\Item;

/**
 * [GetPullZone API Docs](https://docs.bunny.net/reference/pullzonepublic_index2)
*/
class ItemRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $includeCertificate Determines if the result hostnames should contain the SSL certificate
    */
    public ?bool $includeCertificate = null;
    
    /**
     * Instantiates a new ItemRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $includeCertificate Determines if the result hostnames should contain the SSL certificate
    */
    public function __construct(?bool $includeCertificate = null) {
        $this->includeCertificate = $includeCertificate;
    }

}
