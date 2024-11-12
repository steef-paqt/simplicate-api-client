<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultCivilStatus extends AbstractRestResult
{
    /**
     * @var GetCivilStatus
     */
    protected $data;

    /**
     * @return GetCivilStatus
     */
    public function getData(): GetCivilStatus
    {
        return $this->data;
    }

    /**
     * @param GetCivilStatus $data
     *
     * @return self
     */
    public function setData(GetCivilStatus $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
