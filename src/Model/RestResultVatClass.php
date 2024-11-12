<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultVatClass extends AbstractRestResult
{
    /**
     * @var VatClass
     */
    protected $data;

    /**
     * @return VatClass
     */
    public function getData(): VatClass
    {
        return $this->data;
    }

    /**
     * @param VatClass $data
     *
     * @return self
     */
    public function setData(VatClass $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
