<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultInvoiceStatus extends AbstractRestResult
{
    /**
     * @var InvoiceStatus
     */
    protected $data;

    /**
     * @return InvoiceStatus
     */
    public function getData(): InvoiceStatus
    {
        return $this->data;
    }

    /**
     * @param InvoiceStatus $data
     *
     * @return self
     */
    public function setData(InvoiceStatus $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
