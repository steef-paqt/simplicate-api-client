<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSalesStatus extends AbstractRestResult
{
    /**
     * @var SalesStatus
     */
    protected $data;

    /**
     * @return SalesStatus
     */
    public function getData(): SalesStatus
    {
        return $this->data;
    }

    /**
     * @param SalesStatus $data
     *
     * @return self
     */
    public function setData(SalesStatus $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
