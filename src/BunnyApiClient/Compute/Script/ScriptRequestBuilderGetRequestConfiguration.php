<?php

namespace BunnyApiClient\Compute\Script;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ScriptRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ScriptRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ScriptRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ScriptRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ScriptRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ScriptRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ScriptRequestBuilderGetQueryParameters.
     * @param int|null $page 
     * @param int|null $perPage 
     * @param string|null $search The search term that will be used to filter the results
     * @return ScriptRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page = null, ?int $perPage = null, ?string $search = null): ScriptRequestBuilderGetQueryParameters {
        return new ScriptRequestBuilderGetQueryParameters($page, $perPage, $search);
    }

}
