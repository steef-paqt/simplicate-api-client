<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultQuoteStatuses extends AbstractRestResult
{
    /**
     * @var QuoteStatus[]
     */
    protected $data;

    /**
     * @return QuoteStatus[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param QuoteStatus[] $data
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
