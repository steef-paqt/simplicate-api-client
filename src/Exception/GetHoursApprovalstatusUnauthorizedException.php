<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Exception;

class GetHoursApprovalstatusUnauthorizedException extends UnauthorizedException
{
    public function __construct(private ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Unauthorized');
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
