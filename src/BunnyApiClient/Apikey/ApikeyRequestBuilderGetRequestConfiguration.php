<?php

namespace BunnyApiClient\Apikey;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApikeyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ApikeyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApikeyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ApikeyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApikeyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApikeyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApikeyRequestBuilderGetQueryParameters.
     * @param int|null $page 
     * @param int|null $perPage 
     * @return ApikeyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page = null, ?int $perPage = null): ApikeyRequestBuilderGetQueryParameters {
        return new ApikeyRequestBuilderGetQueryParameters($page, $perPage);
    }

}
