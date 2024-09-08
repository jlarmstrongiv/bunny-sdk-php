<?php

namespace BunnyApiClient\Compute\Script\Item\Publish;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PublishRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PublishRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?PublishRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PublishRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PublishRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PublishRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PublishRequestBuilderPostQueryParameters.
     * @param string|null $uuid The UUID of the script release that will be published
     * @return PublishRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $uuid = null): PublishRequestBuilderPostQueryParameters {
        return new PublishRequestBuilderPostQueryParameters($uuid);
    }

}
