<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultProjectEmployee extends AbstractRestResult
{
    /**
     * @var ProjectEmployee
     */
    protected $data;

    /**
     * @return ProjectEmployee
     */
    public function getData(): ProjectEmployee
    {
        return $this->data;
    }

    /**
     * @param ProjectEmployee $data
     *
     * @return self
     */
    public function setData(ProjectEmployee $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
