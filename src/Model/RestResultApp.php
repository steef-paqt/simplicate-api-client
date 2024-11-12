<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultApp extends AbstractRestResult
{
    /**
     * @var App
     */
    protected $data;

    /**
     * @return App
     */
    public function getData(): App
    {
        return $this->data;
    }

    /**
     * @param App $data
     *
     * @return self
     */
    public function setData(App $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
