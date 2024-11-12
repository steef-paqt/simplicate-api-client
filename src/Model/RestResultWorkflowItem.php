<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultWorkflowItem extends AbstractRestResult
{
    /**
     * @var WorkflowItem
     */
    protected $data;

    /**
     * @return WorkflowItem
     */
    public function getData(): WorkflowItem
    {
        return $this->data;
    }

    /**
     * @param WorkflowItem $data
     *
     * @return self
     */
    public function setData(WorkflowItem $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
