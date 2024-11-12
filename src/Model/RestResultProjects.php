<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultProjects extends AbstractRestResult
{
    /**
     * @var GetProject[]
     */
    protected $data;

    /**
     * @return GetProject[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetProject[] $data
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
