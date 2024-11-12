<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultPurchaseType extends AbstractRestResult
{
    /**
     * @var GetPurchaseType
     */
    protected $data;

    /**
     * @return GetPurchaseType
     */
    public function getData(): GetPurchaseType
    {
        return $this->data;
    }

    /**
     * @param GetPurchaseType $data
     *
     * @return self
     */
    public function setData(GetPurchaseType $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
