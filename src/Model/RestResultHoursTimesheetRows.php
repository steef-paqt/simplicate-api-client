<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultHoursTimesheetRows extends AbstractRestResult
{
    /**
     * @var GetTimesheetRow[]
     */
    protected $data;

    /**
     * @return GetTimesheetRow[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetTimesheetRow[] $data
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
