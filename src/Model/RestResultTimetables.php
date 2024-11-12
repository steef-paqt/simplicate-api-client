<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultTimetables extends AbstractRestResult
{
    /**
     * @var GetTimetable[]
     */
    protected $data;

    /**
     * @return GetTimetable[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetTimetable[] $data
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
