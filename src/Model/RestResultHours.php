<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultHours extends AbstractRestResult
{
    /**
     * @var GetHours[]
     */
    protected $data;

    /**
     * @return GetHours[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetHours[] $data
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
