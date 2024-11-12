<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultIndustries extends AbstractRestResult
{
    /**
     * @var Industry[]
     */
    protected $data;

    /**
     * @return Industry[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Industry[] $data
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
