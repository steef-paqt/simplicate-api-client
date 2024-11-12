<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultServices extends AbstractRestResult
{
    /**
     * @var GetService[]
     */
    protected $data;

    /**
     * @return GetService[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetService[] $data
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
