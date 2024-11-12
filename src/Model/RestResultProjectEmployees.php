<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultProjectEmployees extends AbstractRestResult
{
    /**
     * @var ProjectEmployee[]
     */
    protected $data;

    /**
     * @return ProjectEmployee[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ProjectEmployee[] $data
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
