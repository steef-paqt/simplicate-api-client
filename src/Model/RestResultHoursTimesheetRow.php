<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultHoursTimesheetRow extends AbstractRestResult
{
    /**
     * @var TimesheetRow
     */
    protected $data;

    /**
     * @return TimesheetRow
     */
    public function getData(): TimesheetRow
    {
        return $this->data;
    }

    /**
     * @param TimesheetRow $data
     *
     * @return self
     */
    public function setData(TimesheetRow $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
