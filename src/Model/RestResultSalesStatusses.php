<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSalesStatusses extends AbstractRestResult
{
    /**
     * @var SalesStatus[]
     */
    protected $data;

    /**
     * @return SalesStatus[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param SalesStatus[] $data
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
