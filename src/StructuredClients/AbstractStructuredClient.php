<?php

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Client;

abstract class AbstractStructuredClient
{
    public function __construct(protected Client $client)
    {
    }
}
