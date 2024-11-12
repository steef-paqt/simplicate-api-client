<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultCountries extends AbstractRestResult
{
    /**
     * @var Country[]
     */
    protected $data;

    /**
     * @return Country[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Country[] $data
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
