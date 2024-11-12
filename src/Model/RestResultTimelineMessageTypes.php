<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class RestResultTimelineMessageTypes extends AbstractRestResult
{
    /**
     * @var MessageType[]
     */
    protected $data;

    /**
     * @return MessageType[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param MessageType[] $data
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
