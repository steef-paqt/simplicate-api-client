<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultMileageList extends AbstractRestResult
{
    /**
     * @var GetMileage[]
     */
    protected $data;

    /**
     * @return GetMileage[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetMileage[] $data
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
