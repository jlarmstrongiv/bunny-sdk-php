<?php

namespace BunnyApiClient\Pullzone\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ItemRequestBuilderGetQueryParameters.
     * @param bool|null $includeCertificate Determines if the result hostnames should contain the SSL certificate
     * @return ItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $includeCertificate = null): ItemRequestBuilderGetQueryParameters {
        return new ItemRequestBuilderGetQueryParameters($includeCertificate);
    }

}
