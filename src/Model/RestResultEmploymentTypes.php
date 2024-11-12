<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultEmploymentTypes extends AbstractRestResult
{
    /**
     * @var EmploymentType[]
     */
    protected $data;

    /**
     * @return EmploymentType[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param EmploymentType[] $data
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
