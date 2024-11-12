<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSale extends AbstractRestResult
{
    /**
     * @var GetSales
     */
    protected $data;

    /**
     * @return GetSales
     */
    public function getData(): GetSales
    {
        return $this->data;
    }

    /**
     * @param GetSales $data
     *
     * @return self
     */
    public function setData(GetSales $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
