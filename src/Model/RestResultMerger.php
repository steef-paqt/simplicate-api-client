<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultMerger extends AbstractRestResult
{
    /**
     * @var ResultMergerMerge
     */
    protected $data;

    /**
     * @return ResultMergerMerge
     */
    public function getData(): ResultMergerMerge
    {
        return $this->data;
    }

    /**
     * @param ResultMergerMerge $data
     *
     * @return self
     */
    public function setData(ResultMergerMerge $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
