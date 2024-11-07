<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Exception;

use RuntimeException;

class PaymentRequiredException extends RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 402);
    }
}