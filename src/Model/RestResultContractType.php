<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultContractType extends AbstractRestResult
{
    /**
     * @var ContractType
     */
    protected $data;

    /**
     * @return ContractType
     */
    public function getData(): ContractType
    {
        return $this->data;
    }

    /**
     * @param ContractType $data
     *
     * @return self
     */
    public function setData(ContractType $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
