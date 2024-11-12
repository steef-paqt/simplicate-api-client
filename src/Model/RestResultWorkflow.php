<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultWorkflow extends AbstractRestResult
{
    /**
     * @var Workflow
     */
    protected $data;

    /**
     * @return Workflow
     */
    public function getData(): Workflow
    {
        return $this->data;
    }

    /**
     * @param Workflow $data
     *
     * @return self
     */
    public function setData(Workflow $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
