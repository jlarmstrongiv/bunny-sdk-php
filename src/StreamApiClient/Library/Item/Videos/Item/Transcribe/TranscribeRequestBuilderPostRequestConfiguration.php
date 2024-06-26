<?php

namespace StreamApiClient\Library\Item\Videos\Item\Transcribe;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TranscribeRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TranscribeRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?TranscribeRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TranscribeRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TranscribeRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TranscribeRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TranscribeRequestBuilderPostQueryParameters.
     * @param bool|null $force 
     * @param string|null $language 
     * @return TranscribeRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?bool $force = null, ?string $language = null): TranscribeRequestBuilderPostQueryParameters {
        return new TranscribeRequestBuilderPostQueryParameters($force, $language);
    }

}
