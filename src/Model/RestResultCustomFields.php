<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultCustomFields extends AbstractRestResult
{
    /**
     * @var CustomField[]
     */
    protected $data;

    /**
     * @return CustomField[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param CustomField[] $data
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
