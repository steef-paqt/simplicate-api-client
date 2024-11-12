<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultDebtorList extends AbstractRestResult
{
    /**
     * @var DebtorList
     */
    protected $data;

    /**
     * @return DebtorList
     */
    public function getData(): DebtorList
    {
        return $this->data;
    }

    /**
     * @param DebtorList $data
     *
     * @return self
     */
    public function setData(DebtorList $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
