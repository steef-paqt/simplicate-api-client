<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

use Psr\Http\Message\ResponseInterface;

class DeleteHoursTimesheetrowByIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct(private readonly ?ResponseInterface $response = null)
    {
        parent::__construct('Server error');
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
