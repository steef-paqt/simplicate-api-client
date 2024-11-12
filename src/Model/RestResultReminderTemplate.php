<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultReminderTemplate extends AbstractRestResult
{
    /**
     * @var ReminderTemplate
     */
    protected $data;

    /**
     * @return ReminderTemplate
     */
    public function getData(): ReminderTemplate
    {
        return $this->data;
    }

    /**
     * @param ReminderTemplate $data
     *
     * @return self
     */
    public function setData(ReminderTemplate $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
