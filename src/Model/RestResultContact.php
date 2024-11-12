<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultContact extends AbstractRestResult
{
    /**
     * @var ContactPerson
     */
    protected $data;

    /**
     * @return ContactPerson
     */
    public function getData(): ContactPerson
    {
        return $this->data;
    }

    /**
     * @param ContactPerson $data
     *
     * @return self
     */
    public function setData(ContactPerson $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
