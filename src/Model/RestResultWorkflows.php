<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultWorkflows extends AbstractRestResult
{
    /**
     * @var Workflow[]
     */
    protected $data;

    /**
     * @return Workflow[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Workflow[] $data
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
