<?php

namespace BunnyLauncher\BunnySdk;

use BunnyApiClient\BunnyApiClient;
use EdgeStorageApiClient\EdgeStorageApiClient;
use StreamApiClient\StreamApiClient;
use Microsoft\Kiota\Authentication\ApiKeyAuthenticationProvider;
use Microsoft\Kiota\Authentication\KeyLocation;

use Microsoft\Kiota\Http\GuzzleRequestAdapter;

function createBunnyApiClient(string $accessKey): BunnyApiClient 
{
    $authProvider = new ApiKeyAuthenticationProvider(KeyLocation::Header, $accessKey, "AccessKey");
    $requestAdapter = new GuzzleRequestAdapter($authProvider);
    return new BunnyApiClient($requestAdapter);
}

function createEdgeStorageApiClient(string $accessKey): EdgeStorageApiClient 
{
    $authProvider = new ApiKeyAuthenticationProvider(KeyLocation::Header, $accessKey, "AccessKey");
    $requestAdapter = new GuzzleRequestAdapter($authProvider);
    return new EdgeStorageApiClient($requestAdapter);
}

function createStreamApiClient(string $accessKey): StreamApiClient 
{
    $authProvider = new ApiKeyAuthenticationProvider(KeyLocation::Header, $accessKey, "AccessKey");
    $requestAdapter = new GuzzleRequestAdapter($authProvider);
    return new StreamApiClient($requestAdapter);
}

?>
