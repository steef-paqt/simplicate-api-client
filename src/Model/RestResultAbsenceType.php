<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultAbsenceType extends AbstractRestResult
{
    /**
     * @var AbsenceType
     */
    protected $data;

    /**
     * @return AbsenceType
     */
    public function getData(): AbsenceType
    {
        return $this->data;
    }

    /**
     * @param AbsenceType $data
     *
     * @return self
     */
    public function setData(AbsenceType $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
