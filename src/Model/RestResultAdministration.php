<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultAdministration extends AbstractRestResult
{
    /**
     * @var Administration
     */
    protected $data;

    /**
     * @return Administration
     */
    public function getData(): Administration
    {
        return $this->data;
    }

    /**
     * @param Administration $data
     *
     * @return self
     */
    public function setData(Administration $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
