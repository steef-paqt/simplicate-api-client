<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultHour extends AbstractRestResult
{
    /**
     * @var GetHours
     */
    protected $data;

    /**
     * @return GetHours
     */
    public function getData(): GetHours
    {
        return $this->data;
    }

    /**
     * @param GetHours $data
     *
     * @return self
     */
    public function setData(GetHours $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
