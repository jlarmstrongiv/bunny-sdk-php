<?php

namespace StreamApiClient\Library\Item\Collections\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithCollectionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithCollectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithCollectionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithCollectionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithCollectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithCollectionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithCollectionItemRequestBuilderGetQueryParameters.
     * @param bool|null $includeThumbnails 
     * @return WithCollectionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $includeThumbnails = null): WithCollectionItemRequestBuilderGetQueryParameters {
        return new WithCollectionItemRequestBuilderGetQueryParameters($includeThumbnails);
    }

}
