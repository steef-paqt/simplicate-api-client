<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSalesReason extends AbstractRestResult
{
    /**
     * @var mixed
     */
    protected $data;

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     *
     * @return self
     */
    public function setData($data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
