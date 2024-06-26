<?php

namespace StreamApiClient\Library\Item\Videos\Item\Thumbnail;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ThumbnailRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ThumbnailRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?ThumbnailRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ThumbnailRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ThumbnailRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ThumbnailRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ThumbnailRequestBuilderPostQueryParameters.
     * @param string|null $thumbnailUrl 
     * @return ThumbnailRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $thumbnailUrl = null): ThumbnailRequestBuilderPostQueryParameters {
        return new ThumbnailRequestBuilderPostQueryParameters($thumbnailUrl);
    }

}
