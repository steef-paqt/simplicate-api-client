<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultSetting extends AbstractRestResult
{
    /**
     * @var Setting
     */
    protected $data;

    /**
     * @return Setting
     */
    public function getData(): Setting
    {
        return $this->data;
    }

    /**
     * @param Setting $data
     *
     * @return self
     */
    public function setData(Setting $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
