<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultApprovalStatusList extends AbstractRestResult
{
    /**
     * @var GetApprovalStatus[]
     */
    protected $data;

    /**
     * @return GetApprovalStatus[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetApprovalStatus[] $data
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
