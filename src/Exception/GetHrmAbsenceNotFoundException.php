<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Exception;

class GetHrmAbsenceNotFoundException extends NotFoundException
{
    public function __construct(private readonly ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Entity Not Found');
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
