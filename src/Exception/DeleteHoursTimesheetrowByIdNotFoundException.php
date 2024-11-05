<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

use Psr\Http\Message\ResponseInterface;

class DeleteHoursTimesheetrowByIdNotFoundException extends NotFoundException
{
    public function __construct(private readonly ?ResponseInterface $response = null)
    {
        parent::__construct('Timesheetrow not found');
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
