<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultInvoices extends AbstractRestResult
{
    /**
     * @var GetInvoice[]
     */
    protected $data;

    /**
     * @return GetInvoice[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetInvoice[] $data
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
