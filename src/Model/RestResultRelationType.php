<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultRelationType extends AbstractRestResult
{
    /**
     * @var RelationType
     */
    protected $data;

    /**
     * @return RelationType
     */
    public function getData(): RelationType
    {
        return $this->data;
    }

    /**
     * @param RelationType $data
     *
     * @return self
     */
    public function setData(RelationType $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
