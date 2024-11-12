<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultIndustry extends AbstractRestResult
{
    /**
     * @var Industry
     */
    protected $data;

    /**
     * @return Industry
     */
    public function getData(): Industry
    {
        return $this->data;
    }

    /**
     * @param Industry $data
     *
     * @return self
     */
    public function setData(Industry $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
