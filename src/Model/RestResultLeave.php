<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultLeave extends AbstractRestResult
{
    /**
     * @var GetLeave
     */
    protected $data;

    /**
     * @return GetLeave
     */
    public function getData(): GetLeave
    {
        return $this->data;
    }

    /**
     * @param GetLeave $data
     *
     * @return self
     */
    public function setData(GetLeave $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
