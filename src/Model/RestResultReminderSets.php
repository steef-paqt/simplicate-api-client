<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultReminderSets extends AbstractRestResult
{
    /**
     * @var GetReminderSet[]
     */
    protected $data;

    /**
     * @return GetReminderSet[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetReminderSet[] $data
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
