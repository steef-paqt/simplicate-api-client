<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultCustomFieldModel extends AbstractRestResult
{
    /**
     * @var CustomFieldModel
     */
    protected $data;

    /**
     * @return CustomFieldModel
     */
    public function getData(): CustomFieldModel
    {
        return $this->data;
    }

    /**
     * @param CustomFieldModel $data
     *
     * @return self
     */
    public function setData(CustomFieldModel $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
