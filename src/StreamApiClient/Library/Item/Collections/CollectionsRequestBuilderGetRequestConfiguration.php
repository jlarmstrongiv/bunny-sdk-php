<?php

namespace StreamApiClient\Library\Item\Collections;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CollectionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CollectionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CollectionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CollectionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CollectionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CollectionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CollectionsRequestBuilderGetQueryParameters.
     * @param bool|null $includeThumbnails 
     * @param int|null $itemsPerPage 
     * @param GetOrderByQueryParameterType|null $orderBy 
     * @param int|null $page 
     * @param string|null $search 
     * @return CollectionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $includeThumbnails = null, ?int $itemsPerPage = null, ?GetOrderByQueryParameterType $orderBy = null, ?int $page = null, ?string $search = null): CollectionsRequestBuilderGetQueryParameters {
        return new CollectionsRequestBuilderGetQueryParameters($includeThumbnails, $itemsPerPage, $orderBy, $page, $search);
    }

}
