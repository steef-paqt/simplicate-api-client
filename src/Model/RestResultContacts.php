<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultContacts extends AbstractRestResult
{
    /**
     * @var ContactPerson[]
     */
    protected $data;

    /**
     * @return ContactPerson[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ContactPerson[] $data
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
