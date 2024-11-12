<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class AppReceivers extends AbstractModel
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var AppReceiverSetting[]
     */
    protected $channels;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * @return AppReceiverSetting[]
     */
    public function getChannels(): array
    {
        return $this->channels;
    }

    /**
     * @param AppReceiverSetting[] $channels
     *
     * @return self
     */
    public function setChannels(array $channels): self
    {
        $this->initialized['channels'] = true;
        $this->channels = $channels;

        return $this;
    }
}
