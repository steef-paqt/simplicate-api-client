<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultProject extends AbstractRestResult
{
    /**
     * @var GetProject
     */
    protected $data;

    /**
     * @return GetProject
     */
    public function getData(): GetProject
    {
        return $this->data;
    }

    /**
     * @param GetProject $data
     *
     * @return self
     */
    public function setData(GetProject $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
