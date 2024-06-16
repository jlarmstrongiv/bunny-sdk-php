<?php

namespace BunnyApiClient\Storagezone;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class StoragezoneRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var StoragezoneRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?StoragezoneRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new StoragezoneRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param StoragezoneRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?StoragezoneRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new StoragezoneRequestBuilderGetQueryParameters.
     * @param bool|null $includeDeleted 
     * @param int|null $page 
     * @param int|null $perPage 
     * @param string|null $search 
     * @return StoragezoneRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $includeDeleted = null, ?int $page = null, ?int $perPage = null, ?string $search = null): StoragezoneRequestBuilderGetQueryParameters {
        return new StoragezoneRequestBuilderGetQueryParameters($includeDeleted, $page, $perPage, $search);
    }

}
