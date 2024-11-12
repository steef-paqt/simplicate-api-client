<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultEmploymentType extends AbstractRestResult
{
    /**
     * @var EmploymentType
     */
    protected $data;

    /**
     * @return EmploymentType
     */
    public function getData(): EmploymentType
    {
        return $this->data;
    }

    /**
     * @param EmploymentType $data
     *
     * @return self
     */
    public function setData(EmploymentType $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
