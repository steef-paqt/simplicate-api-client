<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSalesService extends AbstractRestResult
{
    /**
     * @var GetSalesService
     */
    protected $data;

    /**
     * @return GetSalesService
     */
    public function getData(): GetSalesService
    {
        return $this->data;
    }

    /**
     * @param GetSalesService $data
     *
     * @return self
     */
    public function setData(GetSalesService $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
