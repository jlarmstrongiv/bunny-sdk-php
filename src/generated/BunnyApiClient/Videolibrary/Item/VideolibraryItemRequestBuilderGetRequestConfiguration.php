<?php

namespace BunnyApiClient\Videolibrary\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VideolibraryItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VideolibraryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VideolibraryItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new VideolibraryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VideolibraryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VideolibraryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new VideolibraryItemRequestBuilderGetQueryParameters.
     * @param bool|null $includeAccessKey 
     * @return VideolibraryItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $includeAccessKey = null): VideolibraryItemRequestBuilderGetQueryParameters {
        return new VideolibraryItemRequestBuilderGetQueryParameters($includeAccessKey);
    }

}
