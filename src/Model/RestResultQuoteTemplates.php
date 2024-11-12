<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultQuoteTemplates extends AbstractRestResult
{
    /**
     * @var QuoteTemplate[]
     */
    protected $data;

    /**
     * @return QuoteTemplate[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param QuoteTemplate[] $data
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
