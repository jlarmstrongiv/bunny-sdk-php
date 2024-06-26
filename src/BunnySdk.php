<?php

namespace BunnyLauncher\BunnySdk;

use BunnyApiClient\BunnyApiClient;
use EdgeStorageApiClient\EdgeStorageApiClient;
use StreamApiClient\StreamApiClient;
use LoggingApiClient\LoggingApiClient;
use Microsoft\Kiota\Authentication\ApiKeyAuthenticationProvider;
use Microsoft\Kiota\Authentication\KeyLocation;

use Microsoft\Kiota\Http\GuzzleRequestAdapter;

function create_bunny_api_client(string $accessKey): BunnyApiClient
{
  $authProvider = new ApiKeyAuthenticationProvider(KeyLocation::Header, $accessKey, "AccessKey");
  $requestAdapter = new GuzzleRequestAdapter($authProvider);
  return new BunnyApiClient($requestAdapter);
}

function create_edge_storage_api_client(string $accessKey): EdgeStorageApiClient
{
  $authProvider = new ApiKeyAuthenticationProvider(KeyLocation::Header, $accessKey, "AccessKey");
  $requestAdapter = new GuzzleRequestAdapter($authProvider);
  return new EdgeStorageApiClient($requestAdapter);
}

function create_stream_api_client(string $accessKey): StreamApiClient
{
  $authProvider = new ApiKeyAuthenticationProvider(KeyLocation::Header, $accessKey, "AccessKey");
  $requestAdapter = new GuzzleRequestAdapter($authProvider);
  return new StreamApiClient($requestAdapter);
}

function create_logging_api_client(string $accessKey): LoggingApiClient
{
  $authProvider = new ApiKeyAuthenticationProvider(KeyLocation::Header, $accessKey, "AccessKey");
  $requestAdapter = new GuzzleRequestAdapter($authProvider);
  return new LoggingApiClient($requestAdapter);
}
