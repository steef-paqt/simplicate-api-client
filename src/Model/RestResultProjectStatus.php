<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultProjectStatus extends AbstractRestResult
{
    /**
     * @var ProjectStatus
     */
    protected $data;

    /**
     * @return ProjectStatus
     */
    public function getData(): ProjectStatus
    {
        return $this->data;
    }

    /**
     * @param ProjectStatus $data
     *
     * @return self
     */
    public function setData(ProjectStatus $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
