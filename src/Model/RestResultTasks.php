<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultTasks extends AbstractRestResult
{
    /**
     * @var Task[]
     */
    protected $data;

    /**
     * @return Task[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Task[] $data
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
