<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultPurchase extends AbstractRestResult
{
    /**
     * @var Purchase
     */
    protected $data;

    /**
     * @return Purchase
     */
    public function getData(): Purchase
    {
        return $this->data;
    }

    /**
     * @param Purchase $data
     *
     * @return self
     */
    public function setData(Purchase $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
