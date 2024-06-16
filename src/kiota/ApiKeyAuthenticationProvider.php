<?php

namespace Microsoft\Kiota\Authentication;

use DomainException;
use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;

use Microsoft\Kiota\Authentication\KeyLocation;

use Microsoft\Kiota\Abstractions\Authentication\AllowedHostsValidator;
use Microsoft\Kiota\Abstractions\Authentication\AuthenticationProvider;
use Microsoft\Kiota\Abstractions\RequestInformation;

class ApiKeyAuthenticationProvider implements AuthenticationProvider
{
    private KeyLocation $keyLocation;
    private string $apiKey;
    private string $parameterName;
    private AllowedHostsValidator $allowedHostsValidator;

    public function __construct(KeyLocation $keyLocation, string $apiKey, string $parameterName, array $allowedHosts = [])
    {
        $this->keyLocation = $keyLocation;
        $this->apiKey = $apiKey;
        $this->parameterName = $parameterName;
        $this->allowedHostsValidator = new AllowedHostsValidator();
        $this->allowedHostsValidator->setAllowedHosts($allowedHosts);
    }

    public function authenticateRequest(
        RequestInformation $request,
        array $additionalAuthenticationContext = []
    ): Promise
    {
        $url = $request->getUri();
        if (!$this->allowedHostsValidator->isUrlHostValid($url)) {
            throw new DomainException("{$url} is not a valid URL");
        }

        if ($this->keyLocation == KeyLocation::QueryParameter) {
            $request->queryParameters[$this->parameterName] = $this->apiKey;
        } elseif ($this->keyLocation == KeyLocation::Header) {
            $request->addHeader($this->parameterName, $this->apiKey);
        }
        return new FulfilledPromise($request);
    }
}

?>
