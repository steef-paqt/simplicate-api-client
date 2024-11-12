<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultQuote extends AbstractRestResult
{
    /**
     * @var GetQuote
     */
    protected $data;

    /**
     * @return GetQuote
     */
    public function getData(): GetQuote
    {
        return $this->data;
    }

    /**
     * @param GetQuote $data
     *
     * @return self
     */
    public function setData(GetQuote $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
