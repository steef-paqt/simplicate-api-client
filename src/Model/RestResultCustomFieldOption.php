<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultCustomFieldOption extends AbstractRestResult
{
    /**
     * @var CustomFieldOption
     */
    protected $data;

    /**
     * @return CustomFieldOption
     */
    public function getData(): CustomFieldOption
    {
        return $this->data;
    }

    /**
     * @param CustomFieldOption $data
     *
     * @return self
     */
    public function setData(CustomFieldOption $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
