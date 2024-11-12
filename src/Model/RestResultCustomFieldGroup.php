<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultCustomFieldGroup extends AbstractRestResult
{
    /**
     * @var CustomFieldGroup
     */
    protected $data;

    /**
     * @return CustomFieldGroup
     */
    public function getData(): CustomFieldGroup
    {
        return $this->data;
    }

    /**
     * @param CustomFieldGroup $data
     *
     * @return self
     */
    public function setData(CustomFieldGroup $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
