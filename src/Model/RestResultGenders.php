<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultGenders extends AbstractRestResult
{
    /**
     * @var Gender[]
     */
    protected $data;

    /**
     * @return Gender[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Gender[] $data
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
