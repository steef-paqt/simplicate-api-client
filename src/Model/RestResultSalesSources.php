<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSalesSources extends AbstractRestResult
{
    /**
     * @var SalesSource[]
     */
    protected $data;

    /**
     * @return SalesSource[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param SalesSource[] $data
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
