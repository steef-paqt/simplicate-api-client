<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultProjectAssignments extends AbstractRestResult
{
    /**
     * @var GetAssignment[]
     */
    protected $data;

    /**
     * @return GetAssignment[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetAssignment[] $data
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
