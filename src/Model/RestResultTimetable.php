<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultTimetable extends AbstractRestResult
{
    /**
     * @var GetTimetable
     */
    protected $data;

    /**
     * @return GetTimetable
     */
    public function getData(): GetTimetable
    {
        return $this->data;
    }

    /**
     * @param GetTimetable $data
     *
     * @return self
     */
    public function setData(GetTimetable $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
