<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

class GetHoursTimesheetrowMostrecentBadRequestException extends BadRequestException
{
    public function __construct(private readonly ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Bad request');
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
