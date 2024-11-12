<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultTimers extends AbstractRestResult
{
    /**
     * @var GetTimer[]
     */
    protected $data;

    /**
     * @return GetTimer[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetTimer[] $data
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
