<?php

namespace BunnyLauncher;

use BunnyApiClient\BunnyApiClient;
use EdgeStorageApiClient\EdgeStorageApiClient;
use StreamApiClient\StreamApiClient;
use LoggingApiClient\LoggingApiClient;
use Microsoft\Kiota\Authentication\ApiKeyAuthenticationProvider;
use Microsoft\Kiota\Authentication\KeyLocation;

use Microsoft\Kiota\Http\GuzzleRequestAdapter;

class BunnySdk {
  private function __construct() {}

  public static function createBunnyApiClient(string $accessKey): BunnyApiClient {
    $authProvider = new ApiKeyAuthenticationProvider(KeyLocation::Header, $accessKey, "AccessKey");
    $requestAdapter = new GuzzleRequestAdapter($authProvider);
    return new BunnyApiClient($requestAdapter);
  }
  
  public static function createEdgeStorageApiClient(string $accessKey): EdgeStorageApiClient {
    $authProvider = new ApiKeyAuthenticationProvider(KeyLocation::Header, $accessKey, "AccessKey");
    $requestAdapter = new GuzzleRequestAdapter($authProvider);
    return new EdgeStorageApiClient($requestAdapter);
  }
  
  public static function createStreamApiClient(string $accessKey): StreamApiClient {
    $authProvider = new ApiKeyAuthenticationProvider(KeyLocation::Header, $accessKey, "AccessKey");
    $requestAdapter = new GuzzleRequestAdapter($authProvider);
    return new StreamApiClient($requestAdapter);
  }
  
  public static function createLoggingApiClient(string $accessKey): LoggingApiClient {
    $authProvider = new ApiKeyAuthenticationProvider(KeyLocation::Header, $accessKey, "AccessKey");
    $requestAdapter = new GuzzleRequestAdapter($authProvider);
    return new LoggingApiClient($requestAdapter);
  }
}

