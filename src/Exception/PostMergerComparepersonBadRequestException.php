<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

use Psr\Http\Message\ResponseInterface;

class PostMergerComparepersonBadRequestException extends BadRequestException
{
    public function __construct(private readonly ?ResponseInterface $response = null)
    {
        parent::__construct('Bad Request');
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
