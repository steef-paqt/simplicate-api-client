<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSalesProgress extends AbstractRestResult
{
    /**
     * @var SalesProgress
     */
    protected $data;

    /**
     * @return SalesProgress
     */
    public function getData(): SalesProgress
    {
        return $this->data;
    }

    /**
     * @param SalesProgress $data
     *
     * @return self
     */
    public function setData(SalesProgress $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
