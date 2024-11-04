<?php

namespace LoggingApiClient\WithMmWithDdWithYy;

use LoggingApiClient\WithMmWithDdWithYy\WithPullZoneIdLog\WithPullZoneIdLogRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /{mm}-{dd}-{yy}
*/
class WithMmWithDdWithYyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithMmWithDdWithYyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $dd The path parameter: dd
     * @param string|null $mm The path parameter: mm
     * @param string|null $yy The path parameter: yy
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $dd = null, ?string $mm = null, ?string $yy = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/{mm}-{dd}-{yy}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['dd'] = $dd;
            $urlTplParams['mm'] = $mm;
            $urlTplParams['yy'] = $yy;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Builds and executes requests for operations under /{mm}-{dd}-{yy}/{pullZoneId}.log
     * @param int $pullZoneId The path parameter: pullZoneId
     * @return WithPullZoneIdLogRequestBuilder
    */
    public function withPullZoneIdLog(int $pullZoneId): WithPullZoneIdLogRequestBuilder {
        return new WithPullZoneIdLogRequestBuilder($this->pathParameters, $this->requestAdapter, $pullZoneId);
    }

}
