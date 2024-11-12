<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSalesProgressHistories extends AbstractRestResult
{
    /**
     * @var SalesProgressHistory[]
     */
    protected $data;

    /**
     * @return SalesProgressHistory[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param SalesProgressHistory[] $data
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
