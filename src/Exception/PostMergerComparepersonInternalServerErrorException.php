<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Exception;

class PostMergerComparepersonInternalServerErrorException extends InternalServerErrorException
{
    public function __construct(private ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Error');
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
