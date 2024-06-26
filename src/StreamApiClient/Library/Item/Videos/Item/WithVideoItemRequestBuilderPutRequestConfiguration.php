<?php

namespace StreamApiClient\Library\Item\Videos\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithVideoItemRequestBuilderPutRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithVideoItemRequestBuilderPutQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithVideoItemRequestBuilderPutQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithVideoItemRequestBuilderPutRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithVideoItemRequestBuilderPutQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithVideoItemRequestBuilderPutQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithVideoItemRequestBuilderPutQueryParameters.
     * @param string|null $enabledResolutions 
     * @return WithVideoItemRequestBuilderPutQueryParameters
    */
    public static function createQueryParameters(?string $enabledResolutions = null): WithVideoItemRequestBuilderPutQueryParameters {
        return new WithVideoItemRequestBuilderPutQueryParameters($enabledResolutions);
    }

}
