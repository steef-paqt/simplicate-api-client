<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

use Psr\Http\Message\ResponseInterface;

class GetInvoicesDocumentByIdNotFoundException extends NotFoundException
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
