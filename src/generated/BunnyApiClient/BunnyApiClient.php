<?php

namespace BunnyApiClient;

use BunnyApiClient\Apikey\ApikeyRequestBuilder;
use BunnyApiClient\Country\CountryRequestBuilder;
use BunnyApiClient\Dnszone\DnszoneRequestBuilder;
use BunnyApiClient\Pullzone\PullzoneRequestBuilder;
use BunnyApiClient\Purge\PurgeRequestBuilder;
use BunnyApiClient\Region\RegionRequestBuilder;
use BunnyApiClient\Statistics\StatisticsRequestBuilder;
use BunnyApiClient\Storagezone\StoragezoneRequestBuilder;
use BunnyApiClient\Videolibrary\VideolibraryRequestBuilder;
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
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriterFactory;

/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
*/
class BunnyApiClient extends BaseRequestBuilder 
{
    /**
     * The apikey property
    */
    public function apikey(): ApikeyRequestBuilder {
        return new ApikeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The country property
    */
    public function country(): CountryRequestBuilder {
        return new CountryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dnszone property
    */
    public function dnszone(): DnszoneRequestBuilder {
        return new DnszoneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The pullzone property
    */
    public function pullzone(): PullzoneRequestBuilder {
        return new PullzoneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The purge property
    */
    public function purge(): PurgeRequestBuilder {
        return new PurgeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The region property
    */
    public function region(): RegionRequestBuilder {
        return new RegionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The statistics property
    */
    public function statistics(): StatisticsRequestBuilder {
        return new StatisticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The storagezone property
    */
    public function storagezone(): StoragezoneRequestBuilder {
        return new StoragezoneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The videolibrary property
    */
    public function videolibrary(): VideolibraryRequestBuilder {
        return new VideolibraryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new BunnyApiClient and sets the default values.
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
            $this->requestAdapter->setBaseUrl('https://api.bunny.net');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

}
