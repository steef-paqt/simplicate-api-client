<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultReverseInvoices extends AbstractRestResult
{
    /**
     * @var ReverseInvoice[]
     */
    protected $data;

    /**
     * @return ReverseInvoice[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ReverseInvoice[] $data
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
