<?php

namespace BunnyApiClient\Abusecase;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AbusecaseRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AbusecaseRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AbusecaseRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AbusecaseRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AbusecaseRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AbusecaseRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AbusecaseRequestBuilderGetQueryParameters.
     * @param int|null $page 
     * @param int|null $perPage 
     * @return AbusecaseRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page = null, ?int $perPage = null): AbusecaseRequestBuilderGetQueryParameters {
        return new AbusecaseRequestBuilderGetQueryParameters($page, $perPage);
    }

}
