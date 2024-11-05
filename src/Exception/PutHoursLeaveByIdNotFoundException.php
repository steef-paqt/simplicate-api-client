<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

use Psr\Http\Message\ResponseInterface;

class PutHoursLeaveByIdNotFoundException extends NotFoundException
{
    public function __construct(private readonly ?ResponseInterface $response = null)
    {
        parent::__construct('Entity Not Found');
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
