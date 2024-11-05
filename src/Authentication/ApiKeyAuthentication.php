<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Authentication;

use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;

class ApiKeyAuthentication implements AuthenticationPlugin
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }

    public function authentication(\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\RequestInterface
    {
        return $request->withHeader('API Key Authentication', $this->{'apiKey'});
    }

    public function getScope(): string
    {
        return 'api_key';
    }
}
