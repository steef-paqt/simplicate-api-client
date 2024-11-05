<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

use Psr\Http\Message\ResponseInterface;

class GetSalesQuotestatusByIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct(private readonly ?ResponseInterface $response = null)
    {
        parent::__construct('Error');
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
