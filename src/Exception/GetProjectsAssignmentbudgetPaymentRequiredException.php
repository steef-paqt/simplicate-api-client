<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

use Psr\Http\Message\ResponseInterface;

class GetProjectsAssignmentbudgetPaymentRequiredException extends PaymentRequiredException
{
    public function __construct(private readonly ?ResponseInterface $response = null)
    {
        parent::__construct('License required');
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
