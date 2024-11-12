<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultServiceGroup extends AbstractRestResult
{
    /**
     * @var ServiceGroup
     */
    protected $data;

    /**
     * @return ServiceGroup
     */
    public function getData(): ServiceGroup
    {
        return $this->data;
    }

    /**
     * @param ServiceGroup $data
     *
     * @return self
     */
    public function setData(ServiceGroup $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
