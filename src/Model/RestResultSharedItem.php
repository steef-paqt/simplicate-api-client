<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSharedItem extends AbstractRestResult
{
    /**
     * @var GetSharedItem
     */
    protected $data;

    /**
     * @return GetSharedItem
     */
    public function getData(): GetSharedItem
    {
        return $this->data;
    }

    /**
     * @param GetSharedItem $data
     *
     * @return self
     */
    public function setData(GetSharedItem $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
