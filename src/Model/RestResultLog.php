<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultLog extends AbstractRestResult
{
    /**
     * @var Log
     */
    protected $data;

    /**
     * @return Log
     */
    public function getData(): Log
    {
        return $this->data;
    }

    /**
     * @param Log $data
     *
     * @return self
     */
    public function setData(Log $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
