<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultInvoice extends AbstractRestResult
{
    /**
     * @var GetInvoice
     */
    protected $data;

    /**
     * @return GetInvoice
     */
    public function getData(): GetInvoice
    {
        return $this->data;
    }

    /**
     * @param GetInvoice $data
     *
     * @return self
     */
    public function setData(GetInvoice $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
