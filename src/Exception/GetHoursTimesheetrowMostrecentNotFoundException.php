<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Exception;

class GetHoursTimesheetrowMostrecentNotFoundException extends NotFoundException
{
    public function __construct(private ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Not Found');
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
