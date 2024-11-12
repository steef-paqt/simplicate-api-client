<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSharedItems extends AbstractRestResult
{
    /**
     * @var GetSharedItem[]
     */
    protected $data;

    /**
     * @return GetSharedItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetSharedItem[] $data
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
