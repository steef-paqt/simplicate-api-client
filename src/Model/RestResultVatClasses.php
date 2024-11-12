<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultVatClasses extends AbstractRestResult
{
    /**
     * @var VatClass[]
     */
    protected $data;

    /**
     * @return VatClass[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param VatClass[] $data
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
