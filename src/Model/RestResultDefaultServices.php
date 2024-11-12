<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultDefaultServices extends AbstractRestResult
{
    /**
     * @var GetDefaultService[]
     */
    protected $data;

    /**
     * @return GetDefaultService[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetDefaultService[] $data
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
