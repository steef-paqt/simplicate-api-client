<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultLeaveBalances extends AbstractRestResult
{
    /**
     * @var LeaveBalance[]
     */
    protected $data;

    /**
     * @return LeaveBalance[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param LeaveBalance[] $data
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
