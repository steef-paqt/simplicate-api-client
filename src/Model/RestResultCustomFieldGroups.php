<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultCustomFieldGroups extends AbstractRestResult
{
    /**
     * @var CustomFieldGroup[]
     */
    protected $data;

    /**
     * @return CustomFieldGroup[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param CustomFieldGroup[] $data
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
