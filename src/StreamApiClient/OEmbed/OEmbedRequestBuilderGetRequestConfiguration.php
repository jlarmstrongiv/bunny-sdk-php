<?php

namespace StreamApiClient\OEmbed;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OEmbedRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OEmbedRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OEmbedRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OEmbedRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OEmbedRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OEmbedRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OEmbedRequestBuilderGetQueryParameters.
     * @param int|null $expires 
     * @param int|null $maxHeight 
     * @param int|null $maxWidth 
     * @param string|null $token 
     * @param string|null $url 
     * @return OEmbedRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $expires = null, ?int $maxHeight = null, ?int $maxWidth = null, ?string $token = null, ?string $url = null): OEmbedRequestBuilderGetQueryParameters {
        return new OEmbedRequestBuilderGetQueryParameters($expires, $maxHeight, $maxWidth, $token, $url);
    }

}
