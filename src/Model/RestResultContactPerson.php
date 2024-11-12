<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultContactPerson extends AbstractRestResult
{
    /**
     * @var GetContactPerson
     */
    protected $data;

    /**
     * @return GetContactPerson
     */
    public function getData(): GetContactPerson
    {
        return $this->data;
    }

    /**
     * @param GetContactPerson $data
     *
     * @return self
     */
    public function setData(GetContactPerson $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
