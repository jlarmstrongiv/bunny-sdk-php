<?php

namespace BunnyApiClient\Search;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SearchRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SearchRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SearchRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SearchRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SearchRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SearchRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SearchRequestBuilderGetQueryParameters.
     * @param int|null $from The number of results skipped in the search query
     * @param string|null $search The input query for the search request
     * @param int|null $size The size of the result set
     * @return SearchRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $from = null, ?string $search = null, ?int $size = null): SearchRequestBuilderGetQueryParameters {
        return new SearchRequestBuilderGetQueryParameters($from, $search, $size);
    }

}
