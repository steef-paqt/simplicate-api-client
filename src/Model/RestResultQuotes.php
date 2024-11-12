<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultQuotes extends AbstractRestResult
{
    /**
     * @var GetQuote[]
     */
    protected $data;

    /**
     * @return GetQuote[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetQuote[] $data
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
