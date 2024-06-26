<?php

namespace BunnyApiClient\Purge;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PurgeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PurgeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PurgeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PurgeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PurgeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PurgeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PurgeRequestBuilderGetQueryParameters.
     * @param bool|null $async 
     * @param string|null $headerName 
     * @param string|null $headerValue 
     * @param string|null $url 
     * @return PurgeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $async = null, ?string $headerName = null, ?string $headerValue = null, ?string $url = null): PurgeRequestBuilderGetQueryParameters {
        return new PurgeRequestBuilderGetQueryParameters($async, $headerName, $headerValue, $url);
    }

}
