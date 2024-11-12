<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultInterests extends AbstractRestResult
{
    /**
     * @var Interest[]
     */
    protected $data;

    /**
     * @return Interest[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Interest[] $data
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
