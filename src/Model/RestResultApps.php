<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultApps extends AbstractRestResult
{
    /**
     * @var App[]
     */
    protected $data;

    /**
     * @return App[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param App[] $data
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
