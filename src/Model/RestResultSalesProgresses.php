<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSalesProgresses extends AbstractRestResult
{
    /**
     * @var SalesProgress[]
     */
    protected $data;

    /**
     * @return SalesProgress[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param SalesProgress[] $data
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
