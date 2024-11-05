<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

class GetHoursApprovalstatusByIdNotFoundException extends NotFoundException
{
    public function __construct(private readonly ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Entity Not Found');
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
