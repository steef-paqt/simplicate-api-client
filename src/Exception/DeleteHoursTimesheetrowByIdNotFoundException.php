<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Exception;

class DeleteHoursTimesheetrowByIdNotFoundException extends NotFoundException
{
    public function __construct(private readonly ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Timesheetrow not found');
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
