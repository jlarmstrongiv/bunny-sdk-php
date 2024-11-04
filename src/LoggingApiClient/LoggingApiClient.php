<?php

namespace LoggingApiClient;

use LoggingApiClient\WithMmWithDdWithYy\WithMmWithDdWithYyRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Serialization\Form\FormParseNodeFactory;
use Microsoft\Kiota\Serialization\Form\FormSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Multipart\MultipartSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
*/
class LoggingApiClient extends BaseRequestBuilder 
{
    /**
     * Instantiates a new LoggingApiClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}');
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(FormSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(MultipartSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(FormParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://logging.bunnycdn.com');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

    /**
     * Builds and executes requests for operations under /{mm}-{dd}-{yy}
     * @param string $dd The path parameter: dd
     * @param string $mm The path parameter: mm
     * @param string $yy The path parameter: yy
     * @return WithMmWithDdWithYyRequestBuilder
    */
    public function withMmWithDdWithYy(string $dd, string $mm, string $yy): WithMmWithDdWithYyRequestBuilder {
        return new WithMmWithDdWithYyRequestBuilder($this->pathParameters, $this->requestAdapter, $dd, $mm, $yy);
    }

}
