<?php

namespace Paqtcom\Simplicate\Model;

abstract class AbstractModel
{
    /**
     * @var array
     */
    protected array $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
}
