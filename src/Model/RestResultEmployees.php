<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultEmployees extends AbstractRestResult
{
    /**
     * @var Employee[]
     */
    protected $data;

    /**
     * @return Employee[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Employee[] $data
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
