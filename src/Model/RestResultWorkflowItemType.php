<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultWorkflowItemType extends AbstractRestResult
{
    /**
     * @var WorkflowItemType
     */
    protected $data;

    /**
     * @return WorkflowItemType
     */
    public function getData(): WorkflowItemType
    {
        return $this->data;
    }

    /**
     * @param WorkflowItemType $data
     *
     * @return self
     */
    public function setData(WorkflowItemType $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
