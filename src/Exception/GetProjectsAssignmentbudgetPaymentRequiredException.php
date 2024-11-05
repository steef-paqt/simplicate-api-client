<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Exception;

class GetProjectsAssignmentbudgetPaymentRequiredException extends PaymentRequiredException
{
    public function __construct(private readonly ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('License required');
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
