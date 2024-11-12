<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultCivilStatuses extends AbstractRestResult
{
    /**
     * @var GetCivilStatus[]
     */
    protected $data;

    /**
     * @return GetCivilStatus[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetCivilStatus[] $data
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
