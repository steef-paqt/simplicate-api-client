<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultGender extends AbstractRestResult
{
    /**
     * @var Gender
     */
    protected $data;

    /**
     * @return Gender
     */
    public function getData(): Gender
    {
        return $this->data;
    }

    /**
     * @param Gender $data
     *
     * @return self
     */
    public function setData(Gender $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
