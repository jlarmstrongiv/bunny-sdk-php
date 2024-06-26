<?php

namespace BunnyApiClient\Purge;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PurgeRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PurgeRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?PurgeRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PurgeRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PurgeRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PurgeRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PurgeRequestBuilderPostQueryParameters.
     * @param bool|null $async 
     * @param string|null $url 
     * @return PurgeRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?bool $async = null, ?string $url = null): PurgeRequestBuilderPostQueryParameters {
        return new PurgeRequestBuilderPostQueryParameters($async, $url);
    }

}
