<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultPerson extends AbstractRestResult
{
    /**
     * @var GetPerson
     */
    protected $data;

    /**
     * @return GetPerson
     */
    public function getData(): GetPerson
    {
        return $this->data;
    }

    /**
     * @param GetPerson $data
     *
     * @return self
     */
    public function setData(GetPerson $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
