<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

use Psr\Http\Message\ResponseInterface;

class GetHrmTeamByIdUnprocessableEntityException extends UnprocessableEntityException
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
