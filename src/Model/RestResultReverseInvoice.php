<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultReverseInvoice extends AbstractRestResult
{
    /**
     * @var ReverseInvoice
     */
    protected $data;

    /**
     * @return ReverseInvoice
     */
    public function getData(): ReverseInvoice
    {
        return $this->data;
    }

    /**
     * @param ReverseInvoice $data
     *
     * @return self
     */
    public function setData(ReverseInvoice $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
