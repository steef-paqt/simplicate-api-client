<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultCustomFieldModels extends AbstractRestResult
{
    /**
     * @var CustomFieldModel[]
     */
    protected $data;

    /**
     * @return CustomFieldModel[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param CustomFieldModel[] $data
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
