<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultPersons extends AbstractRestResult
{
    /**
     * @var GetPerson[]
     */
    protected $data;

    /**
     * @return GetPerson[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetPerson[] $data
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
