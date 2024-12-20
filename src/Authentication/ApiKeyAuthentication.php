<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Authentication;

use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;
use Psr\Http\Message\RequestInterface;

class ApiKeyAuthentication implements AuthenticationPlugin
{
    public function __construct(private string $apiKey)
    {
    }

    public function authentication(RequestInterface $request): RequestInterface
    {
        return $request->withHeader('API Key Authentication', $this->apiKey);
    }

    public function getScope(): string
    {
        return 'api_key';
    }
}
