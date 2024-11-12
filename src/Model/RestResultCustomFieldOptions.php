<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultCustomFieldOptions extends AbstractRestResult
{
    /**
     * @var CustomFieldOption[]
     */
    protected $data;

    /**
     * @return CustomFieldOption[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param CustomFieldOption[] $data
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
