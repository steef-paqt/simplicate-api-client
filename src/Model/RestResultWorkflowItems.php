<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultWorkflowItems extends AbstractRestResult
{
    /**
     * @var WorkflowItem[]
     */
    protected $data;

    /**
     * @return WorkflowItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param WorkflowItem[] $data
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
