<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSalesProgressHistory extends AbstractRestResult
{
    /**
     * @var SalesProgressHistory
     */
    protected $data;

    /**
     * @return SalesProgressHistory
     */
    public function getData(): SalesProgressHistory
    {
        return $this->data;
    }

    /**
     * @param SalesProgressHistory $data
     *
     * @return self
     */
    public function setData(SalesProgressHistory $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
