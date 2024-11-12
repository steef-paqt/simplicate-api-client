<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultHourTypes extends AbstractRestResult
{
    /**
     * @var HoursType[]
     */
    protected $data;

    /**
     * @return HoursType[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param HoursType[] $data
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
