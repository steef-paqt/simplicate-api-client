<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultProjectAssignment extends AbstractRestResult
{
    /**
     * @var GetAssignment
     */
    protected $data;

    /**
     * @return GetAssignment
     */
    public function getData(): GetAssignment
    {
        return $this->data;
    }

    /**
     * @param GetAssignment $data
     *
     * @return self
     */
    public function setData(GetAssignment $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
