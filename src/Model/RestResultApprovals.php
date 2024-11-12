<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultApprovals extends AbstractRestResult
{
    /**
     * @var GetApproval[]
     */
    protected $data;

    /**
     * @return GetApproval[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetApproval[] $data
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
