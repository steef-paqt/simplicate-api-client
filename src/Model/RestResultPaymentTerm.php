<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultPaymentTerm extends AbstractRestResult
{
    /**
     * @var GetPaymentTerm
     */
    protected $data;

    /**
     * @return GetPaymentTerm
     */
    public function getData(): GetPaymentTerm
    {
        return $this->data;
    }

    /**
     * @param GetPaymentTerm $data
     *
     * @return self
     */
    public function setData(GetPaymentTerm $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
