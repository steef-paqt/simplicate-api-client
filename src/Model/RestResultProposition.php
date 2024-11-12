<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultProposition extends AbstractRestResult
{
    /**
     * @var GetProposition
     */
    protected $data;

    /**
     * @return GetProposition
     */
    public function getData(): GetProposition
    {
        return $this->data;
    }

    /**
     * @param GetProposition $data
     *
     * @return self
     */
    public function setData(GetProposition $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
