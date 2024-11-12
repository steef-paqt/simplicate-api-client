<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultDefaultService extends AbstractRestResult
{
    /**
     * @var GetDefaultService
     */
    protected $data;

    /**
     * @return GetDefaultService
     */
    public function getData(): GetDefaultService
    {
        return $this->data;
    }

    /**
     * @param GetDefaultService $data
     *
     * @return self
     */
    public function setData(GetDefaultService $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
