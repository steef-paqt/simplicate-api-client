<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultCustomField extends AbstractRestResult
{
    /**
     * @var CustomField
     */
    protected $data;

    /**
     * @return CustomField
     */
    public function getData(): CustomField
    {
        return $this->data;
    }

    /**
     * @param CustomField $data
     *
     * @return self
     */
    public function setData(CustomField $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
