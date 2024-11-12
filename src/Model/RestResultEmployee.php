<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultEmployee extends AbstractRestResult
{
    /**
     * @var Employee
     */
    protected $data;

    /**
     * @return Employee
     */
    public function getData(): Employee
    {
        return $this->data;
    }

    /**
     * @param Employee $data
     *
     * @return self
     */
    public function setData(Employee $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
