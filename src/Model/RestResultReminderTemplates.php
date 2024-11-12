<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultReminderTemplates extends AbstractRestResult
{
    /**
     * @var ReminderTemplate[]
     */
    protected $data;

    /**
     * @return ReminderTemplate[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ReminderTemplate[] $data
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
