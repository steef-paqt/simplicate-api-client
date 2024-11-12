<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultContracts extends AbstractRestResult
{
    /**
     * @var Contract[]
     */
    protected $data;

    /**
     * @return Contract[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Contract[] $data
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
