<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultInvoiceStatuses extends AbstractRestResult
{
    /**
     * @var InvoiceStatus[]
     */
    protected $data;

    /**
     * @return InvoiceStatus[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param InvoiceStatus[] $data
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
