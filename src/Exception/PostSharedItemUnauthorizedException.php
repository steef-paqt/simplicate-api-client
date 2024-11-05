<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

class PostSharedItemUnauthorizedException extends UnauthorizedException
{
    public function __construct(private readonly ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Unauthorized');
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
