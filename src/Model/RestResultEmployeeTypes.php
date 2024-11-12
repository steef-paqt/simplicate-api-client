<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultEmployeeTypes extends AbstractRestResult
{
    /**
     * @var EmployeeType[]
     */
    protected $data;

    /**
     * @return EmployeeType[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param EmployeeType[] $data
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
