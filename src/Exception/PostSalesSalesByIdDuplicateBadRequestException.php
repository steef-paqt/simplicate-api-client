<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Exception;

class PostSalesSalesByIdDuplicateBadRequestException extends BadRequestException
{
    public function __construct(private readonly ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Bad Request');
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
