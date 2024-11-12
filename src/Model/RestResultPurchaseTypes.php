<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultPurchaseTypes extends AbstractRestResult
{
    /**
     * @var GetPurchaseType[]
     */
    protected $data;

    /**
     * @return GetPurchaseType[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetPurchaseType[] $data
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
