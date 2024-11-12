<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultDocument extends AbstractRestResult
{
    /**
     * @var GetDocument
     */
    protected $data;

    /**
     * @return GetDocument
     */
    public function getData(): GetDocument
    {
        return $this->data;
    }

    /**
     * @param GetDocument $data
     *
     * @return self
     */
    public function setData(GetDocument $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
