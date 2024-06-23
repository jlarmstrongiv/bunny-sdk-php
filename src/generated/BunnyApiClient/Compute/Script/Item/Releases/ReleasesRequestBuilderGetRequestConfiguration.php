<?php

namespace BunnyApiClient\Compute\Script\Item\Releases;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReleasesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReleasesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReleasesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReleasesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReleasesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReleasesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReleasesRequestBuilderGetQueryParameters.
     * @param int|null $page 
     * @param int|null $perPage 
     * @return ReleasesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page = null, ?int $perPage = null): ReleasesRequestBuilderGetQueryParameters {
        return new ReleasesRequestBuilderGetQueryParameters($page, $perPage);
    }

}
