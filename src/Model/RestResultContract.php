<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultContract extends AbstractRestResult
{
    /**
     * @var Contract
     */
    protected $data;

    /**
     * @return Contract
     */
    public function getData(): Contract
    {
        return $this->data;
    }

    /**
     * @param Contract $data
     *
     * @return self
     */
    public function setData(Contract $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
