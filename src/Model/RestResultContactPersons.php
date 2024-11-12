<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultContactPersons extends AbstractRestResult
{
    /**
     * @var GetContactPerson[]
     */
    protected $data;

    /**
     * @return GetContactPerson[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetContactPerson[] $data
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
