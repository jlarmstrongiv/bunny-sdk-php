<?php

namespace BunnyApiClient\Videolibrary;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VideolibraryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VideolibraryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VideolibraryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new VideolibraryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VideolibraryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VideolibraryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new VideolibraryRequestBuilderGetQueryParameters.
     * @param bool|null $includeAccessKey 
     * @param int|null $page 
     * @param int|null $perPage 
     * @param string|null $search The search term that will be used to filter the results
     * @return VideolibraryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $includeAccessKey = null, ?int $page = null, ?int $perPage = null, ?string $search = null): VideolibraryRequestBuilderGetQueryParameters {
        return new VideolibraryRequestBuilderGetQueryParameters($includeAccessKey, $page, $perPage, $search);
    }

}
