<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultReminderSet extends AbstractRestResult
{
    /**
     * @var GetReminderSet
     */
    protected $data;

    /**
     * @return GetReminderSet
     */
    public function getData(): GetReminderSet
    {
        return $this->data;
    }

    /**
     * @param GetReminderSet $data
     *
     * @return self
     */
    public function setData(GetReminderSet $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
