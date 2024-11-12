<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultServiceGroups extends AbstractRestResult
{
    /**
     * @var ServiceGroup[]
     */
    protected $data;

    /**
     * @return ServiceGroup[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ServiceGroup[] $data
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
