<?php

namespace StreamApiClient\Library\Item\Videos\Item\Play;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PlayRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PlayRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PlayRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PlayRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PlayRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PlayRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PlayRequestBuilderGetQueryParameters.
     * @param int|null $expires 
     * @param string|null $token 
     * @return PlayRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $expires = null, ?string $token = null): PlayRequestBuilderGetQueryParameters {
        return new PlayRequestBuilderGetQueryParameters($expires, $token);
    }

}
