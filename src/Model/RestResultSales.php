<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSales extends AbstractRestResult
{
    /**
     * @var GetSales[]
     */
    protected $data;

    /**
     * @return GetSales[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetSales[] $data
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
