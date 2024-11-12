<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultRelationTypes extends AbstractRestResult
{
    /**
     * @var RelationType[]
     */
    protected $data;

    /**
     * @return RelationType[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param RelationType[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
