<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultProjectStatusses extends AbstractRestResult
{
    /**
     * @var ProjectStatus[]
     */
    protected $data;

    /**
     * @return ProjectStatus[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ProjectStatus[] $data
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
