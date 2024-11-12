<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultApproval extends AbstractRestResult
{
    /**
     * @var GetApproval
     */
    protected $data;

    /**
     * @return GetApproval
     */
    public function getData(): GetApproval
    {
        return $this->data;
    }

    /**
     * @param GetApproval $data
     *
     * @return self
     */
    public function setData(GetApproval $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
