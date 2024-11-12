<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultTimelineMessage extends AbstractRestResult
{
    /**
     * @var GetMessage
     */
    protected $data;

    /**
     * @return GetMessage
     */
    public function getData(): GetMessage
    {
        return $this->data;
    }

    /**
     * @param GetMessage $data
     *
     * @return self
     */
    public function setData(GetMessage $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
