<?php

namespace BunnyApiClient\Models\PullZone;

use BunnyApiClient\Models\PullZone\EdgeRule\EdgeRule;
use BunnyApiClient\Models\PullZone\Optimizer\OptimizerClass;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PullZoneCreate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string>|null $accessControlOriginHeaderExtensions The list of extensions that will return the CORS headers
    */
    private ?array $accessControlOriginHeaderExtensions = null;
    
    /**
     * @var bool|null $addCanonicalHeader Determines if the Add Canonical Header is enabled for this Pull Zone
    */
    private ?bool $addCanonicalHeader = null;
    
    /**
     * @var bool|null $addHostHeader Determines if the Pull Zone should forward the current hostname to the origin
    */
    private ?bool $addHostHeader = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $allowedReferrers The list of referrer hostnames that are allowed to access the pull zone.Requests containing the header Referer: hostname that is not on the list will be rejected.If empty, all the referrers are allowed
    */
    private ?array $allowedReferrers = null;
    
    /**
     * @var bool|null $aWSSigningEnabled Determines if the AWS Signing is enabled
    */
    private ?bool $aWSSigningEnabled = null;
    
    /**
     * @var string|null $aWSSigningKey The AWS Signing region key
    */
    private ?string $aWSSigningKey = null;
    
    /**
     * @var string|null $aWSSigningRegionName The AWS Signing region name
    */
    private ?string $aWSSigningRegionName = null;
    
    /**
     * @var string|null $aWSSigningSecret The AWS Signing region secret
    */
    private ?string $aWSSigningSecret = null;
    
    /**
     * @var array<string>|null $blockedCountries The list of blocked countries with the two-letter Alpha2 ISO codes
    */
    private ?array $blockedCountries = null;
    
    /**
     * @var array<string>|null $blockedIps The list of IPs that are blocked from accessing the pull zone. Requests coming from the following IPs will be rejected. If empty, all the IPs will be allowed
    */
    private ?array $blockedIps = null;
    
    /**
     * @var array<string>|null $blockedReferrers The list of referrer hostnames that are not allowed to access the pull zone. Requests containing the header Referer: hostname that is on the list will be rejected. If empty, all the referrers are allowed
    */
    private ?array $blockedReferrers = null;
    
    /**
     * @var bool|null $blockNoneReferrer The BlockNoneReferrer property
    */
    private ?bool $blockNoneReferrer = null;
    
    /**
     * @var bool|null $blockPostRequests If true, POST requests to the zone will be blocked
    */
    private ?bool $blockPostRequests = null;
    
    /**
     * @var bool|null $blockRootPathAccess If true, access to root path will return a 403 error
    */
    private ?bool $blockRootPathAccess = null;
    
    /**
     * @var array<string>|null $budgetRedirectedCountries The list of budget redirected countries with the two-letter Alpha2 ISO codes
    */
    private ?array $budgetRedirectedCountries = null;
    
    /**
     * @var array<BunnyAiImageBlueprint>|null $bunnyAiImageBlueprints The BunnyAiImageBlueprints property
    */
    private ?array $bunnyAiImageBlueprints = null;
    
    /**
     * @var int|null $burstSize Excessive requests are delayed until their number exceeds the maximum burst size.
    */
    private ?int $burstSize = null;
    
    /**
     * @var int|null $cacheControlBrowserMaxAgeOverride Sets the browser cache control override setting for this zone
    */
    private ?int $cacheControlBrowserMaxAgeOverride = null;
    
    /**
     * @var int|null $cacheControlMaxAgeOverride The override cache time for the pull zone
    */
    private ?int $cacheControlMaxAgeOverride = null;
    
    /**
     * @var int|null $cacheControlPublicMaxAgeOverride The override cache time for the pull zone for the end client
    */
    private ?int $cacheControlPublicMaxAgeOverride = null;
    
    /**
     * @var bool|null $cacheErrorResponses Determines if bunny.net should be caching error responses
    */
    private ?bool $cacheErrorResponses = null;
    
    /**
     * @var int|null $connectionLimitPerIPCount The number of connections limited per IP for this zone
    */
    private ?int $connectionLimitPerIPCount = null;
    
    /**
     * @var array<string>|null $cookieVaryParameters Contains the list of vary parameters that will be used for vary cache by cookie string. If empty, cookie vary will not be used.
    */
    private ?array $cookieVaryParameters = null;
    
    /**
     * @var bool|null $disableCookies Determines if the cookies are disabled for the pull zone
    */
    private ?bool $disableCookies = null;
    
    /**
     * @var bool|null $disableLetsEncrypt If true, the built-in let's encrypt is disabled and requests are passed to the origin.
    */
    private ?bool $disableLetsEncrypt = null;
    
    /**
     * @var int|null $dnsOriginPort Determines the origin port of the pull zone.
    */
    private ?int $dnsOriginPort = null;
    
    /**
     * @var string|null $dnsOriginScheme Determines the origin scheme of the pull zone.
    */
    private ?string $dnsOriginScheme = null;
    
    /**
     * @var array<EdgeRule>|null $edgeRules The list of edge rules on this Pull Zone
    */
    private ?array $edgeRules = null;
    
    /**
     * @var float|null $edgeScriptExecutionPhase The EdgeScriptExecutionPhase property
    */
    private ?float $edgeScriptExecutionPhase = null;
    
    /**
     * @var int|null $edgeScriptId The ID of the edge script that the pull zone is linked to
    */
    private ?int $edgeScriptId = null;
    
    /**
     * @var bool|null $enableAccessControlOriginHeader Determines if the CORS headers should be enabled
    */
    private ?bool $enableAccessControlOriginHeader = null;
    
    /**
     * @var bool|null $enableAutoSSL If set to true, any hostnames added to this Pull Zone will automatically enable SSL.
    */
    private ?bool $enableAutoSSL = null;
    
    /**
     * @var bool|null $enableAvifVary Determines if the AVIF Vary feature is enabled.
    */
    private ?bool $enableAvifVary = null;
    
    /**
     * @var bool|null $enableBunnyImageAi The EnableBunnyImageAi property
    */
    private ?bool $enableBunnyImageAi = null;
    
    /**
     * @var bool|null $enableCacheSlice Determines if the cache slice (Optimize for video) feature is enabled for the Pull Zone
    */
    private ?bool $enableCacheSlice = null;
    
    /**
     * @var bool|null $enableCookieVary Determines if the Cookie Vary feature is enabled.
    */
    private ?bool $enableCookieVary = null;
    
    /**
     * @var bool|null $enableCountryCodeVary Determines if the Country Code Vary feature is enabled.
    */
    private ?bool $enableCountryCodeVary = null;
    
    /**
     * @var bool|null $enableGeoZoneAF Determines if the delivery from the Africa region is enabled for this pull zone
    */
    private ?bool $enableGeoZoneAF = null;
    
    /**
     * @var bool|null $enableGeoZoneASIA Determines if the delivery from the Asian / Oceanian region is enabled for this pull zone
    */
    private ?bool $enableGeoZoneASIA = null;
    
    /**
     * @var bool|null $enableGeoZoneEU Determines if the delivery from the European region is enabled for this pull zone
    */
    private ?bool $enableGeoZoneEU = null;
    
    /**
     * @var bool|null $enableGeoZoneSA Determines if the delivery from the South American region is enabled for this pull zone
    */
    private ?bool $enableGeoZoneSA = null;
    
    /**
     * @var bool|null $enableGeoZoneUS Determines if the delivery from the North American region is enabled for this pull zone
    */
    private ?bool $enableGeoZoneUS = null;
    
    /**
     * @var bool|null $enableHostnameVary Determines if the Hostname Vary feature is enabled.
    */
    private ?bool $enableHostnameVary = null;
    
    /**
     * @var bool|null $enableLogging Determines if the logging is enabled for this Pull Zone
    */
    private ?bool $enableLogging = null;
    
    /**
     * @var bool|null $enableMobileVary Determines if the Mobile Vary feature is enabled.
    */
    private ?bool $enableMobileVary = null;
    
    /**
     * @var bool|null $enableOriginShield If true the server will use the origin shield feature
    */
    private ?bool $enableOriginShield = null;
    
    /**
     * @var bool|null $enableQueryStringOrdering If set to true the query string ordering property is enabled.
    */
    private ?bool $enableQueryStringOrdering = null;
    
    /**
     * @var bool|null $enableRequestCoalescing Determines if request coalescing is currently enabled.
    */
    private ?bool $enableRequestCoalescing = null;
    
    /**
     * @var bool|null $enableSafeHop The EnableSafeHop property
    */
    private ?bool $enableSafeHop = null;
    
    /**
     * @var bool|null $enableSmartCache Determines if smart caching is enabled for this zone
    */
    private ?bool $enableSmartCache = null;
    
    /**
     * @var bool|null $enableTLS1 Determines if the TLS 1 is enabled on the Pull Zone
    */
    private ?bool $enableTLS1 = null;
    
    /**
     * @var bool|null $enableTLS1_1 Determines if the TLS 1.1 is enabled on the Pull Zone
    */
    private ?bool $enableTLS1_1 = null;
    
    /**
     * @var bool|null $enableWebPVary Determines if the WebP Vary feature is enabled.
    */
    private ?bool $enableWebPVary = null;
    
    /**
     * @var string|null $errorPageCustomCode Contains the custom error page code that will be returned
    */
    private ?string $errorPageCustomCode = null;
    
    /**
     * @var bool|null $errorPageEnableCustomCode Determines if custom error page code should be enabled.
    */
    private ?bool $errorPageEnableCustomCode = null;
    
    /**
     * @var bool|null $errorPageEnableStatuspageWidget Determines if the statuspage widget should be displayed on the error pages
    */
    private ?bool $errorPageEnableStatuspageWidget = null;
    
    /**
     * @var string|null $errorPageStatuspageCode The statuspage code that will be used to build the status widget
    */
    private ?string $errorPageStatuspageCode = null;
    
    /**
     * @var bool|null $errorPageWhitelabel Determines if the error pages should be whitelabel or not
    */
    private ?bool $errorPageWhitelabel = null;
    
    /**
     * @var bool|null $followRedirects Determines if the zone will follow origin redirects
    */
    private ?bool $followRedirects = null;
    
    /**
     * @var bool|null $ignoreQueryStrings True if the Pull Zone is ignoring query strings when serving cached objects
    */
    private ?bool $ignoreQueryStrings = null;
    
    /**
     * @var float|null $limitRateAfter The amount of data after the rate limit will be activated
    */
    private ?float $limitRateAfter = null;
    
    /**
     * @var int|null $limitRatePerSecond The maximum rate at which the zone will transfer data in kb/s. 0 for unlimited
    */
    private ?int $limitRatePerSecond = null;
    
    /**
     * @var float|null $logAnonymizationType The LogAnonymizationType property
    */
    private ?float $logAnonymizationType = null;
    
    /**
     * @var float|null $logFormat The LogFormat property
    */
    private ?float $logFormat = null;
    
    /**
     * @var bool|null $logForwardingEnabled Determines if the log forwarding is enabled
    */
    private ?bool $logForwardingEnabled = null;
    
    /**
     * @var float|null $logForwardingFormat The LogForwardingFormat property
    */
    private ?float $logForwardingFormat = null;
    
    /**
     * @var string|null $logForwardingHostname The log forwarding hostname
    */
    private ?string $logForwardingHostname = null;
    
    /**
     * @var int|null $logForwardingPort The log forwarding port
    */
    private ?int $logForwardingPort = null;
    
    /**
     * @var float|null $logForwardingProtocol The LogForwardingProtocol property
    */
    private ?float $logForwardingProtocol = null;
    
    /**
     * @var string|null $logForwardingToken The log forwarding token value
    */
    private ?string $logForwardingToken = null;
    
    /**
     * @var bool|null $loggingIPAnonymizationEnabled Determines if the log anonymization should be enabled
    */
    private ?bool $loggingIPAnonymizationEnabled = null;
    
    /**
     * @var bool|null $loggingSaveToStorage Determines if the permanent logging feature is enabled
    */
    private ?bool $loggingSaveToStorage = null;
    
    /**
     * @var int|null $loggingStorageZoneId The ID of the logging storage zone that is configured for this Pull Zone
    */
    private ?int $loggingStorageZoneId = null;
    
    /**
     * @var string|null $magicContainersAppId The MagicContainersAppId property
    */
    private ?string $magicContainersAppId = null;
    
    /**
     * @var int|null $magicContainersEndpointId The MagicContainersEndpointId property
    */
    private ?int $magicContainersEndpointId = null;
    
    /**
     * @var int|null $middlewareScriptId The MiddlewareScriptId property
    */
    private ?int $middlewareScriptId = null;
    
    /**
     * @var int|null $monthlyBandwidthLimit The monthly limit of bandwidth in bytes that the pullzone is allowed to use
    */
    private ?int $monthlyBandwidthLimit = null;
    
    /**
     * @var float|null $monthlyCharges The total monthly charges for this so zone so far
    */
    private ?float $monthlyCharges = null;
    
    /**
     * @var string|null $name The name of the pull zone.
    */
    private ?string $name = null;
    
    /**
     * @var bool|null $optimizerAutomaticOptimizationEnabled Determines if the automatic image optimization should be enabled
    */
    private ?bool $optimizerAutomaticOptimizationEnabled = null;
    
    /**
     * @var array<OptimizerClass>|null $optimizerClasses Contains the list of optimizer classes
    */
    private ?array $optimizerClasses = null;
    
    /**
     * @var int|null $optimizerDesktopMaxWidth Determines the maximum automatic image size for desktop clients
    */
    private ?int $optimizerDesktopMaxWidth = null;
    
    /**
     * @var bool|null $optimizerEnabled Determines if the optimizer should be enabled for this zone
    */
    private ?bool $optimizerEnabled = null;
    
    /**
     * @var bool|null $optimizerEnableManipulationEngine Determines the image manipulation should be enabled
    */
    private ?bool $optimizerEnableManipulationEngine = null;
    
    /**
     * @var bool|null $optimizerEnableWebP Determines if the WebP optimization should be enabled
    */
    private ?bool $optimizerEnableWebP = null;
    
    /**
     * @var bool|null $optimizerForceClasses Determines if the optimizer class list should be enforced
    */
    private ?bool $optimizerForceClasses = null;
    
    /**
     * @var int|null $optimizerImageQuality Determines the image quality for desktop clients
    */
    private ?int $optimizerImageQuality = null;
    
    /**
     * @var bool|null $optimizerMinifyCSS Determines if the CSS minification should be enabled
    */
    private ?bool $optimizerMinifyCSS = null;
    
    /**
     * @var bool|null $optimizerMinifyJavaScript Determines if the JavaScript minification should be enabled
    */
    private ?bool $optimizerMinifyJavaScript = null;
    
    /**
     * @var int|null $optimizerMobileImageQuality Determines the image quality for mobile clients
    */
    private ?int $optimizerMobileImageQuality = null;
    
    /**
     * @var int|null $optimizerMobileMaxWidth Determines the maximum automatic image size for mobile clients
    */
    private ?int $optimizerMobileMaxWidth = null;
    
    /**
     * @var bool|null $optimizerStaticHtmlEnabled The OptimizerStaticHtmlEnabled property
    */
    private ?bool $optimizerStaticHtmlEnabled = null;
    
    /**
     * @var string|null $optimizerStaticHtmlWordPressBypassCookie The OptimizerStaticHtmlWordPressBypassCookie property
    */
    private ?string $optimizerStaticHtmlWordPressBypassCookie = null;
    
    /**
     * @var string|null $optimizerStaticHtmlWordPressPath The OptimizerStaticHtmlWordPressPath property
    */
    private ?string $optimizerStaticHtmlWordPressPath = null;
    
    /**
     * @var bool|null $optimizerWatermarkEnabled Determines if image watermarking should be enabled
    */
    private ?bool $optimizerWatermarkEnabled = null;
    
    /**
     * @var int|null $optimizerWatermarkMinImageSize Sets the minimum image size to which the watermark will be added
    */
    private ?int $optimizerWatermarkMinImageSize = null;
    
    /**
     * @var float|null $optimizerWatermarkOffset Sets the offset of the watermark image
    */
    private ?float $optimizerWatermarkOffset = null;
    
    /**
     * @var float|null $optimizerWatermarkPosition The OptimizerWatermarkPosition property
    */
    private ?float $optimizerWatermarkPosition = null;
    
    /**
     * @var string|null $optimizerWatermarkUrl Sets the URL of the watermark image
    */
    private ?string $optimizerWatermarkUrl = null;
    
    /**
     * @var int|null $originConnectTimeout The amount of seconds to wait when connecting to the origin. Otherwise the request will fail or retry.
    */
    private ?int $originConnectTimeout = null;
    
    /**
     * @var string|null $originHostHeader Determines the host header that will be sent to the origin
    */
    private ?string $originHostHeader = null;
    
    /**
     * @var int|null $originResponseTimeout The amount of seconds to wait when waiting for the origin reply. Otherwise the request will fail or retry.
    */
    private ?int $originResponseTimeout = null;
    
    /**
     * @var int|null $originRetries The number of retries to the origin server
    */
    private ?int $originRetries = null;
    
    /**
     * @var bool|null $originRetry5XXResponses Determines if we should retry the request in case of a 5XX response.
    */
    private ?bool $originRetry5XXResponses = null;
    
    /**
     * @var bool|null $originRetryConnectionTimeout Determines if we should retry the request in case of a connection timeout.
    */
    private ?bool $originRetryConnectionTimeout = null;
    
    /**
     * @var int|null $originRetryDelay Determines the amount of time that the CDN should wait before retrying an origin request.
    */
    private ?int $originRetryDelay = null;
    
    /**
     * @var bool|null $originRetryResponseTimeout Determines if we should retry the request in case of a response timeout.
    */
    private ?bool $originRetryResponseTimeout = null;
    
    /**
     * @var bool|null $originShieldEnableConcurrencyLimit Determines if the origin shield concurrency limit is enabled.
    */
    private ?bool $originShieldEnableConcurrencyLimit = null;
    
    /**
     * @var int|null $originShieldMaxConcurrentRequests Determines the number of maximum concurrent requests allowed to the origin.
    */
    private ?int $originShieldMaxConcurrentRequests = null;
    
    /**
     * @var int|null $originShieldMaxQueuedRequests Determines the max number of origin requests that will remain in the queue
    */
    private ?int $originShieldMaxQueuedRequests = null;
    
    /**
     * @var int|null $originShieldQueueMaxWaitTime Determines the max queue wait time
    */
    private ?int $originShieldQueueMaxWaitTime = null;
    
    /**
     * @var string|null $originShieldZoneCode The zone code of the origin shield
    */
    private ?string $originShieldZoneCode = null;
    
    /**
     * @var float|null $originType The OriginType property
    */
    private ?float $originType = null;
    
    /**
     * @var string|null $originUrl The origin URL of the pull zone where the files are fetched from.
    */
    private ?string $originUrl = null;
    
    /**
     * @var int|null $permaCacheStorageZoneId The IP of the storage zone used for Perma-Cache
    */
    private ?int $permaCacheStorageZoneId = null;
    
    /**
     * @var int|null $permaCacheType The PermaCacheType property
    */
    private ?int $permaCacheType = null;
    
    /**
     * @var string|null $preloadingScreenCode The custom preloading screen code
    */
    private ?string $preloadingScreenCode = null;
    
    /**
     * @var bool|null $preloadingScreenCodeEnabled Determines if the custom preloader screen is enabled
    */
    private ?bool $preloadingScreenCodeEnabled = null;
    
    /**
     * @var int|null $preloadingScreenDelay The delay in milliseconds after which the preloading screen will be displayed
    */
    private ?int $preloadingScreenDelay = null;
    
    /**
     * @var bool|null $preloadingScreenEnabled Determines if the preloading screen is currently enabled
    */
    private ?bool $preloadingScreenEnabled = null;
    
    /**
     * @var string|null $preloadingScreenLogoUrl The preloading screen logo URL
    */
    private ?string $preloadingScreenLogoUrl = null;
    
    /**
     * @var bool|null $preloadingScreenShowOnFirstVisit The PreloadingScreenShowOnFirstVisit property
    */
    private ?bool $preloadingScreenShowOnFirstVisit = null;
    
    /**
     * @var float|null $preloadingScreenTheme The PreloadingScreenTheme property
    */
    private ?float $preloadingScreenTheme = null;
    
    /**
     * @var array<string>|null $queryStringVaryParameters Contains the list of vary parameters that will be used for vary cache by query string. If empty, all parameters will be used to construct the key
    */
    private ?array $queryStringVaryParameters = null;
    
    /**
     * @var int|null $requestCoalescingTimeout Determines the lock time for coalesced requests.
    */
    private ?int $requestCoalescingTimeout = null;
    
    /**
     * @var int|null $requestLimit Max number of requests per IP per second
    */
    private ?int $requestLimit = null;
    
    /**
     * @var array<PullZoneCreate_RoutingFilters>|null $routingFilters The list of routing filters enabled for this zone
    */
    private ?array $routingFilters = null;
    
    /**
     * @var bool|null $shieldDDosProtectionEnabled The ShieldDDosProtectionEnabled property
    */
    private ?bool $shieldDDosProtectionEnabled = null;
    
    /**
     * @var float|null $shieldDDosProtectionType The ShieldDDosProtectionType property
    */
    private ?float $shieldDDosProtectionType = null;
    
    /**
     * @var int|null $storageZoneId The ID of the storage zone that the pull zone is linked to
    */
    private ?int $storageZoneId = null;
    
    /**
     * @var float|null $type The Type property
    */
    private ?float $type = null;
    
    /**
     * @var bool|null $useBackgroundUpdate Determines if cache update is performed in the background.
    */
    private ?bool $useBackgroundUpdate = null;
    
    /**
     * @var bool|null $useStaleWhileOffline Determines if we should use stale cache while the origin is offline
    */
    private ?bool $useStaleWhileOffline = null;
    
    /**
     * @var bool|null $useStaleWhileUpdating Determines if we should use stale cache while cache is updating
    */
    private ?bool $useStaleWhileUpdating = null;
    
    /**
     * @var bool|null $verifyOriginSSL Determines if the Pull Zone should verify the origin SSL certificate
    */
    private ?bool $verifyOriginSSL = null;
    
    /**
     * @var array<string>|null $wAFDisabledRuleGroups Determines the enabled WAF rule groups
    */
    private ?array $wAFDisabledRuleGroups = null;
    
    /**
     * @var array<string>|null $wAFDisabledRules Determines the disabled WAF rules
    */
    private ?array $wAFDisabledRules = null;
    
    /**
     * @var bool|null $wAFEnabled Determines if WAF should be enabled on the zone
    */
    private ?bool $wAFEnabled = null;
    
    /**
     * @var bool|null $wAFEnableRequestHeaderLogging Determines if WAF should enable request headers logging
    */
    private ?bool $wAFEnableRequestHeaderLogging = null;
    
    /**
     * @var bool|null $wAFRequestHeaderIgnores Determines the list of headers that will be ignored in the WAF logs
    */
    private ?bool $wAFRequestHeaderIgnores = null;
    
    /**
     * @var bool|null $zoneSecurityEnabled True if the URL secure token authentication security is enabled
    */
    private ?bool $zoneSecurityEnabled = null;
    
    /**
     * @var bool|null $zoneSecurityIncludeHashRemoteIP True if the zone security hash should include the remote IP
    */
    private ?bool $zoneSecurityIncludeHashRemoteIP = null;
    
    /**
     * Instantiates a new PullZoneCreate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PullZoneCreate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PullZoneCreate {
        return new PullZoneCreate();
    }

    /**
     * Gets the AccessControlOriginHeaderExtensions property value. The list of extensions that will return the CORS headers
     * @return array<string>|null
    */
    public function getAccessControlOriginHeaderExtensions(): ?array {
        return $this->accessControlOriginHeaderExtensions;
    }

    /**
     * Gets the AddCanonicalHeader property value. Determines if the Add Canonical Header is enabled for this Pull Zone
     * @return bool|null
    */
    public function getAddCanonicalHeader(): ?bool {
        return $this->addCanonicalHeader;
    }

    /**
     * Gets the AddHostHeader property value. Determines if the Pull Zone should forward the current hostname to the origin
     * @return bool|null
    */
    public function getAddHostHeader(): ?bool {
        return $this->addHostHeader;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the AllowedReferrers property value. The list of referrer hostnames that are allowed to access the pull zone.Requests containing the header Referer: hostname that is not on the list will be rejected.If empty, all the referrers are allowed
     * @return array<string>|null
    */
    public function getAllowedReferrers(): ?array {
        return $this->allowedReferrers;
    }

    /**
     * Gets the AWSSigningEnabled property value. Determines if the AWS Signing is enabled
     * @return bool|null
    */
    public function getAWSSigningEnabled(): ?bool {
        return $this->aWSSigningEnabled;
    }

    /**
     * Gets the AWSSigningKey property value. The AWS Signing region key
     * @return string|null
    */
    public function getAWSSigningKey(): ?string {
        return $this->aWSSigningKey;
    }

    /**
     * Gets the AWSSigningRegionName property value. The AWS Signing region name
     * @return string|null
    */
    public function getAWSSigningRegionName(): ?string {
        return $this->aWSSigningRegionName;
    }

    /**
     * Gets the AWSSigningSecret property value. The AWS Signing region secret
     * @return string|null
    */
    public function getAWSSigningSecret(): ?string {
        return $this->aWSSigningSecret;
    }

    /**
     * Gets the BlockedCountries property value. The list of blocked countries with the two-letter Alpha2 ISO codes
     * @return array<string>|null
    */
    public function getBlockedCountries(): ?array {
        return $this->blockedCountries;
    }

    /**
     * Gets the BlockedIps property value. The list of IPs that are blocked from accessing the pull zone. Requests coming from the following IPs will be rejected. If empty, all the IPs will be allowed
     * @return array<string>|null
    */
    public function getBlockedIps(): ?array {
        return $this->blockedIps;
    }

    /**
     * Gets the BlockedReferrers property value. The list of referrer hostnames that are not allowed to access the pull zone. Requests containing the header Referer: hostname that is on the list will be rejected. If empty, all the referrers are allowed
     * @return array<string>|null
    */
    public function getBlockedReferrers(): ?array {
        return $this->blockedReferrers;
    }

    /**
     * Gets the BlockNoneReferrer property value. The BlockNoneReferrer property
     * @return bool|null
    */
    public function getBlockNoneReferrer(): ?bool {
        return $this->blockNoneReferrer;
    }

    /**
     * Gets the BlockPostRequests property value. If true, POST requests to the zone will be blocked
     * @return bool|null
    */
    public function getBlockPostRequests(): ?bool {
        return $this->blockPostRequests;
    }

    /**
     * Gets the BlockRootPathAccess property value. If true, access to root path will return a 403 error
     * @return bool|null
    */
    public function getBlockRootPathAccess(): ?bool {
        return $this->blockRootPathAccess;
    }

    /**
     * Gets the BudgetRedirectedCountries property value. The list of budget redirected countries with the two-letter Alpha2 ISO codes
     * @return array<string>|null
    */
    public function getBudgetRedirectedCountries(): ?array {
        return $this->budgetRedirectedCountries;
    }

    /**
     * Gets the BunnyAiImageBlueprints property value. The BunnyAiImageBlueprints property
     * @return array<BunnyAiImageBlueprint>|null
    */
    public function getBunnyAiImageBlueprints(): ?array {
        return $this->bunnyAiImageBlueprints;
    }

    /**
     * Gets the BurstSize property value. Excessive requests are delayed until their number exceeds the maximum burst size.
     * @return int|null
    */
    public function getBurstSize(): ?int {
        return $this->burstSize;
    }

    /**
     * Gets the CacheControlBrowserMaxAgeOverride property value. Sets the browser cache control override setting for this zone
     * @return int|null
    */
    public function getCacheControlBrowserMaxAgeOverride(): ?int {
        return $this->cacheControlBrowserMaxAgeOverride;
    }

    /**
     * Gets the CacheControlMaxAgeOverride property value. The override cache time for the pull zone
     * @return int|null
    */
    public function getCacheControlMaxAgeOverride(): ?int {
        return $this->cacheControlMaxAgeOverride;
    }

    /**
     * Gets the CacheControlPublicMaxAgeOverride property value. The override cache time for the pull zone for the end client
     * @return int|null
    */
    public function getCacheControlPublicMaxAgeOverride(): ?int {
        return $this->cacheControlPublicMaxAgeOverride;
    }

    /**
     * Gets the CacheErrorResponses property value. Determines if bunny.net should be caching error responses
     * @return bool|null
    */
    public function getCacheErrorResponses(): ?bool {
        return $this->cacheErrorResponses;
    }

    /**
     * Gets the ConnectionLimitPerIPCount property value. The number of connections limited per IP for this zone
     * @return int|null
    */
    public function getConnectionLimitPerIPCount(): ?int {
        return $this->connectionLimitPerIPCount;
    }

    /**
     * Gets the CookieVaryParameters property value. Contains the list of vary parameters that will be used for vary cache by cookie string. If empty, cookie vary will not be used.
     * @return array<string>|null
    */
    public function getCookieVaryParameters(): ?array {
        return $this->cookieVaryParameters;
    }

    /**
     * Gets the DisableCookies property value. Determines if the cookies are disabled for the pull zone
     * @return bool|null
    */
    public function getDisableCookies(): ?bool {
        return $this->disableCookies;
    }

    /**
     * Gets the DisableLetsEncrypt property value. If true, the built-in let's encrypt is disabled and requests are passed to the origin.
     * @return bool|null
    */
    public function getDisableLetsEncrypt(): ?bool {
        return $this->disableLetsEncrypt;
    }

    /**
     * Gets the DnsOriginPort property value. Determines the origin port of the pull zone.
     * @return int|null
    */
    public function getDnsOriginPort(): ?int {
        return $this->dnsOriginPort;
    }

    /**
     * Gets the DnsOriginScheme property value. Determines the origin scheme of the pull zone.
     * @return string|null
    */
    public function getDnsOriginScheme(): ?string {
        return $this->dnsOriginScheme;
    }

    /**
     * Gets the EdgeRules property value. The list of edge rules on this Pull Zone
     * @return array<EdgeRule>|null
    */
    public function getEdgeRules(): ?array {
        return $this->edgeRules;
    }

    /**
     * Gets the EdgeScriptExecutionPhase property value. The EdgeScriptExecutionPhase property
     * @return float|null
    */
    public function getEdgeScriptExecutionPhase(): ?float {
        return $this->edgeScriptExecutionPhase;
    }

    /**
     * Gets the EdgeScriptId property value. The ID of the edge script that the pull zone is linked to
     * @return int|null
    */
    public function getEdgeScriptId(): ?int {
        return $this->edgeScriptId;
    }

    /**
     * Gets the EnableAccessControlOriginHeader property value. Determines if the CORS headers should be enabled
     * @return bool|null
    */
    public function getEnableAccessControlOriginHeader(): ?bool {
        return $this->enableAccessControlOriginHeader;
    }

    /**
     * Gets the EnableAutoSSL property value. If set to true, any hostnames added to this Pull Zone will automatically enable SSL.
     * @return bool|null
    */
    public function getEnableAutoSSL(): ?bool {
        return $this->enableAutoSSL;
    }

    /**
     * Gets the EnableAvifVary property value. Determines if the AVIF Vary feature is enabled.
     * @return bool|null
    */
    public function getEnableAvifVary(): ?bool {
        return $this->enableAvifVary;
    }

    /**
     * Gets the EnableBunnyImageAi property value. The EnableBunnyImageAi property
     * @return bool|null
    */
    public function getEnableBunnyImageAi(): ?bool {
        return $this->enableBunnyImageAi;
    }

    /**
     * Gets the EnableCacheSlice property value. Determines if the cache slice (Optimize for video) feature is enabled for the Pull Zone
     * @return bool|null
    */
    public function getEnableCacheSlice(): ?bool {
        return $this->enableCacheSlice;
    }

    /**
     * Gets the EnableCookieVary property value. Determines if the Cookie Vary feature is enabled.
     * @return bool|null
    */
    public function getEnableCookieVary(): ?bool {
        return $this->enableCookieVary;
    }

    /**
     * Gets the EnableCountryCodeVary property value. Determines if the Country Code Vary feature is enabled.
     * @return bool|null
    */
    public function getEnableCountryCodeVary(): ?bool {
        return $this->enableCountryCodeVary;
    }

    /**
     * Gets the EnableGeoZoneAF property value. Determines if the delivery from the Africa region is enabled for this pull zone
     * @return bool|null
    */
    public function getEnableGeoZoneAF(): ?bool {
        return $this->enableGeoZoneAF;
    }

    /**
     * Gets the EnableGeoZoneASIA property value. Determines if the delivery from the Asian / Oceanian region is enabled for this pull zone
     * @return bool|null
    */
    public function getEnableGeoZoneASIA(): ?bool {
        return $this->enableGeoZoneASIA;
    }

    /**
     * Gets the EnableGeoZoneEU property value. Determines if the delivery from the European region is enabled for this pull zone
     * @return bool|null
    */
    public function getEnableGeoZoneEU(): ?bool {
        return $this->enableGeoZoneEU;
    }

    /**
     * Gets the EnableGeoZoneSA property value. Determines if the delivery from the South American region is enabled for this pull zone
     * @return bool|null
    */
    public function getEnableGeoZoneSA(): ?bool {
        return $this->enableGeoZoneSA;
    }

    /**
     * Gets the EnableGeoZoneUS property value. Determines if the delivery from the North American region is enabled for this pull zone
     * @return bool|null
    */
    public function getEnableGeoZoneUS(): ?bool {
        return $this->enableGeoZoneUS;
    }

    /**
     * Gets the EnableHostnameVary property value. Determines if the Hostname Vary feature is enabled.
     * @return bool|null
    */
    public function getEnableHostnameVary(): ?bool {
        return $this->enableHostnameVary;
    }

    /**
     * Gets the EnableLogging property value. Determines if the logging is enabled for this Pull Zone
     * @return bool|null
    */
    public function getEnableLogging(): ?bool {
        return $this->enableLogging;
    }

    /**
     * Gets the EnableMobileVary property value. Determines if the Mobile Vary feature is enabled.
     * @return bool|null
    */
    public function getEnableMobileVary(): ?bool {
        return $this->enableMobileVary;
    }

    /**
     * Gets the EnableOriginShield property value. If true the server will use the origin shield feature
     * @return bool|null
    */
    public function getEnableOriginShield(): ?bool {
        return $this->enableOriginShield;
    }

    /**
     * Gets the EnableQueryStringOrdering property value. If set to true the query string ordering property is enabled.
     * @return bool|null
    */
    public function getEnableQueryStringOrdering(): ?bool {
        return $this->enableQueryStringOrdering;
    }

    /**
     * Gets the EnableRequestCoalescing property value. Determines if request coalescing is currently enabled.
     * @return bool|null
    */
    public function getEnableRequestCoalescing(): ?bool {
        return $this->enableRequestCoalescing;
    }

    /**
     * Gets the EnableSafeHop property value. The EnableSafeHop property
     * @return bool|null
    */
    public function getEnableSafeHop(): ?bool {
        return $this->enableSafeHop;
    }

    /**
     * Gets the EnableSmartCache property value. Determines if smart caching is enabled for this zone
     * @return bool|null
    */
    public function getEnableSmartCache(): ?bool {
        return $this->enableSmartCache;
    }

    /**
     * Gets the EnableTLS1 property value. Determines if the TLS 1 is enabled on the Pull Zone
     * @return bool|null
    */
    public function getEnableTLS1(): ?bool {
        return $this->enableTLS1;
    }

    /**
     * Gets the EnableTLS1_1 property value. Determines if the TLS 1.1 is enabled on the Pull Zone
     * @return bool|null
    */
    public function getEnableTLS11(): ?bool {
        return $this->enableTLS1_1;
    }

    /**
     * Gets the EnableWebPVary property value. Determines if the WebP Vary feature is enabled.
     * @return bool|null
    */
    public function getEnableWebPVary(): ?bool {
        return $this->enableWebPVary;
    }

    /**
     * Gets the ErrorPageCustomCode property value. Contains the custom error page code that will be returned
     * @return string|null
    */
    public function getErrorPageCustomCode(): ?string {
        return $this->errorPageCustomCode;
    }

    /**
     * Gets the ErrorPageEnableCustomCode property value. Determines if custom error page code should be enabled.
     * @return bool|null
    */
    public function getErrorPageEnableCustomCode(): ?bool {
        return $this->errorPageEnableCustomCode;
    }

    /**
     * Gets the ErrorPageEnableStatuspageWidget property value. Determines if the statuspage widget should be displayed on the error pages
     * @return bool|null
    */
    public function getErrorPageEnableStatuspageWidget(): ?bool {
        return $this->errorPageEnableStatuspageWidget;
    }

    /**
     * Gets the ErrorPageStatuspageCode property value. The statuspage code that will be used to build the status widget
     * @return string|null
    */
    public function getErrorPageStatuspageCode(): ?string {
        return $this->errorPageStatuspageCode;
    }

    /**
     * Gets the ErrorPageWhitelabel property value. Determines if the error pages should be whitelabel or not
     * @return bool|null
    */
    public function getErrorPageWhitelabel(): ?bool {
        return $this->errorPageWhitelabel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'AccessControlOriginHeaderExtensions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAccessControlOriginHeaderExtensions($val);
            },
            'AddCanonicalHeader' => fn(ParseNode $n) => $o->setAddCanonicalHeader($n->getBooleanValue()),
            'AddHostHeader' => fn(ParseNode $n) => $o->setAddHostHeader($n->getBooleanValue()),
            'AllowedReferrers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedReferrers($val);
            },
            'AWSSigningEnabled' => fn(ParseNode $n) => $o->setAWSSigningEnabled($n->getBooleanValue()),
            'AWSSigningKey' => fn(ParseNode $n) => $o->setAWSSigningKey($n->getStringValue()),
            'AWSSigningRegionName' => fn(ParseNode $n) => $o->setAWSSigningRegionName($n->getStringValue()),
            'AWSSigningSecret' => fn(ParseNode $n) => $o->setAWSSigningSecret($n->getStringValue()),
            'BlockedCountries' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBlockedCountries($val);
            },
            'BlockedIps' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBlockedIps($val);
            },
            'BlockedReferrers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBlockedReferrers($val);
            },
            'BlockNoneReferrer' => fn(ParseNode $n) => $o->setBlockNoneReferrer($n->getBooleanValue()),
            'BlockPostRequests' => fn(ParseNode $n) => $o->setBlockPostRequests($n->getBooleanValue()),
            'BlockRootPathAccess' => fn(ParseNode $n) => $o->setBlockRootPathAccess($n->getBooleanValue()),
            'BudgetRedirectedCountries' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBudgetRedirectedCountries($val);
            },
            'BunnyAiImageBlueprints' => fn(ParseNode $n) => $o->setBunnyAiImageBlueprints($n->getCollectionOfObjectValues([BunnyAiImageBlueprint::class, 'createFromDiscriminatorValue'])),
            'BurstSize' => fn(ParseNode $n) => $o->setBurstSize($n->getIntegerValue()),
            'CacheControlBrowserMaxAgeOverride' => fn(ParseNode $n) => $o->setCacheControlBrowserMaxAgeOverride($n->getIntegerValue()),
            'CacheControlMaxAgeOverride' => fn(ParseNode $n) => $o->setCacheControlMaxAgeOverride($n->getIntegerValue()),
            'CacheControlPublicMaxAgeOverride' => fn(ParseNode $n) => $o->setCacheControlPublicMaxAgeOverride($n->getIntegerValue()),
            'CacheErrorResponses' => fn(ParseNode $n) => $o->setCacheErrorResponses($n->getBooleanValue()),
            'ConnectionLimitPerIPCount' => fn(ParseNode $n) => $o->setConnectionLimitPerIPCount($n->getIntegerValue()),
            'CookieVaryParameters' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCookieVaryParameters($val);
            },
            'DisableCookies' => fn(ParseNode $n) => $o->setDisableCookies($n->getBooleanValue()),
            'DisableLetsEncrypt' => fn(ParseNode $n) => $o->setDisableLetsEncrypt($n->getBooleanValue()),
            'DnsOriginPort' => fn(ParseNode $n) => $o->setDnsOriginPort($n->getIntegerValue()),
            'DnsOriginScheme' => fn(ParseNode $n) => $o->setDnsOriginScheme($n->getStringValue()),
            'EdgeRules' => fn(ParseNode $n) => $o->setEdgeRules($n->getCollectionOfObjectValues([EdgeRule::class, 'createFromDiscriminatorValue'])),
            'EdgeScriptExecutionPhase' => fn(ParseNode $n) => $o->setEdgeScriptExecutionPhase($n->getFloatValue()),
            'EdgeScriptId' => fn(ParseNode $n) => $o->setEdgeScriptId($n->getIntegerValue()),
            'EnableAccessControlOriginHeader' => fn(ParseNode $n) => $o->setEnableAccessControlOriginHeader($n->getBooleanValue()),
            'EnableAutoSSL' => fn(ParseNode $n) => $o->setEnableAutoSSL($n->getBooleanValue()),
            'EnableAvifVary' => fn(ParseNode $n) => $o->setEnableAvifVary($n->getBooleanValue()),
            'EnableBunnyImageAi' => fn(ParseNode $n) => $o->setEnableBunnyImageAi($n->getBooleanValue()),
            'EnableCacheSlice' => fn(ParseNode $n) => $o->setEnableCacheSlice($n->getBooleanValue()),
            'EnableCookieVary' => fn(ParseNode $n) => $o->setEnableCookieVary($n->getBooleanValue()),
            'EnableCountryCodeVary' => fn(ParseNode $n) => $o->setEnableCountryCodeVary($n->getBooleanValue()),
            'EnableGeoZoneAF' => fn(ParseNode $n) => $o->setEnableGeoZoneAF($n->getBooleanValue()),
            'EnableGeoZoneASIA' => fn(ParseNode $n) => $o->setEnableGeoZoneASIA($n->getBooleanValue()),
            'EnableGeoZoneEU' => fn(ParseNode $n) => $o->setEnableGeoZoneEU($n->getBooleanValue()),
            'EnableGeoZoneSA' => fn(ParseNode $n) => $o->setEnableGeoZoneSA($n->getBooleanValue()),
            'EnableGeoZoneUS' => fn(ParseNode $n) => $o->setEnableGeoZoneUS($n->getBooleanValue()),
            'EnableHostnameVary' => fn(ParseNode $n) => $o->setEnableHostnameVary($n->getBooleanValue()),
            'EnableLogging' => fn(ParseNode $n) => $o->setEnableLogging($n->getBooleanValue()),
            'EnableMobileVary' => fn(ParseNode $n) => $o->setEnableMobileVary($n->getBooleanValue()),
            'EnableOriginShield' => fn(ParseNode $n) => $o->setEnableOriginShield($n->getBooleanValue()),
            'EnableQueryStringOrdering' => fn(ParseNode $n) => $o->setEnableQueryStringOrdering($n->getBooleanValue()),
            'EnableRequestCoalescing' => fn(ParseNode $n) => $o->setEnableRequestCoalescing($n->getBooleanValue()),
            'EnableSafeHop' => fn(ParseNode $n) => $o->setEnableSafeHop($n->getBooleanValue()),
            'EnableSmartCache' => fn(ParseNode $n) => $o->setEnableSmartCache($n->getBooleanValue()),
            'EnableTLS1' => fn(ParseNode $n) => $o->setEnableTLS1($n->getBooleanValue()),
            'EnableTLS1_1' => fn(ParseNode $n) => $o->setEnableTLS11($n->getBooleanValue()),
            'EnableWebPVary' => fn(ParseNode $n) => $o->setEnableWebPVary($n->getBooleanValue()),
            'ErrorPageCustomCode' => fn(ParseNode $n) => $o->setErrorPageCustomCode($n->getStringValue()),
            'ErrorPageEnableCustomCode' => fn(ParseNode $n) => $o->setErrorPageEnableCustomCode($n->getBooleanValue()),
            'ErrorPageEnableStatuspageWidget' => fn(ParseNode $n) => $o->setErrorPageEnableStatuspageWidget($n->getBooleanValue()),
            'ErrorPageStatuspageCode' => fn(ParseNode $n) => $o->setErrorPageStatuspageCode($n->getStringValue()),
            'ErrorPageWhitelabel' => fn(ParseNode $n) => $o->setErrorPageWhitelabel($n->getBooleanValue()),
            'FollowRedirects' => fn(ParseNode $n) => $o->setFollowRedirects($n->getBooleanValue()),
            'IgnoreQueryStrings' => fn(ParseNode $n) => $o->setIgnoreQueryStrings($n->getBooleanValue()),
            'LimitRateAfter' => fn(ParseNode $n) => $o->setLimitRateAfter($n->getFloatValue()),
            'LimitRatePerSecond' => fn(ParseNode $n) => $o->setLimitRatePerSecond($n->getIntegerValue()),
            'LogAnonymizationType' => fn(ParseNode $n) => $o->setLogAnonymizationType($n->getFloatValue()),
            'LogFormat' => fn(ParseNode $n) => $o->setLogFormat($n->getFloatValue()),
            'LogForwardingEnabled' => fn(ParseNode $n) => $o->setLogForwardingEnabled($n->getBooleanValue()),
            'LogForwardingFormat' => fn(ParseNode $n) => $o->setLogForwardingFormat($n->getFloatValue()),
            'LogForwardingHostname' => fn(ParseNode $n) => $o->setLogForwardingHostname($n->getStringValue()),
            'LogForwardingPort' => fn(ParseNode $n) => $o->setLogForwardingPort($n->getIntegerValue()),
            'LogForwardingProtocol' => fn(ParseNode $n) => $o->setLogForwardingProtocol($n->getFloatValue()),
            'LogForwardingToken' => fn(ParseNode $n) => $o->setLogForwardingToken($n->getStringValue()),
            'LoggingIPAnonymizationEnabled' => fn(ParseNode $n) => $o->setLoggingIPAnonymizationEnabled($n->getBooleanValue()),
            'LoggingSaveToStorage' => fn(ParseNode $n) => $o->setLoggingSaveToStorage($n->getBooleanValue()),
            'LoggingStorageZoneId' => fn(ParseNode $n) => $o->setLoggingStorageZoneId($n->getIntegerValue()),
            'MagicContainersAppId' => fn(ParseNode $n) => $o->setMagicContainersAppId($n->getStringValue()),
            'MagicContainersEndpointId' => fn(ParseNode $n) => $o->setMagicContainersEndpointId($n->getIntegerValue()),
            'MiddlewareScriptId' => fn(ParseNode $n) => $o->setMiddlewareScriptId($n->getIntegerValue()),
            'MonthlyBandwidthLimit' => fn(ParseNode $n) => $o->setMonthlyBandwidthLimit($n->getIntegerValue()),
            'MonthlyCharges' => fn(ParseNode $n) => $o->setMonthlyCharges($n->getFloatValue()),
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'OptimizerAutomaticOptimizationEnabled' => fn(ParseNode $n) => $o->setOptimizerAutomaticOptimizationEnabled($n->getBooleanValue()),
            'OptimizerClasses' => fn(ParseNode $n) => $o->setOptimizerClasses($n->getCollectionOfObjectValues([OptimizerClass::class, 'createFromDiscriminatorValue'])),
            'OptimizerDesktopMaxWidth' => fn(ParseNode $n) => $o->setOptimizerDesktopMaxWidth($n->getIntegerValue()),
            'OptimizerEnabled' => fn(ParseNode $n) => $o->setOptimizerEnabled($n->getBooleanValue()),
            'OptimizerEnableManipulationEngine' => fn(ParseNode $n) => $o->setOptimizerEnableManipulationEngine($n->getBooleanValue()),
            'OptimizerEnableWebP' => fn(ParseNode $n) => $o->setOptimizerEnableWebP($n->getBooleanValue()),
            'OptimizerForceClasses' => fn(ParseNode $n) => $o->setOptimizerForceClasses($n->getBooleanValue()),
            'OptimizerImageQuality' => fn(ParseNode $n) => $o->setOptimizerImageQuality($n->getIntegerValue()),
            'OptimizerMinifyCSS' => fn(ParseNode $n) => $o->setOptimizerMinifyCSS($n->getBooleanValue()),
            'OptimizerMinifyJavaScript' => fn(ParseNode $n) => $o->setOptimizerMinifyJavaScript($n->getBooleanValue()),
            'OptimizerMobileImageQuality' => fn(ParseNode $n) => $o->setOptimizerMobileImageQuality($n->getIntegerValue()),
            'OptimizerMobileMaxWidth' => fn(ParseNode $n) => $o->setOptimizerMobileMaxWidth($n->getIntegerValue()),
            'OptimizerStaticHtmlEnabled' => fn(ParseNode $n) => $o->setOptimizerStaticHtmlEnabled($n->getBooleanValue()),
            'OptimizerStaticHtmlWordPressBypassCookie' => fn(ParseNode $n) => $o->setOptimizerStaticHtmlWordPressBypassCookie($n->getStringValue()),
            'OptimizerStaticHtmlWordPressPath' => fn(ParseNode $n) => $o->setOptimizerStaticHtmlWordPressPath($n->getStringValue()),
            'OptimizerWatermarkEnabled' => fn(ParseNode $n) => $o->setOptimizerWatermarkEnabled($n->getBooleanValue()),
            'OptimizerWatermarkMinImageSize' => fn(ParseNode $n) => $o->setOptimizerWatermarkMinImageSize($n->getIntegerValue()),
            'OptimizerWatermarkOffset' => fn(ParseNode $n) => $o->setOptimizerWatermarkOffset($n->getFloatValue()),
            'OptimizerWatermarkPosition' => fn(ParseNode $n) => $o->setOptimizerWatermarkPosition($n->getFloatValue()),
            'OptimizerWatermarkUrl' => fn(ParseNode $n) => $o->setOptimizerWatermarkUrl($n->getStringValue()),
            'OriginConnectTimeout' => fn(ParseNode $n) => $o->setOriginConnectTimeout($n->getIntegerValue()),
            'OriginHostHeader' => fn(ParseNode $n) => $o->setOriginHostHeader($n->getStringValue()),
            'OriginResponseTimeout' => fn(ParseNode $n) => $o->setOriginResponseTimeout($n->getIntegerValue()),
            'OriginRetries' => fn(ParseNode $n) => $o->setOriginRetries($n->getIntegerValue()),
            'OriginRetry5XXResponses' => fn(ParseNode $n) => $o->setOriginRetry5XXResponses($n->getBooleanValue()),
            'OriginRetryConnectionTimeout' => fn(ParseNode $n) => $o->setOriginRetryConnectionTimeout($n->getBooleanValue()),
            'OriginRetryDelay' => fn(ParseNode $n) => $o->setOriginRetryDelay($n->getIntegerValue()),
            'OriginRetryResponseTimeout' => fn(ParseNode $n) => $o->setOriginRetryResponseTimeout($n->getBooleanValue()),
            'OriginShieldEnableConcurrencyLimit' => fn(ParseNode $n) => $o->setOriginShieldEnableConcurrencyLimit($n->getBooleanValue()),
            'OriginShieldMaxConcurrentRequests' => fn(ParseNode $n) => $o->setOriginShieldMaxConcurrentRequests($n->getIntegerValue()),
            'OriginShieldMaxQueuedRequests' => fn(ParseNode $n) => $o->setOriginShieldMaxQueuedRequests($n->getIntegerValue()),
            'OriginShieldQueueMaxWaitTime' => fn(ParseNode $n) => $o->setOriginShieldQueueMaxWaitTime($n->getIntegerValue()),
            'OriginShieldZoneCode' => fn(ParseNode $n) => $o->setOriginShieldZoneCode($n->getStringValue()),
            'OriginType' => fn(ParseNode $n) => $o->setOriginType($n->getFloatValue()),
            'OriginUrl' => fn(ParseNode $n) => $o->setOriginUrl($n->getStringValue()),
            'PermaCacheStorageZoneId' => fn(ParseNode $n) => $o->setPermaCacheStorageZoneId($n->getIntegerValue()),
            'PermaCacheType' => fn(ParseNode $n) => $o->setPermaCacheType($n->getIntegerValue()),
            'PreloadingScreenCode' => fn(ParseNode $n) => $o->setPreloadingScreenCode($n->getStringValue()),
            'PreloadingScreenCodeEnabled' => fn(ParseNode $n) => $o->setPreloadingScreenCodeEnabled($n->getBooleanValue()),
            'PreloadingScreenDelay' => fn(ParseNode $n) => $o->setPreloadingScreenDelay($n->getIntegerValue()),
            'PreloadingScreenEnabled' => fn(ParseNode $n) => $o->setPreloadingScreenEnabled($n->getBooleanValue()),
            'PreloadingScreenLogoUrl' => fn(ParseNode $n) => $o->setPreloadingScreenLogoUrl($n->getStringValue()),
            'PreloadingScreenShowOnFirstVisit' => fn(ParseNode $n) => $o->setPreloadingScreenShowOnFirstVisit($n->getBooleanValue()),
            'PreloadingScreenTheme' => fn(ParseNode $n) => $o->setPreloadingScreenTheme($n->getFloatValue()),
            'QueryStringVaryParameters' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setQueryStringVaryParameters($val);
            },
            'RequestCoalescingTimeout' => fn(ParseNode $n) => $o->setRequestCoalescingTimeout($n->getIntegerValue()),
            'RequestLimit' => fn(ParseNode $n) => $o->setRequestLimit($n->getIntegerValue()),
            'RoutingFilters' => fn(ParseNode $n) => $o->setRoutingFilters($n->getCollectionOfEnumValues(PullZoneCreate_RoutingFilters::class)),
            'ShieldDDosProtectionEnabled' => fn(ParseNode $n) => $o->setShieldDDosProtectionEnabled($n->getBooleanValue()),
            'ShieldDDosProtectionType' => fn(ParseNode $n) => $o->setShieldDDosProtectionType($n->getFloatValue()),
            'StorageZoneId' => fn(ParseNode $n) => $o->setStorageZoneId($n->getIntegerValue()),
            'Type' => fn(ParseNode $n) => $o->setType($n->getFloatValue()),
            'UseBackgroundUpdate' => fn(ParseNode $n) => $o->setUseBackgroundUpdate($n->getBooleanValue()),
            'UseStaleWhileOffline' => fn(ParseNode $n) => $o->setUseStaleWhileOffline($n->getBooleanValue()),
            'UseStaleWhileUpdating' => fn(ParseNode $n) => $o->setUseStaleWhileUpdating($n->getBooleanValue()),
            'VerifyOriginSSL' => fn(ParseNode $n) => $o->setVerifyOriginSSL($n->getBooleanValue()),
            'WAFDisabledRuleGroups' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setWAFDisabledRuleGroups($val);
            },
            'WAFDisabledRules' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setWAFDisabledRules($val);
            },
            'WAFEnabled' => fn(ParseNode $n) => $o->setWAFEnabled($n->getBooleanValue()),
            'WAFEnableRequestHeaderLogging' => fn(ParseNode $n) => $o->setWAFEnableRequestHeaderLogging($n->getBooleanValue()),
            'WAFRequestHeaderIgnores' => fn(ParseNode $n) => $o->setWAFRequestHeaderIgnores($n->getBooleanValue()),
            'ZoneSecurityEnabled' => fn(ParseNode $n) => $o->setZoneSecurityEnabled($n->getBooleanValue()),
            'ZoneSecurityIncludeHashRemoteIP' => fn(ParseNode $n) => $o->setZoneSecurityIncludeHashRemoteIP($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the FollowRedirects property value. Determines if the zone will follow origin redirects
     * @return bool|null
    */
    public function getFollowRedirects(): ?bool {
        return $this->followRedirects;
    }

    /**
     * Gets the IgnoreQueryStrings property value. True if the Pull Zone is ignoring query strings when serving cached objects
     * @return bool|null
    */
    public function getIgnoreQueryStrings(): ?bool {
        return $this->ignoreQueryStrings;
    }

    /**
     * Gets the LimitRateAfter property value. The amount of data after the rate limit will be activated
     * @return float|null
    */
    public function getLimitRateAfter(): ?float {
        return $this->limitRateAfter;
    }

    /**
     * Gets the LimitRatePerSecond property value. The maximum rate at which the zone will transfer data in kb/s. 0 for unlimited
     * @return int|null
    */
    public function getLimitRatePerSecond(): ?int {
        return $this->limitRatePerSecond;
    }

    /**
     * Gets the LogAnonymizationType property value. The LogAnonymizationType property
     * @return float|null
    */
    public function getLogAnonymizationType(): ?float {
        return $this->logAnonymizationType;
    }

    /**
     * Gets the LogFormat property value. The LogFormat property
     * @return float|null
    */
    public function getLogFormat(): ?float {
        return $this->logFormat;
    }

    /**
     * Gets the LogForwardingEnabled property value. Determines if the log forwarding is enabled
     * @return bool|null
    */
    public function getLogForwardingEnabled(): ?bool {
        return $this->logForwardingEnabled;
    }

    /**
     * Gets the LogForwardingFormat property value. The LogForwardingFormat property
     * @return float|null
    */
    public function getLogForwardingFormat(): ?float {
        return $this->logForwardingFormat;
    }

    /**
     * Gets the LogForwardingHostname property value. The log forwarding hostname
     * @return string|null
    */
    public function getLogForwardingHostname(): ?string {
        return $this->logForwardingHostname;
    }

    /**
     * Gets the LogForwardingPort property value. The log forwarding port
     * @return int|null
    */
    public function getLogForwardingPort(): ?int {
        return $this->logForwardingPort;
    }

    /**
     * Gets the LogForwardingProtocol property value. The LogForwardingProtocol property
     * @return float|null
    */
    public function getLogForwardingProtocol(): ?float {
        return $this->logForwardingProtocol;
    }

    /**
     * Gets the LogForwardingToken property value. The log forwarding token value
     * @return string|null
    */
    public function getLogForwardingToken(): ?string {
        return $this->logForwardingToken;
    }

    /**
     * Gets the LoggingIPAnonymizationEnabled property value. Determines if the log anonymization should be enabled
     * @return bool|null
    */
    public function getLoggingIPAnonymizationEnabled(): ?bool {
        return $this->loggingIPAnonymizationEnabled;
    }

    /**
     * Gets the LoggingSaveToStorage property value. Determines if the permanent logging feature is enabled
     * @return bool|null
    */
    public function getLoggingSaveToStorage(): ?bool {
        return $this->loggingSaveToStorage;
    }

    /**
     * Gets the LoggingStorageZoneId property value. The ID of the logging storage zone that is configured for this Pull Zone
     * @return int|null
    */
    public function getLoggingStorageZoneId(): ?int {
        return $this->loggingStorageZoneId;
    }

    /**
     * Gets the MagicContainersAppId property value. The MagicContainersAppId property
     * @return string|null
    */
    public function getMagicContainersAppId(): ?string {
        return $this->magicContainersAppId;
    }

    /**
     * Gets the MagicContainersEndpointId property value. The MagicContainersEndpointId property
     * @return int|null
    */
    public function getMagicContainersEndpointId(): ?int {
        return $this->magicContainersEndpointId;
    }

    /**
     * Gets the MiddlewareScriptId property value. The MiddlewareScriptId property
     * @return int|null
    */
    public function getMiddlewareScriptId(): ?int {
        return $this->middlewareScriptId;
    }

    /**
     * Gets the MonthlyBandwidthLimit property value. The monthly limit of bandwidth in bytes that the pullzone is allowed to use
     * @return int|null
    */
    public function getMonthlyBandwidthLimit(): ?int {
        return $this->monthlyBandwidthLimit;
    }

    /**
     * Gets the MonthlyCharges property value. The total monthly charges for this so zone so far
     * @return float|null
    */
    public function getMonthlyCharges(): ?float {
        return $this->monthlyCharges;
    }

    /**
     * Gets the Name property value. The name of the pull zone.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the OptimizerAutomaticOptimizationEnabled property value. Determines if the automatic image optimization should be enabled
     * @return bool|null
    */
    public function getOptimizerAutomaticOptimizationEnabled(): ?bool {
        return $this->optimizerAutomaticOptimizationEnabled;
    }

    /**
     * Gets the OptimizerClasses property value. Contains the list of optimizer classes
     * @return array<OptimizerClass>|null
    */
    public function getOptimizerClasses(): ?array {
        return $this->optimizerClasses;
    }

    /**
     * Gets the OptimizerDesktopMaxWidth property value. Determines the maximum automatic image size for desktop clients
     * @return int|null
    */
    public function getOptimizerDesktopMaxWidth(): ?int {
        return $this->optimizerDesktopMaxWidth;
    }

    /**
     * Gets the OptimizerEnabled property value. Determines if the optimizer should be enabled for this zone
     * @return bool|null
    */
    public function getOptimizerEnabled(): ?bool {
        return $this->optimizerEnabled;
    }

    /**
     * Gets the OptimizerEnableManipulationEngine property value. Determines the image manipulation should be enabled
     * @return bool|null
    */
    public function getOptimizerEnableManipulationEngine(): ?bool {
        return $this->optimizerEnableManipulationEngine;
    }

    /**
     * Gets the OptimizerEnableWebP property value. Determines if the WebP optimization should be enabled
     * @return bool|null
    */
    public function getOptimizerEnableWebP(): ?bool {
        return $this->optimizerEnableWebP;
    }

    /**
     * Gets the OptimizerForceClasses property value. Determines if the optimizer class list should be enforced
     * @return bool|null
    */
    public function getOptimizerForceClasses(): ?bool {
        return $this->optimizerForceClasses;
    }

    /**
     * Gets the OptimizerImageQuality property value. Determines the image quality for desktop clients
     * @return int|null
    */
    public function getOptimizerImageQuality(): ?int {
        return $this->optimizerImageQuality;
    }

    /**
     * Gets the OptimizerMinifyCSS property value. Determines if the CSS minification should be enabled
     * @return bool|null
    */
    public function getOptimizerMinifyCSS(): ?bool {
        return $this->optimizerMinifyCSS;
    }

    /**
     * Gets the OptimizerMinifyJavaScript property value. Determines if the JavaScript minification should be enabled
     * @return bool|null
    */
    public function getOptimizerMinifyJavaScript(): ?bool {
        return $this->optimizerMinifyJavaScript;
    }

    /**
     * Gets the OptimizerMobileImageQuality property value. Determines the image quality for mobile clients
     * @return int|null
    */
    public function getOptimizerMobileImageQuality(): ?int {
        return $this->optimizerMobileImageQuality;
    }

    /**
     * Gets the OptimizerMobileMaxWidth property value. Determines the maximum automatic image size for mobile clients
     * @return int|null
    */
    public function getOptimizerMobileMaxWidth(): ?int {
        return $this->optimizerMobileMaxWidth;
    }

    /**
     * Gets the OptimizerStaticHtmlEnabled property value. The OptimizerStaticHtmlEnabled property
     * @return bool|null
    */
    public function getOptimizerStaticHtmlEnabled(): ?bool {
        return $this->optimizerStaticHtmlEnabled;
    }

    /**
     * Gets the OptimizerStaticHtmlWordPressBypassCookie property value. The OptimizerStaticHtmlWordPressBypassCookie property
     * @return string|null
    */
    public function getOptimizerStaticHtmlWordPressBypassCookie(): ?string {
        return $this->optimizerStaticHtmlWordPressBypassCookie;
    }

    /**
     * Gets the OptimizerStaticHtmlWordPressPath property value. The OptimizerStaticHtmlWordPressPath property
     * @return string|null
    */
    public function getOptimizerStaticHtmlWordPressPath(): ?string {
        return $this->optimizerStaticHtmlWordPressPath;
    }

    /**
     * Gets the OptimizerWatermarkEnabled property value. Determines if image watermarking should be enabled
     * @return bool|null
    */
    public function getOptimizerWatermarkEnabled(): ?bool {
        return $this->optimizerWatermarkEnabled;
    }

    /**
     * Gets the OptimizerWatermarkMinImageSize property value. Sets the minimum image size to which the watermark will be added
     * @return int|null
    */
    public function getOptimizerWatermarkMinImageSize(): ?int {
        return $this->optimizerWatermarkMinImageSize;
    }

    /**
     * Gets the OptimizerWatermarkOffset property value. Sets the offset of the watermark image
     * @return float|null
    */
    public function getOptimizerWatermarkOffset(): ?float {
        return $this->optimizerWatermarkOffset;
    }

    /**
     * Gets the OptimizerWatermarkPosition property value. The OptimizerWatermarkPosition property
     * @return float|null
    */
    public function getOptimizerWatermarkPosition(): ?float {
        return $this->optimizerWatermarkPosition;
    }

    /**
     * Gets the OptimizerWatermarkUrl property value. Sets the URL of the watermark image
     * @return string|null
    */
    public function getOptimizerWatermarkUrl(): ?string {
        return $this->optimizerWatermarkUrl;
    }

    /**
     * Gets the OriginConnectTimeout property value. The amount of seconds to wait when connecting to the origin. Otherwise the request will fail or retry.
     * @return int|null
    */
    public function getOriginConnectTimeout(): ?int {
        return $this->originConnectTimeout;
    }

    /**
     * Gets the OriginHostHeader property value. Determines the host header that will be sent to the origin
     * @return string|null
    */
    public function getOriginHostHeader(): ?string {
        return $this->originHostHeader;
    }

    /**
     * Gets the OriginResponseTimeout property value. The amount of seconds to wait when waiting for the origin reply. Otherwise the request will fail or retry.
     * @return int|null
    */
    public function getOriginResponseTimeout(): ?int {
        return $this->originResponseTimeout;
    }

    /**
     * Gets the OriginRetries property value. The number of retries to the origin server
     * @return int|null
    */
    public function getOriginRetries(): ?int {
        return $this->originRetries;
    }

    /**
     * Gets the OriginRetry5XXResponses property value. Determines if we should retry the request in case of a 5XX response.
     * @return bool|null
    */
    public function getOriginRetry5XXResponses(): ?bool {
        return $this->originRetry5XXResponses;
    }

    /**
     * Gets the OriginRetryConnectionTimeout property value. Determines if we should retry the request in case of a connection timeout.
     * @return bool|null
    */
    public function getOriginRetryConnectionTimeout(): ?bool {
        return $this->originRetryConnectionTimeout;
    }

    /**
     * Gets the OriginRetryDelay property value. Determines the amount of time that the CDN should wait before retrying an origin request.
     * @return int|null
    */
    public function getOriginRetryDelay(): ?int {
        return $this->originRetryDelay;
    }

    /**
     * Gets the OriginRetryResponseTimeout property value. Determines if we should retry the request in case of a response timeout.
     * @return bool|null
    */
    public function getOriginRetryResponseTimeout(): ?bool {
        return $this->originRetryResponseTimeout;
    }

    /**
     * Gets the OriginShieldEnableConcurrencyLimit property value. Determines if the origin shield concurrency limit is enabled.
     * @return bool|null
    */
    public function getOriginShieldEnableConcurrencyLimit(): ?bool {
        return $this->originShieldEnableConcurrencyLimit;
    }

    /**
     * Gets the OriginShieldMaxConcurrentRequests property value. Determines the number of maximum concurrent requests allowed to the origin.
     * @return int|null
    */
    public function getOriginShieldMaxConcurrentRequests(): ?int {
        return $this->originShieldMaxConcurrentRequests;
    }

    /**
     * Gets the OriginShieldMaxQueuedRequests property value. Determines the max number of origin requests that will remain in the queue
     * @return int|null
    */
    public function getOriginShieldMaxQueuedRequests(): ?int {
        return $this->originShieldMaxQueuedRequests;
    }

    /**
     * Gets the OriginShieldQueueMaxWaitTime property value. Determines the max queue wait time
     * @return int|null
    */
    public function getOriginShieldQueueMaxWaitTime(): ?int {
        return $this->originShieldQueueMaxWaitTime;
    }

    /**
     * Gets the OriginShieldZoneCode property value. The zone code of the origin shield
     * @return string|null
    */
    public function getOriginShieldZoneCode(): ?string {
        return $this->originShieldZoneCode;
    }

    /**
     * Gets the OriginType property value. The OriginType property
     * @return float|null
    */
    public function getOriginType(): ?float {
        return $this->originType;
    }

    /**
     * Gets the OriginUrl property value. The origin URL of the pull zone where the files are fetched from.
     * @return string|null
    */
    public function getOriginUrl(): ?string {
        return $this->originUrl;
    }

    /**
     * Gets the PermaCacheStorageZoneId property value. The IP of the storage zone used for Perma-Cache
     * @return int|null
    */
    public function getPermaCacheStorageZoneId(): ?int {
        return $this->permaCacheStorageZoneId;
    }

    /**
     * Gets the PermaCacheType property value. The PermaCacheType property
     * @return int|null
    */
    public function getPermaCacheType(): ?int {
        return $this->permaCacheType;
    }

    /**
     * Gets the PreloadingScreenCode property value. The custom preloading screen code
     * @return string|null
    */
    public function getPreloadingScreenCode(): ?string {
        return $this->preloadingScreenCode;
    }

    /**
     * Gets the PreloadingScreenCodeEnabled property value. Determines if the custom preloader screen is enabled
     * @return bool|null
    */
    public function getPreloadingScreenCodeEnabled(): ?bool {
        return $this->preloadingScreenCodeEnabled;
    }

    /**
     * Gets the PreloadingScreenDelay property value. The delay in milliseconds after which the preloading screen will be displayed
     * @return int|null
    */
    public function getPreloadingScreenDelay(): ?int {
        return $this->preloadingScreenDelay;
    }

    /**
     * Gets the PreloadingScreenEnabled property value. Determines if the preloading screen is currently enabled
     * @return bool|null
    */
    public function getPreloadingScreenEnabled(): ?bool {
        return $this->preloadingScreenEnabled;
    }

    /**
     * Gets the PreloadingScreenLogoUrl property value. The preloading screen logo URL
     * @return string|null
    */
    public function getPreloadingScreenLogoUrl(): ?string {
        return $this->preloadingScreenLogoUrl;
    }

    /**
     * Gets the PreloadingScreenShowOnFirstVisit property value. The PreloadingScreenShowOnFirstVisit property
     * @return bool|null
    */
    public function getPreloadingScreenShowOnFirstVisit(): ?bool {
        return $this->preloadingScreenShowOnFirstVisit;
    }

    /**
     * Gets the PreloadingScreenTheme property value. The PreloadingScreenTheme property
     * @return float|null
    */
    public function getPreloadingScreenTheme(): ?float {
        return $this->preloadingScreenTheme;
    }

    /**
     * Gets the QueryStringVaryParameters property value. Contains the list of vary parameters that will be used for vary cache by query string. If empty, all parameters will be used to construct the key
     * @return array<string>|null
    */
    public function getQueryStringVaryParameters(): ?array {
        return $this->queryStringVaryParameters;
    }

    /**
     * Gets the RequestCoalescingTimeout property value. Determines the lock time for coalesced requests.
     * @return int|null
    */
    public function getRequestCoalescingTimeout(): ?int {
        return $this->requestCoalescingTimeout;
    }

    /**
     * Gets the RequestLimit property value. Max number of requests per IP per second
     * @return int|null
    */
    public function getRequestLimit(): ?int {
        return $this->requestLimit;
    }

    /**
     * Gets the RoutingFilters property value. The list of routing filters enabled for this zone
     * @return array<PullZoneCreate_RoutingFilters>|null
    */
    public function getRoutingFilters(): ?array {
        return $this->routingFilters;
    }

    /**
     * Gets the ShieldDDosProtectionEnabled property value. The ShieldDDosProtectionEnabled property
     * @return bool|null
    */
    public function getShieldDDosProtectionEnabled(): ?bool {
        return $this->shieldDDosProtectionEnabled;
    }

    /**
     * Gets the ShieldDDosProtectionType property value. The ShieldDDosProtectionType property
     * @return float|null
    */
    public function getShieldDDosProtectionType(): ?float {
        return $this->shieldDDosProtectionType;
    }

    /**
     * Gets the StorageZoneId property value. The ID of the storage zone that the pull zone is linked to
     * @return int|null
    */
    public function getStorageZoneId(): ?int {
        return $this->storageZoneId;
    }

    /**
     * Gets the Type property value. The Type property
     * @return float|null
    */
    public function getType(): ?float {
        return $this->type;
    }

    /**
     * Gets the UseBackgroundUpdate property value. Determines if cache update is performed in the background.
     * @return bool|null
    */
    public function getUseBackgroundUpdate(): ?bool {
        return $this->useBackgroundUpdate;
    }

    /**
     * Gets the UseStaleWhileOffline property value. Determines if we should use stale cache while the origin is offline
     * @return bool|null
    */
    public function getUseStaleWhileOffline(): ?bool {
        return $this->useStaleWhileOffline;
    }

    /**
     * Gets the UseStaleWhileUpdating property value. Determines if we should use stale cache while cache is updating
     * @return bool|null
    */
    public function getUseStaleWhileUpdating(): ?bool {
        return $this->useStaleWhileUpdating;
    }

    /**
     * Gets the VerifyOriginSSL property value. Determines if the Pull Zone should verify the origin SSL certificate
     * @return bool|null
    */
    public function getVerifyOriginSSL(): ?bool {
        return $this->verifyOriginSSL;
    }

    /**
     * Gets the WAFDisabledRuleGroups property value. Determines the enabled WAF rule groups
     * @return array<string>|null
    */
    public function getWAFDisabledRuleGroups(): ?array {
        return $this->wAFDisabledRuleGroups;
    }

    /**
     * Gets the WAFDisabledRules property value. Determines the disabled WAF rules
     * @return array<string>|null
    */
    public function getWAFDisabledRules(): ?array {
        return $this->wAFDisabledRules;
    }

    /**
     * Gets the WAFEnabled property value. Determines if WAF should be enabled on the zone
     * @return bool|null
    */
    public function getWAFEnabled(): ?bool {
        return $this->wAFEnabled;
    }

    /**
     * Gets the WAFEnableRequestHeaderLogging property value. Determines if WAF should enable request headers logging
     * @return bool|null
    */
    public function getWAFEnableRequestHeaderLogging(): ?bool {
        return $this->wAFEnableRequestHeaderLogging;
    }

    /**
     * Gets the WAFRequestHeaderIgnores property value. Determines the list of headers that will be ignored in the WAF logs
     * @return bool|null
    */
    public function getWAFRequestHeaderIgnores(): ?bool {
        return $this->wAFRequestHeaderIgnores;
    }

    /**
     * Gets the ZoneSecurityEnabled property value. True if the URL secure token authentication security is enabled
     * @return bool|null
    */
    public function getZoneSecurityEnabled(): ?bool {
        return $this->zoneSecurityEnabled;
    }

    /**
     * Gets the ZoneSecurityIncludeHashRemoteIP property value. True if the zone security hash should include the remote IP
     * @return bool|null
    */
    public function getZoneSecurityIncludeHashRemoteIP(): ?bool {
        return $this->zoneSecurityIncludeHashRemoteIP;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('AccessControlOriginHeaderExtensions', $this->getAccessControlOriginHeaderExtensions());
        $writer->writeBooleanValue('AddCanonicalHeader', $this->getAddCanonicalHeader());
        $writer->writeBooleanValue('AddHostHeader', $this->getAddHostHeader());
        $writer->writeCollectionOfPrimitiveValues('AllowedReferrers', $this->getAllowedReferrers());
        $writer->writeBooleanValue('AWSSigningEnabled', $this->getAWSSigningEnabled());
        $writer->writeStringValue('AWSSigningKey', $this->getAWSSigningKey());
        $writer->writeStringValue('AWSSigningRegionName', $this->getAWSSigningRegionName());
        $writer->writeStringValue('AWSSigningSecret', $this->getAWSSigningSecret());
        $writer->writeCollectionOfPrimitiveValues('BlockedCountries', $this->getBlockedCountries());
        $writer->writeCollectionOfPrimitiveValues('BlockedIps', $this->getBlockedIps());
        $writer->writeCollectionOfPrimitiveValues('BlockedReferrers', $this->getBlockedReferrers());
        $writer->writeBooleanValue('BlockNoneReferrer', $this->getBlockNoneReferrer());
        $writer->writeBooleanValue('BlockPostRequests', $this->getBlockPostRequests());
        $writer->writeBooleanValue('BlockRootPathAccess', $this->getBlockRootPathAccess());
        $writer->writeCollectionOfPrimitiveValues('BudgetRedirectedCountries', $this->getBudgetRedirectedCountries());
        $writer->writeCollectionOfObjectValues('BunnyAiImageBlueprints', $this->getBunnyAiImageBlueprints());
        $writer->writeIntegerValue('BurstSize', $this->getBurstSize());
        $writer->writeIntegerValue('CacheControlBrowserMaxAgeOverride', $this->getCacheControlBrowserMaxAgeOverride());
        $writer->writeIntegerValue('CacheControlMaxAgeOverride', $this->getCacheControlMaxAgeOverride());
        $writer->writeIntegerValue('CacheControlPublicMaxAgeOverride', $this->getCacheControlPublicMaxAgeOverride());
        $writer->writeBooleanValue('CacheErrorResponses', $this->getCacheErrorResponses());
        $writer->writeIntegerValue('ConnectionLimitPerIPCount', $this->getConnectionLimitPerIPCount());
        $writer->writeCollectionOfPrimitiveValues('CookieVaryParameters', $this->getCookieVaryParameters());
        $writer->writeBooleanValue('DisableCookies', $this->getDisableCookies());
        $writer->writeBooleanValue('DisableLetsEncrypt', $this->getDisableLetsEncrypt());
        $writer->writeIntegerValue('DnsOriginPort', $this->getDnsOriginPort());
        $writer->writeStringValue('DnsOriginScheme', $this->getDnsOriginScheme());
        $writer->writeCollectionOfObjectValues('EdgeRules', $this->getEdgeRules());
        $writer->writeFloatValue('EdgeScriptExecutionPhase', $this->getEdgeScriptExecutionPhase());
        $writer->writeIntegerValue('EdgeScriptId', $this->getEdgeScriptId());
        $writer->writeBooleanValue('EnableAccessControlOriginHeader', $this->getEnableAccessControlOriginHeader());
        $writer->writeBooleanValue('EnableAutoSSL', $this->getEnableAutoSSL());
        $writer->writeBooleanValue('EnableAvifVary', $this->getEnableAvifVary());
        $writer->writeBooleanValue('EnableBunnyImageAi', $this->getEnableBunnyImageAi());
        $writer->writeBooleanValue('EnableCacheSlice', $this->getEnableCacheSlice());
        $writer->writeBooleanValue('EnableCookieVary', $this->getEnableCookieVary());
        $writer->writeBooleanValue('EnableCountryCodeVary', $this->getEnableCountryCodeVary());
        $writer->writeBooleanValue('EnableGeoZoneAF', $this->getEnableGeoZoneAF());
        $writer->writeBooleanValue('EnableGeoZoneASIA', $this->getEnableGeoZoneASIA());
        $writer->writeBooleanValue('EnableGeoZoneEU', $this->getEnableGeoZoneEU());
        $writer->writeBooleanValue('EnableGeoZoneSA', $this->getEnableGeoZoneSA());
        $writer->writeBooleanValue('EnableGeoZoneUS', $this->getEnableGeoZoneUS());
        $writer->writeBooleanValue('EnableHostnameVary', $this->getEnableHostnameVary());
        $writer->writeBooleanValue('EnableLogging', $this->getEnableLogging());
        $writer->writeBooleanValue('EnableMobileVary', $this->getEnableMobileVary());
        $writer->writeBooleanValue('EnableOriginShield', $this->getEnableOriginShield());
        $writer->writeBooleanValue('EnableQueryStringOrdering', $this->getEnableQueryStringOrdering());
        $writer->writeBooleanValue('EnableRequestCoalescing', $this->getEnableRequestCoalescing());
        $writer->writeBooleanValue('EnableSafeHop', $this->getEnableSafeHop());
        $writer->writeBooleanValue('EnableSmartCache', $this->getEnableSmartCache());
        $writer->writeBooleanValue('EnableTLS1', $this->getEnableTLS1());
        $writer->writeBooleanValue('EnableTLS1_1', $this->getEnableTLS11());
        $writer->writeBooleanValue('EnableWebPVary', $this->getEnableWebPVary());
        $writer->writeStringValue('ErrorPageCustomCode', $this->getErrorPageCustomCode());
        $writer->writeBooleanValue('ErrorPageEnableCustomCode', $this->getErrorPageEnableCustomCode());
        $writer->writeBooleanValue('ErrorPageEnableStatuspageWidget', $this->getErrorPageEnableStatuspageWidget());
        $writer->writeStringValue('ErrorPageStatuspageCode', $this->getErrorPageStatuspageCode());
        $writer->writeBooleanValue('ErrorPageWhitelabel', $this->getErrorPageWhitelabel());
        $writer->writeBooleanValue('FollowRedirects', $this->getFollowRedirects());
        $writer->writeBooleanValue('IgnoreQueryStrings', $this->getIgnoreQueryStrings());
        $writer->writeFloatValue('LimitRateAfter', $this->getLimitRateAfter());
        $writer->writeIntegerValue('LimitRatePerSecond', $this->getLimitRatePerSecond());
        $writer->writeFloatValue('LogAnonymizationType', $this->getLogAnonymizationType());
        $writer->writeFloatValue('LogFormat', $this->getLogFormat());
        $writer->writeBooleanValue('LogForwardingEnabled', $this->getLogForwardingEnabled());
        $writer->writeFloatValue('LogForwardingFormat', $this->getLogForwardingFormat());
        $writer->writeStringValue('LogForwardingHostname', $this->getLogForwardingHostname());
        $writer->writeIntegerValue('LogForwardingPort', $this->getLogForwardingPort());
        $writer->writeFloatValue('LogForwardingProtocol', $this->getLogForwardingProtocol());
        $writer->writeStringValue('LogForwardingToken', $this->getLogForwardingToken());
        $writer->writeBooleanValue('LoggingIPAnonymizationEnabled', $this->getLoggingIPAnonymizationEnabled());
        $writer->writeBooleanValue('LoggingSaveToStorage', $this->getLoggingSaveToStorage());
        $writer->writeIntegerValue('LoggingStorageZoneId', $this->getLoggingStorageZoneId());
        $writer->writeStringValue('MagicContainersAppId', $this->getMagicContainersAppId());
        $writer->writeIntegerValue('MagicContainersEndpointId', $this->getMagicContainersEndpointId());
        $writer->writeIntegerValue('MiddlewareScriptId', $this->getMiddlewareScriptId());
        $writer->writeIntegerValue('MonthlyBandwidthLimit', $this->getMonthlyBandwidthLimit());
        $writer->writeFloatValue('MonthlyCharges', $this->getMonthlyCharges());
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeBooleanValue('OptimizerAutomaticOptimizationEnabled', $this->getOptimizerAutomaticOptimizationEnabled());
        $writer->writeCollectionOfObjectValues('OptimizerClasses', $this->getOptimizerClasses());
        $writer->writeIntegerValue('OptimizerDesktopMaxWidth', $this->getOptimizerDesktopMaxWidth());
        $writer->writeBooleanValue('OptimizerEnabled', $this->getOptimizerEnabled());
        $writer->writeBooleanValue('OptimizerEnableManipulationEngine', $this->getOptimizerEnableManipulationEngine());
        $writer->writeBooleanValue('OptimizerEnableWebP', $this->getOptimizerEnableWebP());
        $writer->writeBooleanValue('OptimizerForceClasses', $this->getOptimizerForceClasses());
        $writer->writeIntegerValue('OptimizerImageQuality', $this->getOptimizerImageQuality());
        $writer->writeBooleanValue('OptimizerMinifyCSS', $this->getOptimizerMinifyCSS());
        $writer->writeBooleanValue('OptimizerMinifyJavaScript', $this->getOptimizerMinifyJavaScript());
        $writer->writeIntegerValue('OptimizerMobileImageQuality', $this->getOptimizerMobileImageQuality());
        $writer->writeIntegerValue('OptimizerMobileMaxWidth', $this->getOptimizerMobileMaxWidth());
        $writer->writeBooleanValue('OptimizerStaticHtmlEnabled', $this->getOptimizerStaticHtmlEnabled());
        $writer->writeStringValue('OptimizerStaticHtmlWordPressBypassCookie', $this->getOptimizerStaticHtmlWordPressBypassCookie());
        $writer->writeStringValue('OptimizerStaticHtmlWordPressPath', $this->getOptimizerStaticHtmlWordPressPath());
        $writer->writeBooleanValue('OptimizerWatermarkEnabled', $this->getOptimizerWatermarkEnabled());
        $writer->writeIntegerValue('OptimizerWatermarkMinImageSize', $this->getOptimizerWatermarkMinImageSize());
        $writer->writeFloatValue('OptimizerWatermarkOffset', $this->getOptimizerWatermarkOffset());
        $writer->writeFloatValue('OptimizerWatermarkPosition', $this->getOptimizerWatermarkPosition());
        $writer->writeStringValue('OptimizerWatermarkUrl', $this->getOptimizerWatermarkUrl());
        $writer->writeIntegerValue('OriginConnectTimeout', $this->getOriginConnectTimeout());
        $writer->writeStringValue('OriginHostHeader', $this->getOriginHostHeader());
        $writer->writeIntegerValue('OriginResponseTimeout', $this->getOriginResponseTimeout());
        $writer->writeIntegerValue('OriginRetries', $this->getOriginRetries());
        $writer->writeBooleanValue('OriginRetry5XXResponses', $this->getOriginRetry5XXResponses());
        $writer->writeBooleanValue('OriginRetryConnectionTimeout', $this->getOriginRetryConnectionTimeout());
        $writer->writeIntegerValue('OriginRetryDelay', $this->getOriginRetryDelay());
        $writer->writeBooleanValue('OriginRetryResponseTimeout', $this->getOriginRetryResponseTimeout());
        $writer->writeBooleanValue('OriginShieldEnableConcurrencyLimit', $this->getOriginShieldEnableConcurrencyLimit());
        $writer->writeIntegerValue('OriginShieldMaxConcurrentRequests', $this->getOriginShieldMaxConcurrentRequests());
        $writer->writeIntegerValue('OriginShieldMaxQueuedRequests', $this->getOriginShieldMaxQueuedRequests());
        $writer->writeIntegerValue('OriginShieldQueueMaxWaitTime', $this->getOriginShieldQueueMaxWaitTime());
        $writer->writeStringValue('OriginShieldZoneCode', $this->getOriginShieldZoneCode());
        $writer->writeFloatValue('OriginType', $this->getOriginType());
        $writer->writeStringValue('OriginUrl', $this->getOriginUrl());
        $writer->writeIntegerValue('PermaCacheStorageZoneId', $this->getPermaCacheStorageZoneId());
        $writer->writeIntegerValue('PermaCacheType', $this->getPermaCacheType());
        $writer->writeStringValue('PreloadingScreenCode', $this->getPreloadingScreenCode());
        $writer->writeBooleanValue('PreloadingScreenCodeEnabled', $this->getPreloadingScreenCodeEnabled());
        $writer->writeIntegerValue('PreloadingScreenDelay', $this->getPreloadingScreenDelay());
        $writer->writeBooleanValue('PreloadingScreenEnabled', $this->getPreloadingScreenEnabled());
        $writer->writeStringValue('PreloadingScreenLogoUrl', $this->getPreloadingScreenLogoUrl());
        $writer->writeBooleanValue('PreloadingScreenShowOnFirstVisit', $this->getPreloadingScreenShowOnFirstVisit());
        $writer->writeFloatValue('PreloadingScreenTheme', $this->getPreloadingScreenTheme());
        $writer->writeCollectionOfPrimitiveValues('QueryStringVaryParameters', $this->getQueryStringVaryParameters());
        $writer->writeIntegerValue('RequestCoalescingTimeout', $this->getRequestCoalescingTimeout());
        $writer->writeIntegerValue('RequestLimit', $this->getRequestLimit());
        $writer->writeCollectionOfEnumValues('RoutingFilters', $this->getRoutingFilters());
        $writer->writeBooleanValue('ShieldDDosProtectionEnabled', $this->getShieldDDosProtectionEnabled());
        $writer->writeFloatValue('ShieldDDosProtectionType', $this->getShieldDDosProtectionType());
        $writer->writeIntegerValue('StorageZoneId', $this->getStorageZoneId());
        $writer->writeFloatValue('Type', $this->getType());
        $writer->writeBooleanValue('UseBackgroundUpdate', $this->getUseBackgroundUpdate());
        $writer->writeBooleanValue('UseStaleWhileOffline', $this->getUseStaleWhileOffline());
        $writer->writeBooleanValue('UseStaleWhileUpdating', $this->getUseStaleWhileUpdating());
        $writer->writeBooleanValue('VerifyOriginSSL', $this->getVerifyOriginSSL());
        $writer->writeCollectionOfPrimitiveValues('WAFDisabledRuleGroups', $this->getWAFDisabledRuleGroups());
        $writer->writeCollectionOfPrimitiveValues('WAFDisabledRules', $this->getWAFDisabledRules());
        $writer->writeBooleanValue('WAFEnabled', $this->getWAFEnabled());
        $writer->writeBooleanValue('WAFEnableRequestHeaderLogging', $this->getWAFEnableRequestHeaderLogging());
        $writer->writeBooleanValue('WAFRequestHeaderIgnores', $this->getWAFRequestHeaderIgnores());
        $writer->writeBooleanValue('ZoneSecurityEnabled', $this->getZoneSecurityEnabled());
        $writer->writeBooleanValue('ZoneSecurityIncludeHashRemoteIP', $this->getZoneSecurityIncludeHashRemoteIP());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AccessControlOriginHeaderExtensions property value. The list of extensions that will return the CORS headers
     * @param array<string>|null $value Value to set for the AccessControlOriginHeaderExtensions property.
    */
    public function setAccessControlOriginHeaderExtensions(?array $value): void {
        $this->accessControlOriginHeaderExtensions = $value;
    }

    /**
     * Sets the AddCanonicalHeader property value. Determines if the Add Canonical Header is enabled for this Pull Zone
     * @param bool|null $value Value to set for the AddCanonicalHeader property.
    */
    public function setAddCanonicalHeader(?bool $value): void {
        $this->addCanonicalHeader = $value;
    }

    /**
     * Sets the AddHostHeader property value. Determines if the Pull Zone should forward the current hostname to the origin
     * @param bool|null $value Value to set for the AddHostHeader property.
    */
    public function setAddHostHeader(?bool $value): void {
        $this->addHostHeader = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the AllowedReferrers property value. The list of referrer hostnames that are allowed to access the pull zone.Requests containing the header Referer: hostname that is not on the list will be rejected.If empty, all the referrers are allowed
     * @param array<string>|null $value Value to set for the AllowedReferrers property.
    */
    public function setAllowedReferrers(?array $value): void {
        $this->allowedReferrers = $value;
    }

    /**
     * Sets the AWSSigningEnabled property value. Determines if the AWS Signing is enabled
     * @param bool|null $value Value to set for the AWSSigningEnabled property.
    */
    public function setAWSSigningEnabled(?bool $value): void {
        $this->aWSSigningEnabled = $value;
    }

    /**
     * Sets the AWSSigningKey property value. The AWS Signing region key
     * @param string|null $value Value to set for the AWSSigningKey property.
    */
    public function setAWSSigningKey(?string $value): void {
        $this->aWSSigningKey = $value;
    }

    /**
     * Sets the AWSSigningRegionName property value. The AWS Signing region name
     * @param string|null $value Value to set for the AWSSigningRegionName property.
    */
    public function setAWSSigningRegionName(?string $value): void {
        $this->aWSSigningRegionName = $value;
    }

    /**
     * Sets the AWSSigningSecret property value. The AWS Signing region secret
     * @param string|null $value Value to set for the AWSSigningSecret property.
    */
    public function setAWSSigningSecret(?string $value): void {
        $this->aWSSigningSecret = $value;
    }

    /**
     * Sets the BlockedCountries property value. The list of blocked countries with the two-letter Alpha2 ISO codes
     * @param array<string>|null $value Value to set for the BlockedCountries property.
    */
    public function setBlockedCountries(?array $value): void {
        $this->blockedCountries = $value;
    }

    /**
     * Sets the BlockedIps property value. The list of IPs that are blocked from accessing the pull zone. Requests coming from the following IPs will be rejected. If empty, all the IPs will be allowed
     * @param array<string>|null $value Value to set for the BlockedIps property.
    */
    public function setBlockedIps(?array $value): void {
        $this->blockedIps = $value;
    }

    /**
     * Sets the BlockedReferrers property value. The list of referrer hostnames that are not allowed to access the pull zone. Requests containing the header Referer: hostname that is on the list will be rejected. If empty, all the referrers are allowed
     * @param array<string>|null $value Value to set for the BlockedReferrers property.
    */
    public function setBlockedReferrers(?array $value): void {
        $this->blockedReferrers = $value;
    }

    /**
     * Sets the BlockNoneReferrer property value. The BlockNoneReferrer property
     * @param bool|null $value Value to set for the BlockNoneReferrer property.
    */
    public function setBlockNoneReferrer(?bool $value): void {
        $this->blockNoneReferrer = $value;
    }

    /**
     * Sets the BlockPostRequests property value. If true, POST requests to the zone will be blocked
     * @param bool|null $value Value to set for the BlockPostRequests property.
    */
    public function setBlockPostRequests(?bool $value): void {
        $this->blockPostRequests = $value;
    }

    /**
     * Sets the BlockRootPathAccess property value. If true, access to root path will return a 403 error
     * @param bool|null $value Value to set for the BlockRootPathAccess property.
    */
    public function setBlockRootPathAccess(?bool $value): void {
        $this->blockRootPathAccess = $value;
    }

    /**
     * Sets the BudgetRedirectedCountries property value. The list of budget redirected countries with the two-letter Alpha2 ISO codes
     * @param array<string>|null $value Value to set for the BudgetRedirectedCountries property.
    */
    public function setBudgetRedirectedCountries(?array $value): void {
        $this->budgetRedirectedCountries = $value;
    }

    /**
     * Sets the BunnyAiImageBlueprints property value. The BunnyAiImageBlueprints property
     * @param array<BunnyAiImageBlueprint>|null $value Value to set for the BunnyAiImageBlueprints property.
    */
    public function setBunnyAiImageBlueprints(?array $value): void {
        $this->bunnyAiImageBlueprints = $value;
    }

    /**
     * Sets the BurstSize property value. Excessive requests are delayed until their number exceeds the maximum burst size.
     * @param int|null $value Value to set for the BurstSize property.
    */
    public function setBurstSize(?int $value): void {
        $this->burstSize = $value;
    }

    /**
     * Sets the CacheControlBrowserMaxAgeOverride property value. Sets the browser cache control override setting for this zone
     * @param int|null $value Value to set for the CacheControlBrowserMaxAgeOverride property.
    */
    public function setCacheControlBrowserMaxAgeOverride(?int $value): void {
        $this->cacheControlBrowserMaxAgeOverride = $value;
    }

    /**
     * Sets the CacheControlMaxAgeOverride property value. The override cache time for the pull zone
     * @param int|null $value Value to set for the CacheControlMaxAgeOverride property.
    */
    public function setCacheControlMaxAgeOverride(?int $value): void {
        $this->cacheControlMaxAgeOverride = $value;
    }

    /**
     * Sets the CacheControlPublicMaxAgeOverride property value. The override cache time for the pull zone for the end client
     * @param int|null $value Value to set for the CacheControlPublicMaxAgeOverride property.
    */
    public function setCacheControlPublicMaxAgeOverride(?int $value): void {
        $this->cacheControlPublicMaxAgeOverride = $value;
    }

    /**
     * Sets the CacheErrorResponses property value. Determines if bunny.net should be caching error responses
     * @param bool|null $value Value to set for the CacheErrorResponses property.
    */
    public function setCacheErrorResponses(?bool $value): void {
        $this->cacheErrorResponses = $value;
    }

    /**
     * Sets the ConnectionLimitPerIPCount property value. The number of connections limited per IP for this zone
     * @param int|null $value Value to set for the ConnectionLimitPerIPCount property.
    */
    public function setConnectionLimitPerIPCount(?int $value): void {
        $this->connectionLimitPerIPCount = $value;
    }

    /**
     * Sets the CookieVaryParameters property value. Contains the list of vary parameters that will be used for vary cache by cookie string. If empty, cookie vary will not be used.
     * @param array<string>|null $value Value to set for the CookieVaryParameters property.
    */
    public function setCookieVaryParameters(?array $value): void {
        $this->cookieVaryParameters = $value;
    }

    /**
     * Sets the DisableCookies property value. Determines if the cookies are disabled for the pull zone
     * @param bool|null $value Value to set for the DisableCookies property.
    */
    public function setDisableCookies(?bool $value): void {
        $this->disableCookies = $value;
    }

    /**
     * Sets the DisableLetsEncrypt property value. If true, the built-in let's encrypt is disabled and requests are passed to the origin.
     * @param bool|null $value Value to set for the DisableLetsEncrypt property.
    */
    public function setDisableLetsEncrypt(?bool $value): void {
        $this->disableLetsEncrypt = $value;
    }

    /**
     * Sets the DnsOriginPort property value. Determines the origin port of the pull zone.
     * @param int|null $value Value to set for the DnsOriginPort property.
    */
    public function setDnsOriginPort(?int $value): void {
        $this->dnsOriginPort = $value;
    }

    /**
     * Sets the DnsOriginScheme property value. Determines the origin scheme of the pull zone.
     * @param string|null $value Value to set for the DnsOriginScheme property.
    */
    public function setDnsOriginScheme(?string $value): void {
        $this->dnsOriginScheme = $value;
    }

    /**
     * Sets the EdgeRules property value. The list of edge rules on this Pull Zone
     * @param array<EdgeRule>|null $value Value to set for the EdgeRules property.
    */
    public function setEdgeRules(?array $value): void {
        $this->edgeRules = $value;
    }

    /**
     * Sets the EdgeScriptExecutionPhase property value. The EdgeScriptExecutionPhase property
     * @param float|null $value Value to set for the EdgeScriptExecutionPhase property.
    */
    public function setEdgeScriptExecutionPhase(?float $value): void {
        $this->edgeScriptExecutionPhase = $value;
    }

    /**
     * Sets the EdgeScriptId property value. The ID of the edge script that the pull zone is linked to
     * @param int|null $value Value to set for the EdgeScriptId property.
    */
    public function setEdgeScriptId(?int $value): void {
        $this->edgeScriptId = $value;
    }

    /**
     * Sets the EnableAccessControlOriginHeader property value. Determines if the CORS headers should be enabled
     * @param bool|null $value Value to set for the EnableAccessControlOriginHeader property.
    */
    public function setEnableAccessControlOriginHeader(?bool $value): void {
        $this->enableAccessControlOriginHeader = $value;
    }

    /**
     * Sets the EnableAutoSSL property value. If set to true, any hostnames added to this Pull Zone will automatically enable SSL.
     * @param bool|null $value Value to set for the EnableAutoSSL property.
    */
    public function setEnableAutoSSL(?bool $value): void {
        $this->enableAutoSSL = $value;
    }

    /**
     * Sets the EnableAvifVary property value. Determines if the AVIF Vary feature is enabled.
     * @param bool|null $value Value to set for the EnableAvifVary property.
    */
    public function setEnableAvifVary(?bool $value): void {
        $this->enableAvifVary = $value;
    }

    /**
     * Sets the EnableBunnyImageAi property value. The EnableBunnyImageAi property
     * @param bool|null $value Value to set for the EnableBunnyImageAi property.
    */
    public function setEnableBunnyImageAi(?bool $value): void {
        $this->enableBunnyImageAi = $value;
    }

    /**
     * Sets the EnableCacheSlice property value. Determines if the cache slice (Optimize for video) feature is enabled for the Pull Zone
     * @param bool|null $value Value to set for the EnableCacheSlice property.
    */
    public function setEnableCacheSlice(?bool $value): void {
        $this->enableCacheSlice = $value;
    }

    /**
     * Sets the EnableCookieVary property value. Determines if the Cookie Vary feature is enabled.
     * @param bool|null $value Value to set for the EnableCookieVary property.
    */
    public function setEnableCookieVary(?bool $value): void {
        $this->enableCookieVary = $value;
    }

    /**
     * Sets the EnableCountryCodeVary property value. Determines if the Country Code Vary feature is enabled.
     * @param bool|null $value Value to set for the EnableCountryCodeVary property.
    */
    public function setEnableCountryCodeVary(?bool $value): void {
        $this->enableCountryCodeVary = $value;
    }

    /**
     * Sets the EnableGeoZoneAF property value. Determines if the delivery from the Africa region is enabled for this pull zone
     * @param bool|null $value Value to set for the EnableGeoZoneAF property.
    */
    public function setEnableGeoZoneAF(?bool $value): void {
        $this->enableGeoZoneAF = $value;
    }

    /**
     * Sets the EnableGeoZoneASIA property value. Determines if the delivery from the Asian / Oceanian region is enabled for this pull zone
     * @param bool|null $value Value to set for the EnableGeoZoneASIA property.
    */
    public function setEnableGeoZoneASIA(?bool $value): void {
        $this->enableGeoZoneASIA = $value;
    }

    /**
     * Sets the EnableGeoZoneEU property value. Determines if the delivery from the European region is enabled for this pull zone
     * @param bool|null $value Value to set for the EnableGeoZoneEU property.
    */
    public function setEnableGeoZoneEU(?bool $value): void {
        $this->enableGeoZoneEU = $value;
    }

    /**
     * Sets the EnableGeoZoneSA property value. Determines if the delivery from the South American region is enabled for this pull zone
     * @param bool|null $value Value to set for the EnableGeoZoneSA property.
    */
    public function setEnableGeoZoneSA(?bool $value): void {
        $this->enableGeoZoneSA = $value;
    }

    /**
     * Sets the EnableGeoZoneUS property value. Determines if the delivery from the North American region is enabled for this pull zone
     * @param bool|null $value Value to set for the EnableGeoZoneUS property.
    */
    public function setEnableGeoZoneUS(?bool $value): void {
        $this->enableGeoZoneUS = $value;
    }

    /**
     * Sets the EnableHostnameVary property value. Determines if the Hostname Vary feature is enabled.
     * @param bool|null $value Value to set for the EnableHostnameVary property.
    */
    public function setEnableHostnameVary(?bool $value): void {
        $this->enableHostnameVary = $value;
    }

    /**
     * Sets the EnableLogging property value. Determines if the logging is enabled for this Pull Zone
     * @param bool|null $value Value to set for the EnableLogging property.
    */
    public function setEnableLogging(?bool $value): void {
        $this->enableLogging = $value;
    }

    /**
     * Sets the EnableMobileVary property value. Determines if the Mobile Vary feature is enabled.
     * @param bool|null $value Value to set for the EnableMobileVary property.
    */
    public function setEnableMobileVary(?bool $value): void {
        $this->enableMobileVary = $value;
    }

    /**
     * Sets the EnableOriginShield property value. If true the server will use the origin shield feature
     * @param bool|null $value Value to set for the EnableOriginShield property.
    */
    public function setEnableOriginShield(?bool $value): void {
        $this->enableOriginShield = $value;
    }

    /**
     * Sets the EnableQueryStringOrdering property value. If set to true the query string ordering property is enabled.
     * @param bool|null $value Value to set for the EnableQueryStringOrdering property.
    */
    public function setEnableQueryStringOrdering(?bool $value): void {
        $this->enableQueryStringOrdering = $value;
    }

    /**
     * Sets the EnableRequestCoalescing property value. Determines if request coalescing is currently enabled.
     * @param bool|null $value Value to set for the EnableRequestCoalescing property.
    */
    public function setEnableRequestCoalescing(?bool $value): void {
        $this->enableRequestCoalescing = $value;
    }

    /**
     * Sets the EnableSafeHop property value. The EnableSafeHop property
     * @param bool|null $value Value to set for the EnableSafeHop property.
    */
    public function setEnableSafeHop(?bool $value): void {
        $this->enableSafeHop = $value;
    }

    /**
     * Sets the EnableSmartCache property value. Determines if smart caching is enabled for this zone
     * @param bool|null $value Value to set for the EnableSmartCache property.
    */
    public function setEnableSmartCache(?bool $value): void {
        $this->enableSmartCache = $value;
    }

    /**
     * Sets the EnableTLS1 property value. Determines if the TLS 1 is enabled on the Pull Zone
     * @param bool|null $value Value to set for the EnableTLS1 property.
    */
    public function setEnableTLS1(?bool $value): void {
        $this->enableTLS1 = $value;
    }

    /**
     * Sets the EnableTLS1_1 property value. Determines if the TLS 1.1 is enabled on the Pull Zone
     * @param bool|null $value Value to set for the EnableTLS1_1 property.
    */
    public function setEnableTLS11(?bool $value): void {
        $this->enableTLS1_1 = $value;
    }

    /**
     * Sets the EnableWebPVary property value. Determines if the WebP Vary feature is enabled.
     * @param bool|null $value Value to set for the EnableWebPVary property.
    */
    public function setEnableWebPVary(?bool $value): void {
        $this->enableWebPVary = $value;
    }

    /**
     * Sets the ErrorPageCustomCode property value. Contains the custom error page code that will be returned
     * @param string|null $value Value to set for the ErrorPageCustomCode property.
    */
    public function setErrorPageCustomCode(?string $value): void {
        $this->errorPageCustomCode = $value;
    }

    /**
     * Sets the ErrorPageEnableCustomCode property value. Determines if custom error page code should be enabled.
     * @param bool|null $value Value to set for the ErrorPageEnableCustomCode property.
    */
    public function setErrorPageEnableCustomCode(?bool $value): void {
        $this->errorPageEnableCustomCode = $value;
    }

    /**
     * Sets the ErrorPageEnableStatuspageWidget property value. Determines if the statuspage widget should be displayed on the error pages
     * @param bool|null $value Value to set for the ErrorPageEnableStatuspageWidget property.
    */
    public function setErrorPageEnableStatuspageWidget(?bool $value): void {
        $this->errorPageEnableStatuspageWidget = $value;
    }

    /**
     * Sets the ErrorPageStatuspageCode property value. The statuspage code that will be used to build the status widget
     * @param string|null $value Value to set for the ErrorPageStatuspageCode property.
    */
    public function setErrorPageStatuspageCode(?string $value): void {
        $this->errorPageStatuspageCode = $value;
    }

    /**
     * Sets the ErrorPageWhitelabel property value. Determines if the error pages should be whitelabel or not
     * @param bool|null $value Value to set for the ErrorPageWhitelabel property.
    */
    public function setErrorPageWhitelabel(?bool $value): void {
        $this->errorPageWhitelabel = $value;
    }

    /**
     * Sets the FollowRedirects property value. Determines if the zone will follow origin redirects
     * @param bool|null $value Value to set for the FollowRedirects property.
    */
    public function setFollowRedirects(?bool $value): void {
        $this->followRedirects = $value;
    }

    /**
     * Sets the IgnoreQueryStrings property value. True if the Pull Zone is ignoring query strings when serving cached objects
     * @param bool|null $value Value to set for the IgnoreQueryStrings property.
    */
    public function setIgnoreQueryStrings(?bool $value): void {
        $this->ignoreQueryStrings = $value;
    }

    /**
     * Sets the LimitRateAfter property value. The amount of data after the rate limit will be activated
     * @param float|null $value Value to set for the LimitRateAfter property.
    */
    public function setLimitRateAfter(?float $value): void {
        $this->limitRateAfter = $value;
    }

    /**
     * Sets the LimitRatePerSecond property value. The maximum rate at which the zone will transfer data in kb/s. 0 for unlimited
     * @param int|null $value Value to set for the LimitRatePerSecond property.
    */
    public function setLimitRatePerSecond(?int $value): void {
        $this->limitRatePerSecond = $value;
    }

    /**
     * Sets the LogAnonymizationType property value. The LogAnonymizationType property
     * @param float|null $value Value to set for the LogAnonymizationType property.
    */
    public function setLogAnonymizationType(?float $value): void {
        $this->logAnonymizationType = $value;
    }

    /**
     * Sets the LogFormat property value. The LogFormat property
     * @param float|null $value Value to set for the LogFormat property.
    */
    public function setLogFormat(?float $value): void {
        $this->logFormat = $value;
    }

    /**
     * Sets the LogForwardingEnabled property value. Determines if the log forwarding is enabled
     * @param bool|null $value Value to set for the LogForwardingEnabled property.
    */
    public function setLogForwardingEnabled(?bool $value): void {
        $this->logForwardingEnabled = $value;
    }

    /**
     * Sets the LogForwardingFormat property value. The LogForwardingFormat property
     * @param float|null $value Value to set for the LogForwardingFormat property.
    */
    public function setLogForwardingFormat(?float $value): void {
        $this->logForwardingFormat = $value;
    }

    /**
     * Sets the LogForwardingHostname property value. The log forwarding hostname
     * @param string|null $value Value to set for the LogForwardingHostname property.
    */
    public function setLogForwardingHostname(?string $value): void {
        $this->logForwardingHostname = $value;
    }

    /**
     * Sets the LogForwardingPort property value. The log forwarding port
     * @param int|null $value Value to set for the LogForwardingPort property.
    */
    public function setLogForwardingPort(?int $value): void {
        $this->logForwardingPort = $value;
    }

    /**
     * Sets the LogForwardingProtocol property value. The LogForwardingProtocol property
     * @param float|null $value Value to set for the LogForwardingProtocol property.
    */
    public function setLogForwardingProtocol(?float $value): void {
        $this->logForwardingProtocol = $value;
    }

    /**
     * Sets the LogForwardingToken property value. The log forwarding token value
     * @param string|null $value Value to set for the LogForwardingToken property.
    */
    public function setLogForwardingToken(?string $value): void {
        $this->logForwardingToken = $value;
    }

    /**
     * Sets the LoggingIPAnonymizationEnabled property value. Determines if the log anonymization should be enabled
     * @param bool|null $value Value to set for the LoggingIPAnonymizationEnabled property.
    */
    public function setLoggingIPAnonymizationEnabled(?bool $value): void {
        $this->loggingIPAnonymizationEnabled = $value;
    }

    /**
     * Sets the LoggingSaveToStorage property value. Determines if the permanent logging feature is enabled
     * @param bool|null $value Value to set for the LoggingSaveToStorage property.
    */
    public function setLoggingSaveToStorage(?bool $value): void {
        $this->loggingSaveToStorage = $value;
    }

    /**
     * Sets the LoggingStorageZoneId property value. The ID of the logging storage zone that is configured for this Pull Zone
     * @param int|null $value Value to set for the LoggingStorageZoneId property.
    */
    public function setLoggingStorageZoneId(?int $value): void {
        $this->loggingStorageZoneId = $value;
    }

    /**
     * Sets the MagicContainersAppId property value. The MagicContainersAppId property
     * @param string|null $value Value to set for the MagicContainersAppId property.
    */
    public function setMagicContainersAppId(?string $value): void {
        $this->magicContainersAppId = $value;
    }

    /**
     * Sets the MagicContainersEndpointId property value. The MagicContainersEndpointId property
     * @param int|null $value Value to set for the MagicContainersEndpointId property.
    */
    public function setMagicContainersEndpointId(?int $value): void {
        $this->magicContainersEndpointId = $value;
    }

    /**
     * Sets the MiddlewareScriptId property value. The MiddlewareScriptId property
     * @param int|null $value Value to set for the MiddlewareScriptId property.
    */
    public function setMiddlewareScriptId(?int $value): void {
        $this->middlewareScriptId = $value;
    }

    /**
     * Sets the MonthlyBandwidthLimit property value. The monthly limit of bandwidth in bytes that the pullzone is allowed to use
     * @param int|null $value Value to set for the MonthlyBandwidthLimit property.
    */
    public function setMonthlyBandwidthLimit(?int $value): void {
        $this->monthlyBandwidthLimit = $value;
    }

    /**
     * Sets the MonthlyCharges property value. The total monthly charges for this so zone so far
     * @param float|null $value Value to set for the MonthlyCharges property.
    */
    public function setMonthlyCharges(?float $value): void {
        $this->monthlyCharges = $value;
    }

    /**
     * Sets the Name property value. The name of the pull zone.
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the OptimizerAutomaticOptimizationEnabled property value. Determines if the automatic image optimization should be enabled
     * @param bool|null $value Value to set for the OptimizerAutomaticOptimizationEnabled property.
    */
    public function setOptimizerAutomaticOptimizationEnabled(?bool $value): void {
        $this->optimizerAutomaticOptimizationEnabled = $value;
    }

    /**
     * Sets the OptimizerClasses property value. Contains the list of optimizer classes
     * @param array<OptimizerClass>|null $value Value to set for the OptimizerClasses property.
    */
    public function setOptimizerClasses(?array $value): void {
        $this->optimizerClasses = $value;
    }

    /**
     * Sets the OptimizerDesktopMaxWidth property value. Determines the maximum automatic image size for desktop clients
     * @param int|null $value Value to set for the OptimizerDesktopMaxWidth property.
    */
    public function setOptimizerDesktopMaxWidth(?int $value): void {
        $this->optimizerDesktopMaxWidth = $value;
    }

    /**
     * Sets the OptimizerEnabled property value. Determines if the optimizer should be enabled for this zone
     * @param bool|null $value Value to set for the OptimizerEnabled property.
    */
    public function setOptimizerEnabled(?bool $value): void {
        $this->optimizerEnabled = $value;
    }

    /**
     * Sets the OptimizerEnableManipulationEngine property value. Determines the image manipulation should be enabled
     * @param bool|null $value Value to set for the OptimizerEnableManipulationEngine property.
    */
    public function setOptimizerEnableManipulationEngine(?bool $value): void {
        $this->optimizerEnableManipulationEngine = $value;
    }

    /**
     * Sets the OptimizerEnableWebP property value. Determines if the WebP optimization should be enabled
     * @param bool|null $value Value to set for the OptimizerEnableWebP property.
    */
    public function setOptimizerEnableWebP(?bool $value): void {
        $this->optimizerEnableWebP = $value;
    }

    /**
     * Sets the OptimizerForceClasses property value. Determines if the optimizer class list should be enforced
     * @param bool|null $value Value to set for the OptimizerForceClasses property.
    */
    public function setOptimizerForceClasses(?bool $value): void {
        $this->optimizerForceClasses = $value;
    }

    /**
     * Sets the OptimizerImageQuality property value. Determines the image quality for desktop clients
     * @param int|null $value Value to set for the OptimizerImageQuality property.
    */
    public function setOptimizerImageQuality(?int $value): void {
        $this->optimizerImageQuality = $value;
    }

    /**
     * Sets the OptimizerMinifyCSS property value. Determines if the CSS minification should be enabled
     * @param bool|null $value Value to set for the OptimizerMinifyCSS property.
    */
    public function setOptimizerMinifyCSS(?bool $value): void {
        $this->optimizerMinifyCSS = $value;
    }

    /**
     * Sets the OptimizerMinifyJavaScript property value. Determines if the JavaScript minification should be enabled
     * @param bool|null $value Value to set for the OptimizerMinifyJavaScript property.
    */
    public function setOptimizerMinifyJavaScript(?bool $value): void {
        $this->optimizerMinifyJavaScript = $value;
    }

    /**
     * Sets the OptimizerMobileImageQuality property value. Determines the image quality for mobile clients
     * @param int|null $value Value to set for the OptimizerMobileImageQuality property.
    */
    public function setOptimizerMobileImageQuality(?int $value): void {
        $this->optimizerMobileImageQuality = $value;
    }

    /**
     * Sets the OptimizerMobileMaxWidth property value. Determines the maximum automatic image size for mobile clients
     * @param int|null $value Value to set for the OptimizerMobileMaxWidth property.
    */
    public function setOptimizerMobileMaxWidth(?int $value): void {
        $this->optimizerMobileMaxWidth = $value;
    }

    /**
     * Sets the OptimizerStaticHtmlEnabled property value. The OptimizerStaticHtmlEnabled property
     * @param bool|null $value Value to set for the OptimizerStaticHtmlEnabled property.
    */
    public function setOptimizerStaticHtmlEnabled(?bool $value): void {
        $this->optimizerStaticHtmlEnabled = $value;
    }

    /**
     * Sets the OptimizerStaticHtmlWordPressBypassCookie property value. The OptimizerStaticHtmlWordPressBypassCookie property
     * @param string|null $value Value to set for the OptimizerStaticHtmlWordPressBypassCookie property.
    */
    public function setOptimizerStaticHtmlWordPressBypassCookie(?string $value): void {
        $this->optimizerStaticHtmlWordPressBypassCookie = $value;
    }

    /**
     * Sets the OptimizerStaticHtmlWordPressPath property value. The OptimizerStaticHtmlWordPressPath property
     * @param string|null $value Value to set for the OptimizerStaticHtmlWordPressPath property.
    */
    public function setOptimizerStaticHtmlWordPressPath(?string $value): void {
        $this->optimizerStaticHtmlWordPressPath = $value;
    }

    /**
     * Sets the OptimizerWatermarkEnabled property value. Determines if image watermarking should be enabled
     * @param bool|null $value Value to set for the OptimizerWatermarkEnabled property.
    */
    public function setOptimizerWatermarkEnabled(?bool $value): void {
        $this->optimizerWatermarkEnabled = $value;
    }

    /**
     * Sets the OptimizerWatermarkMinImageSize property value. Sets the minimum image size to which the watermark will be added
     * @param int|null $value Value to set for the OptimizerWatermarkMinImageSize property.
    */
    public function setOptimizerWatermarkMinImageSize(?int $value): void {
        $this->optimizerWatermarkMinImageSize = $value;
    }

    /**
     * Sets the OptimizerWatermarkOffset property value. Sets the offset of the watermark image
     * @param float|null $value Value to set for the OptimizerWatermarkOffset property.
    */
    public function setOptimizerWatermarkOffset(?float $value): void {
        $this->optimizerWatermarkOffset = $value;
    }

    /**
     * Sets the OptimizerWatermarkPosition property value. The OptimizerWatermarkPosition property
     * @param float|null $value Value to set for the OptimizerWatermarkPosition property.
    */
    public function setOptimizerWatermarkPosition(?float $value): void {
        $this->optimizerWatermarkPosition = $value;
    }

    /**
     * Sets the OptimizerWatermarkUrl property value. Sets the URL of the watermark image
     * @param string|null $value Value to set for the OptimizerWatermarkUrl property.
    */
    public function setOptimizerWatermarkUrl(?string $value): void {
        $this->optimizerWatermarkUrl = $value;
    }

    /**
     * Sets the OriginConnectTimeout property value. The amount of seconds to wait when connecting to the origin. Otherwise the request will fail or retry.
     * @param int|null $value Value to set for the OriginConnectTimeout property.
    */
    public function setOriginConnectTimeout(?int $value): void {
        $this->originConnectTimeout = $value;
    }

    /**
     * Sets the OriginHostHeader property value. Determines the host header that will be sent to the origin
     * @param string|null $value Value to set for the OriginHostHeader property.
    */
    public function setOriginHostHeader(?string $value): void {
        $this->originHostHeader = $value;
    }

    /**
     * Sets the OriginResponseTimeout property value. The amount of seconds to wait when waiting for the origin reply. Otherwise the request will fail or retry.
     * @param int|null $value Value to set for the OriginResponseTimeout property.
    */
    public function setOriginResponseTimeout(?int $value): void {
        $this->originResponseTimeout = $value;
    }

    /**
     * Sets the OriginRetries property value. The number of retries to the origin server
     * @param int|null $value Value to set for the OriginRetries property.
    */
    public function setOriginRetries(?int $value): void {
        $this->originRetries = $value;
    }

    /**
     * Sets the OriginRetry5XXResponses property value. Determines if we should retry the request in case of a 5XX response.
     * @param bool|null $value Value to set for the OriginRetry5XXResponses property.
    */
    public function setOriginRetry5XXResponses(?bool $value): void {
        $this->originRetry5XXResponses = $value;
    }

    /**
     * Sets the OriginRetryConnectionTimeout property value. Determines if we should retry the request in case of a connection timeout.
     * @param bool|null $value Value to set for the OriginRetryConnectionTimeout property.
    */
    public function setOriginRetryConnectionTimeout(?bool $value): void {
        $this->originRetryConnectionTimeout = $value;
    }

    /**
     * Sets the OriginRetryDelay property value. Determines the amount of time that the CDN should wait before retrying an origin request.
     * @param int|null $value Value to set for the OriginRetryDelay property.
    */
    public function setOriginRetryDelay(?int $value): void {
        $this->originRetryDelay = $value;
    }

    /**
     * Sets the OriginRetryResponseTimeout property value. Determines if we should retry the request in case of a response timeout.
     * @param bool|null $value Value to set for the OriginRetryResponseTimeout property.
    */
    public function setOriginRetryResponseTimeout(?bool $value): void {
        $this->originRetryResponseTimeout = $value;
    }

    /**
     * Sets the OriginShieldEnableConcurrencyLimit property value. Determines if the origin shield concurrency limit is enabled.
     * @param bool|null $value Value to set for the OriginShieldEnableConcurrencyLimit property.
    */
    public function setOriginShieldEnableConcurrencyLimit(?bool $value): void {
        $this->originShieldEnableConcurrencyLimit = $value;
    }

    /**
     * Sets the OriginShieldMaxConcurrentRequests property value. Determines the number of maximum concurrent requests allowed to the origin.
     * @param int|null $value Value to set for the OriginShieldMaxConcurrentRequests property.
    */
    public function setOriginShieldMaxConcurrentRequests(?int $value): void {
        $this->originShieldMaxConcurrentRequests = $value;
    }

    /**
     * Sets the OriginShieldMaxQueuedRequests property value. Determines the max number of origin requests that will remain in the queue
     * @param int|null $value Value to set for the OriginShieldMaxQueuedRequests property.
    */
    public function setOriginShieldMaxQueuedRequests(?int $value): void {
        $this->originShieldMaxQueuedRequests = $value;
    }

    /**
     * Sets the OriginShieldQueueMaxWaitTime property value. Determines the max queue wait time
     * @param int|null $value Value to set for the OriginShieldQueueMaxWaitTime property.
    */
    public function setOriginShieldQueueMaxWaitTime(?int $value): void {
        $this->originShieldQueueMaxWaitTime = $value;
    }

    /**
     * Sets the OriginShieldZoneCode property value. The zone code of the origin shield
     * @param string|null $value Value to set for the OriginShieldZoneCode property.
    */
    public function setOriginShieldZoneCode(?string $value): void {
        $this->originShieldZoneCode = $value;
    }

    /**
     * Sets the OriginType property value. The OriginType property
     * @param float|null $value Value to set for the OriginType property.
    */
    public function setOriginType(?float $value): void {
        $this->originType = $value;
    }

    /**
     * Sets the OriginUrl property value. The origin URL of the pull zone where the files are fetched from.
     * @param string|null $value Value to set for the OriginUrl property.
    */
    public function setOriginUrl(?string $value): void {
        $this->originUrl = $value;
    }

    /**
     * Sets the PermaCacheStorageZoneId property value. The IP of the storage zone used for Perma-Cache
     * @param int|null $value Value to set for the PermaCacheStorageZoneId property.
    */
    public function setPermaCacheStorageZoneId(?int $value): void {
        $this->permaCacheStorageZoneId = $value;
    }

    /**
     * Sets the PermaCacheType property value. The PermaCacheType property
     * @param int|null $value Value to set for the PermaCacheType property.
    */
    public function setPermaCacheType(?int $value): void {
        $this->permaCacheType = $value;
    }

    /**
     * Sets the PreloadingScreenCode property value. The custom preloading screen code
     * @param string|null $value Value to set for the PreloadingScreenCode property.
    */
    public function setPreloadingScreenCode(?string $value): void {
        $this->preloadingScreenCode = $value;
    }

    /**
     * Sets the PreloadingScreenCodeEnabled property value. Determines if the custom preloader screen is enabled
     * @param bool|null $value Value to set for the PreloadingScreenCodeEnabled property.
    */
    public function setPreloadingScreenCodeEnabled(?bool $value): void {
        $this->preloadingScreenCodeEnabled = $value;
    }

    /**
     * Sets the PreloadingScreenDelay property value. The delay in milliseconds after which the preloading screen will be displayed
     * @param int|null $value Value to set for the PreloadingScreenDelay property.
    */
    public function setPreloadingScreenDelay(?int $value): void {
        $this->preloadingScreenDelay = $value;
    }

    /**
     * Sets the PreloadingScreenEnabled property value. Determines if the preloading screen is currently enabled
     * @param bool|null $value Value to set for the PreloadingScreenEnabled property.
    */
    public function setPreloadingScreenEnabled(?bool $value): void {
        $this->preloadingScreenEnabled = $value;
    }

    /**
     * Sets the PreloadingScreenLogoUrl property value. The preloading screen logo URL
     * @param string|null $value Value to set for the PreloadingScreenLogoUrl property.
    */
    public function setPreloadingScreenLogoUrl(?string $value): void {
        $this->preloadingScreenLogoUrl = $value;
    }

    /**
     * Sets the PreloadingScreenShowOnFirstVisit property value. The PreloadingScreenShowOnFirstVisit property
     * @param bool|null $value Value to set for the PreloadingScreenShowOnFirstVisit property.
    */
    public function setPreloadingScreenShowOnFirstVisit(?bool $value): void {
        $this->preloadingScreenShowOnFirstVisit = $value;
    }

    /**
     * Sets the PreloadingScreenTheme property value. The PreloadingScreenTheme property
     * @param float|null $value Value to set for the PreloadingScreenTheme property.
    */
    public function setPreloadingScreenTheme(?float $value): void {
        $this->preloadingScreenTheme = $value;
    }

    /**
     * Sets the QueryStringVaryParameters property value. Contains the list of vary parameters that will be used for vary cache by query string. If empty, all parameters will be used to construct the key
     * @param array<string>|null $value Value to set for the QueryStringVaryParameters property.
    */
    public function setQueryStringVaryParameters(?array $value): void {
        $this->queryStringVaryParameters = $value;
    }

    /**
     * Sets the RequestCoalescingTimeout property value. Determines the lock time for coalesced requests.
     * @param int|null $value Value to set for the RequestCoalescingTimeout property.
    */
    public function setRequestCoalescingTimeout(?int $value): void {
        $this->requestCoalescingTimeout = $value;
    }

    /**
     * Sets the RequestLimit property value. Max number of requests per IP per second
     * @param int|null $value Value to set for the RequestLimit property.
    */
    public function setRequestLimit(?int $value): void {
        $this->requestLimit = $value;
    }

    /**
     * Sets the RoutingFilters property value. The list of routing filters enabled for this zone
     * @param array<PullZoneCreate_RoutingFilters>|null $value Value to set for the RoutingFilters property.
    */
    public function setRoutingFilters(?array $value): void {
        $this->routingFilters = $value;
    }

    /**
     * Sets the ShieldDDosProtectionEnabled property value. The ShieldDDosProtectionEnabled property
     * @param bool|null $value Value to set for the ShieldDDosProtectionEnabled property.
    */
    public function setShieldDDosProtectionEnabled(?bool $value): void {
        $this->shieldDDosProtectionEnabled = $value;
    }

    /**
     * Sets the ShieldDDosProtectionType property value. The ShieldDDosProtectionType property
     * @param float|null $value Value to set for the ShieldDDosProtectionType property.
    */
    public function setShieldDDosProtectionType(?float $value): void {
        $this->shieldDDosProtectionType = $value;
    }

    /**
     * Sets the StorageZoneId property value. The ID of the storage zone that the pull zone is linked to
     * @param int|null $value Value to set for the StorageZoneId property.
    */
    public function setStorageZoneId(?int $value): void {
        $this->storageZoneId = $value;
    }

    /**
     * Sets the Type property value. The Type property
     * @param float|null $value Value to set for the Type property.
    */
    public function setType(?float $value): void {
        $this->type = $value;
    }

    /**
     * Sets the UseBackgroundUpdate property value. Determines if cache update is performed in the background.
     * @param bool|null $value Value to set for the UseBackgroundUpdate property.
    */
    public function setUseBackgroundUpdate(?bool $value): void {
        $this->useBackgroundUpdate = $value;
    }

    /**
     * Sets the UseStaleWhileOffline property value. Determines if we should use stale cache while the origin is offline
     * @param bool|null $value Value to set for the UseStaleWhileOffline property.
    */
    public function setUseStaleWhileOffline(?bool $value): void {
        $this->useStaleWhileOffline = $value;
    }

    /**
     * Sets the UseStaleWhileUpdating property value. Determines if we should use stale cache while cache is updating
     * @param bool|null $value Value to set for the UseStaleWhileUpdating property.
    */
    public function setUseStaleWhileUpdating(?bool $value): void {
        $this->useStaleWhileUpdating = $value;
    }

    /**
     * Sets the VerifyOriginSSL property value. Determines if the Pull Zone should verify the origin SSL certificate
     * @param bool|null $value Value to set for the VerifyOriginSSL property.
    */
    public function setVerifyOriginSSL(?bool $value): void {
        $this->verifyOriginSSL = $value;
    }

    /**
     * Sets the WAFDisabledRuleGroups property value. Determines the enabled WAF rule groups
     * @param array<string>|null $value Value to set for the WAFDisabledRuleGroups property.
    */
    public function setWAFDisabledRuleGroups(?array $value): void {
        $this->wAFDisabledRuleGroups = $value;
    }

    /**
     * Sets the WAFDisabledRules property value. Determines the disabled WAF rules
     * @param array<string>|null $value Value to set for the WAFDisabledRules property.
    */
    public function setWAFDisabledRules(?array $value): void {
        $this->wAFDisabledRules = $value;
    }

    /**
     * Sets the WAFEnabled property value. Determines if WAF should be enabled on the zone
     * @param bool|null $value Value to set for the WAFEnabled property.
    */
    public function setWAFEnabled(?bool $value): void {
        $this->wAFEnabled = $value;
    }

    /**
     * Sets the WAFEnableRequestHeaderLogging property value. Determines if WAF should enable request headers logging
     * @param bool|null $value Value to set for the WAFEnableRequestHeaderLogging property.
    */
    public function setWAFEnableRequestHeaderLogging(?bool $value): void {
        $this->wAFEnableRequestHeaderLogging = $value;
    }

    /**
     * Sets the WAFRequestHeaderIgnores property value. Determines the list of headers that will be ignored in the WAF logs
     * @param bool|null $value Value to set for the WAFRequestHeaderIgnores property.
    */
    public function setWAFRequestHeaderIgnores(?bool $value): void {
        $this->wAFRequestHeaderIgnores = $value;
    }

    /**
     * Sets the ZoneSecurityEnabled property value. True if the URL secure token authentication security is enabled
     * @param bool|null $value Value to set for the ZoneSecurityEnabled property.
    */
    public function setZoneSecurityEnabled(?bool $value): void {
        $this->zoneSecurityEnabled = $value;
    }

    /**
     * Sets the ZoneSecurityIncludeHashRemoteIP property value. True if the zone security hash should include the remote IP
     * @param bool|null $value Value to set for the ZoneSecurityIncludeHashRemoteIP property.
    */
    public function setZoneSecurityIncludeHashRemoteIP(?bool $value): void {
        $this->zoneSecurityIncludeHashRemoteIP = $value;
    }

}
