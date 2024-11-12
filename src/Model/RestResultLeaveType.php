<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultLeaveType extends AbstractRestResult
{
    /**
     * @var LeaveType
     */
    protected $data;

    /**
     * @return LeaveType
     */
    public function getData(): LeaveType
    {
        return $this->data;
    }

    /**
     * @param LeaveType $data
     *
     * @return self
     */
    public function setData(LeaveType $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
