<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultApprovalStatus extends AbstractRestResult
{
    /**
     * @var GetApprovalStatus
     */
    protected $data;

    /**
     * @return GetApprovalStatus
     */
    public function getData(): GetApprovalStatus
    {
        return $this->data;
    }

    /**
     * @param GetApprovalStatus $data
     *
     * @return self
     */
    public function setData(GetApprovalStatus $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
