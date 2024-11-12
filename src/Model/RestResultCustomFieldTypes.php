<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultCustomFieldTypes extends AbstractRestResult
{
    /**
     * @var CustomFieldType[]
     */
    protected $data;

    /**
     * @return CustomFieldType[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param CustomFieldType[] $data
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
