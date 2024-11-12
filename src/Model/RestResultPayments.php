<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultPayments extends AbstractRestResult
{
    /**
     * @var GetPayment[]
     */
    protected $data;

    /**
     * @return GetPayment[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetPayment[] $data
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
