<?php

namespace BunnyApiClient\Videolibrary\ResetApiKey;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResetApiKeyRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ResetApiKeyRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResetApiKeyRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ResetApiKeyRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ResetApiKeyRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ResetApiKeyRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ResetApiKeyRequestBuilderPostQueryParameters.
     * @param int|null $id The ID of the Video Library that should have the password reset
     * @return ResetApiKeyRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?int $id = null): ResetApiKeyRequestBuilderPostQueryParameters {
        return new ResetApiKeyRequestBuilderPostQueryParameters($id);
    }

}
