<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultEmployeeType extends AbstractRestResult
{
    /**
     * @var EmployeeType
     */
    protected $data;

    /**
     * @return EmployeeType
     */
    public function getData(): EmployeeType
    {
        return $this->data;
    }

    /**
     * @param EmployeeType $data
     *
     * @return self
     */
    public function setData(EmployeeType $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
