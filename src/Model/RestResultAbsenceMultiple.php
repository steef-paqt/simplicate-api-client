<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultAbsenceMultiple extends AbstractRestResult
{
    /**
     * @var GetAbsence[]
     */
    protected $data;

    /**
     * @return GetAbsence[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetAbsence[] $data
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
