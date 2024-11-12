<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultMergerCompare extends AbstractRestResult
{
    /**
     * @var ResultPostMergerCompare
     */
    protected $data;

    /**
     * @return ResultPostMergerCompare
     */
    public function getData(): ResultPostMergerCompare
    {
        return $this->data;
    }

    /**
     * @param ResultPostMergerCompare $data
     *
     * @return self
     */
    public function setData(ResultPostMergerCompare $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
