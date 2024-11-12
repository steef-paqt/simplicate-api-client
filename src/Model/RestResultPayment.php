<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultPayment extends AbstractRestResult
{
    /**
     * @var GetPayment
     */
    protected $data;

    /**
     * @return GetPayment
     */
    public function getData(): GetPayment
    {
        return $this->data;
    }

    /**
     * @param GetPayment $data
     *
     * @return self
     */
    public function setData(GetPayment $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
