<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultQuoteStatus extends AbstractRestResult
{
    /**
     * @var QuoteStatus
     */
    protected $data;

    /**
     * @return QuoteStatus
     */
    public function getData(): QuoteStatus
    {
        return $this->data;
    }

    /**
     * @param QuoteStatus $data
     *
     * @return self
     */
    public function setData(QuoteStatus $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
