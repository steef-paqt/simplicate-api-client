<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultRevenueGroup extends AbstractRestResult
{
    /**
     * @var RevenueGroup
     */
    protected $data;

    /**
     * @return RevenueGroup
     */
    public function getData(): RevenueGroup
    {
        return $this->data;
    }

    /**
     * @param RevenueGroup $data
     *
     * @return self
     */
    public function setData(RevenueGroup $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
