<?php

namespace StreamApiClient\Library\Item\Videos\Item\Resolutions\Cleanup;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CleanupRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CleanupRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?CleanupRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CleanupRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CleanupRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CleanupRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CleanupRequestBuilderPostQueryParameters.
     * @param bool|null $deleteMp4Files 
     * @param bool|null $deleteNonConfiguredResolutions 
     * @param bool|null $deleteOriginal 
     * @param string|null $resolutionsToDelete 
     * @return CleanupRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?bool $deleteMp4Files = null, ?bool $deleteNonConfiguredResolutions = null, ?bool $deleteOriginal = null, ?string $resolutionsToDelete = null): CleanupRequestBuilderPostQueryParameters {
        return new CleanupRequestBuilderPostQueryParameters($deleteMp4Files, $deleteNonConfiguredResolutions, $deleteOriginal, $resolutionsToDelete);
    }

}
