<?php

namespace BunnyApiClient\Pullzone\LoadFreeCertificate;

/**
 * [LoadFreeCertificate API Docs](https://docs.bunny.net/reference/pullzonepublic_loadfreecertificate)
*/
class LoadFreeCertificateRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $hostname The hostname that the certificate will be loaded for
    */
    public ?string $hostname = null;
    
    /**
     * Instantiates a new LoadFreeCertificateRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $hostname The hostname that the certificate will be loaded for
    */
    public function __construct(?string $hostname = null) {
        $this->hostname = $hostname;
    }

}
