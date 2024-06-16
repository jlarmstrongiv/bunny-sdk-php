<?php

namespace StreamApiClient\Library\Item\Videos\Fetch;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FetchRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FetchRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?FetchRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FetchRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FetchRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FetchRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FetchRequestBuilderPostQueryParameters.
     * @param string|null $collectionId 
     * @param int|null $thumbnailTime Video time in ms to extract the main video thumbnail.
     * @return FetchRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $collectionId = null, ?int $thumbnailTime = null): FetchRequestBuilderPostQueryParameters {
        return new FetchRequestBuilderPostQueryParameters($collectionId, $thumbnailTime);
    }

}
