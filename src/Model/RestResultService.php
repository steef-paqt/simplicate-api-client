<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultService extends AbstractRestResult
{
    /**
     * @var GetService
     */
    protected $data;

    /**
     * @return GetService
     */
    public function getData(): GetService
    {
        return $this->data;
    }

    /**
     * @param GetService $data
     *
     * @return self
     */
    public function setData(GetService $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
