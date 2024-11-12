<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultProjectAssignmentStatuses extends AbstractRestResult
{
    /**
     * @var GetAssignmentStatus[]
     */
    protected $data;

    /**
     * @return GetAssignmentStatus[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetAssignmentStatus[] $data
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
