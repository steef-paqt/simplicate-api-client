<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

use Psr\Http\Message\ResponseInterface;

class DeleteHoursApprovalByIdUnauthorizedException extends UnauthorizedException
{
    public function __construct(private readonly ?ResponseInterface $response = null)
    {
        parent::__construct('Unauthorized');
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
