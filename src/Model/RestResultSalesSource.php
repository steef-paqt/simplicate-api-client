<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSalesSource extends AbstractRestResult
{
    /**
     * @var SalesSource
     */
    protected $data;

    /**
     * @return SalesSource
     */
    public function getData(): SalesSource
    {
        return $this->data;
    }

    /**
     * @param SalesSource $data
     *
     * @return self
     */
    public function setData(SalesSource $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
