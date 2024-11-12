<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultTask extends AbstractRestResult
{
    /**
     * @var Task
     */
    protected $data;

    /**
     * @return Task
     */
    public function getData(): Task
    {
        return $this->data;
    }

    /**
     * @param Task $data
     *
     * @return self
     */
    public function setData(Task $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
