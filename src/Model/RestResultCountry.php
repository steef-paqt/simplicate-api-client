<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultCountry extends AbstractRestResult
{
    /**
     * @var Country
     */
    protected $data;

    /**
     * @return Country
     */
    public function getData(): Country
    {
        return $this->data;
    }

    /**
     * @param Country $data
     *
     * @return self
     */
    public function setData(Country $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
