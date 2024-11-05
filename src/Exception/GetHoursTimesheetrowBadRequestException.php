<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Exception;

class GetHoursTimesheetrowBadRequestException extends BadRequestException
{
    public function __construct(private ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Bad request, validation failed');
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
