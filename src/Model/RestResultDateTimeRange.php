<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultDateTimeRange extends AbstractRestResult
{
    /**
     * @var DateTimeRange
     */
    protected $data;

    /**
     * @return DateTimeRange
     */
    public function getData(): DateTimeRange
    {
        return $this->data;
    }

    /**
     * @param DateTimeRange $data
     *
     * @return self
     */
    public function setData(DateTimeRange $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
