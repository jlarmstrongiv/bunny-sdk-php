<?php

namespace BunnyApiClient\Storagezone\ResetReadOnlyPassword;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResetReadOnlyPasswordRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ResetReadOnlyPasswordRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResetReadOnlyPasswordRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ResetReadOnlyPasswordRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ResetReadOnlyPasswordRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ResetReadOnlyPasswordRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ResetReadOnlyPasswordRequestBuilderPostQueryParameters.
     * @param int|null $id 
     * @return ResetReadOnlyPasswordRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?int $id = null): ResetReadOnlyPasswordRequestBuilderPostQueryParameters {
        return new ResetReadOnlyPasswordRequestBuilderPostQueryParameters($id);
    }

}
