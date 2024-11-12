<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultLeaveMultiple extends AbstractRestResult
{
    /**
     * @var GetLeave[]
     */
    protected $data;

    /**
     * @return GetLeave[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetLeave[] $data
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
