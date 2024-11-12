<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultTimer extends AbstractRestResult
{
    /**
     * @var GetTimer
     */
    protected $data;

    /**
     * @return GetTimer
     */
    public function getData(): GetTimer
    {
        return $this->data;
    }

    /**
     * @param GetTimer $data
     *
     * @return self
     */
    public function setData(GetTimer $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
