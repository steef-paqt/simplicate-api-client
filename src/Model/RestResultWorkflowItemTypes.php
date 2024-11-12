<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultWorkflowItemTypes extends AbstractRestResult
{
    /**
     * @var WorkflowItemType[]
     */
    protected $data;

    /**
     * @return WorkflowItemType[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param WorkflowItemType[] $data
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
