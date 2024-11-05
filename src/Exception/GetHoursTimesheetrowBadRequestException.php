<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

use Psr\Http\Message\ResponseInterface;

class GetHoursTimesheetrowBadRequestException extends BadRequestException
{
    public function __construct(private readonly ?ResponseInterface $response = null)
    {
        parent::__construct('Bad request, validation failed');
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
