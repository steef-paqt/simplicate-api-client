<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultLeaveTypes extends AbstractRestResult
{
    /**
     * @var LeaveType[]
     */
    protected $data;

    /**
     * @return LeaveType[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param LeaveType[] $data
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
