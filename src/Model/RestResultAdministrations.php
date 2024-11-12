<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultAdministrations extends AbstractRestResult
{
    /**
     * @var Administration[]
     */
    protected $data;

    /**
     * @return Administration[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Administration[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
