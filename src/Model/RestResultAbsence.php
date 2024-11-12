<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultAbsence extends AbstractRestResult
{
    /**
     * @var GetAbsence
     */
    protected $data;

    /**
     * @return GetAbsence
     */
    public function getData(): GetAbsence
    {
        return $this->data;
    }

    /**
     * @param GetAbsence $data
     *
     * @return self
     */
    public function setData(GetAbsence $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
