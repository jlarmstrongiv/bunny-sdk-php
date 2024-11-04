<?php

namespace EdgeStorageApiClient;

use EdgeStorageApiClient\Item\WithStorageZoneNameItemRequestBuilder;
use EdgeStorageApiClient\Item\WithStorageZoneNameSlashRequestBuilder;
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
class EdgeStorageApiClient extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EdgeStorageApiClient.item collection
     * @param string $storageZoneName the name of your storage zone where you are connecting to.
     * @return WithStorageZoneNameItemRequestBuilder
    */
    public function byStorageZoneName(string $storageZoneName): WithStorageZoneNameItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['storageZoneName'] = $storageZoneName;
        return new WithStorageZoneNameItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EdgeStorageApiClient and sets the default values.
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
            $this->requestAdapter->setBaseUrl('https://{region}.bunnycdn.com');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

    /**
     * Builds and executes requests for operations under /{storageZoneName}/
     * @param string $storageZoneName The name of your storage zone where you are connecting to.
     * @return WithStorageZoneNameSlashRequestBuilder
    */
    public function withStorageZoneNameSlash(string $storageZoneName): WithStorageZoneNameSlashRequestBuilder {
        return new WithStorageZoneNameSlashRequestBuilder($this->pathParameters, $this->requestAdapter, $storageZoneName);
    }

}
