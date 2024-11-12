<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultAbsenceTypes extends AbstractRestResult
{
    /**
     * @var AbsenceType[]
     */
    protected $data;

    /**
     * @return AbsenceType[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param AbsenceType[] $data
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
