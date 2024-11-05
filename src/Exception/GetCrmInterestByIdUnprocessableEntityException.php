<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Exception;

class GetCrmInterestByIdUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct(private readonly ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Unprocessable Entity');
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
