<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultContractTypes extends AbstractRestResult
{
    /**
     * @var ContractType[]
     */
    protected $data;

    /**
     * @return ContractType[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ContractType[] $data
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
