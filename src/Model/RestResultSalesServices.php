<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSalesServices extends AbstractRestResult
{
    /**
     * @var GetSalesService[]
     */
    protected $data;

    /**
     * @return GetSalesService[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetSalesService[] $data
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
