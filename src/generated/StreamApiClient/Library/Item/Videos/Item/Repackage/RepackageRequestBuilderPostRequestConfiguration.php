<?php

namespace StreamApiClient\Library\Item\Videos\Item\Repackage;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RepackageRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RepackageRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?RepackageRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RepackageRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RepackageRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RepackageRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RepackageRequestBuilderPostQueryParameters.
     * @param bool|null $keepOriginalFiles Marks whether previous file versions should be kept in storage, allows for faster repackage later on. Default is true.
     * @return RepackageRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?bool $keepOriginalFiles = null): RepackageRequestBuilderPostQueryParameters {
        return new RepackageRequestBuilderPostQueryParameters($keepOriginalFiles);
    }

}
