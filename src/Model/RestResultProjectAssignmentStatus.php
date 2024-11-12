<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultProjectAssignmentStatus extends AbstractRestResult
{
    /**
     * @var GetAssignmentStatus
     */
    protected $data;

    /**
     * @return GetAssignmentStatus
     */
    public function getData(): GetAssignmentStatus
    {
        return $this->data;
    }

    /**
     * @param GetAssignmentStatus $data
     *
     * @return self
     */
    public function setData(GetAssignmentStatus $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
