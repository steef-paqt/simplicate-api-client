<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultExternalItems extends AbstractRestResult
{
    /**
     * @var CalendarItem[]
     */
    protected $data;

    /**
     * @return CalendarItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param CalendarItem[] $data
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
