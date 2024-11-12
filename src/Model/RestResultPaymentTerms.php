<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultPaymentTerms extends AbstractRestResult
{
    /**
     * @var GetPaymentTerm[]
     */
    protected $data;

    /**
     * @return GetPaymentTerm[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetPaymentTerm[] $data
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
