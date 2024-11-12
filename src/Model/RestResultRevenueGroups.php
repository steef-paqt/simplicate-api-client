<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultRevenueGroups extends AbstractRestResult
{
    /**
     * @var RevenueGroup[]
     */
    protected $data;

    /**
     * @return RevenueGroup[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param RevenueGroup[] $data
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
