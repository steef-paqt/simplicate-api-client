<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultInterest extends AbstractRestResult
{
    /**
     * @var Interest
     */
    protected $data;

    /**
     * @return Interest
     */
    public function getData(): Interest
    {
        return $this->data;
    }

    /**
     * @param Interest $data
     *
     * @return self
     */
    public function setData(Interest $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
