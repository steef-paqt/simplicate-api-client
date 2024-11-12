<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultQuoteTemplate extends AbstractRestResult
{
    /**
     * @var QuoteTemplate
     */
    protected $data;

    /**
     * @return QuoteTemplate
     */
    public function getData(): QuoteTemplate
    {
        return $this->data;
    }

    /**
     * @param QuoteTemplate $data
     *
     * @return self
     */
    public function setData(QuoteTemplate $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
