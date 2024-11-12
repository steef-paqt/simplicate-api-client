<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultHourType extends AbstractRestResult
{
    /**
     * @var HoursType
     */
    protected $data;

    /**
     * @return HoursType
     */
    public function getData(): HoursType
    {
        return $this->data;
    }

    /**
     * @param HoursType $data
     *
     * @return self
     */
    public function setData(HoursType $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
