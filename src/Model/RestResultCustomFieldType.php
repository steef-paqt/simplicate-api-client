<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultCustomFieldType extends AbstractRestResult
{
    /**
     * @var CustomFieldType
     */
    protected $data;

    /**
     * @return CustomFieldType
     */
    public function getData(): CustomFieldType
    {
        return $this->data;
    }

    /**
     * @param CustomFieldType $data
     *
     * @return self
     */
    public function setData(CustomFieldType $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
