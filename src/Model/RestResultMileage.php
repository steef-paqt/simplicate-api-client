<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultMileage extends AbstractRestResult
{
    /**
     * @var GetMileage
     */
    protected $data;

    /**
     * @return GetMileage
     */
    public function getData(): GetMileage
    {
        return $this->data;
    }

    /**
     * @param GetMileage $data
     *
     * @return self
     */
    public function setData(GetMileage $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
