<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Exception;

class GetSalesSalesstatusByIdUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct(private ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Unprocessable Entity');
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
