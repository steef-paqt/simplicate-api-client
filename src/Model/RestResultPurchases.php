<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultPurchases extends AbstractRestResult
{
    /**
     * @var Purchase[]
     */
    protected $data;

    /**
     * @return Purchase[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Purchase[] $data
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
