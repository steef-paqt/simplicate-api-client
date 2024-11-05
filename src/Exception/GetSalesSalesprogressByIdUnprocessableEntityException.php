<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

use Psr\Http\Message\ResponseInterface;

class GetSalesSalesprogressByIdUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct(private readonly ?ResponseInterface $response = null)
    {
        parent::__construct('Unprocessable Entity');
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
