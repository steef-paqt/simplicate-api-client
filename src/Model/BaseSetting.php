<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class BaseSetting extends AbstractModel
{
    /**
     * @var string
     */
    protected $timestamp;
    /**
     * @var string
     */
    protected $appId;
    /**
     * @var string
     */
    protected $key;
    /**
     * @var ?string
     */
    protected $value;

    /**
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     *
     * @return self
     */
    public function setTimestamp(string $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     *
     * @return self
     */
    public function setAppId(string $appId): self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->initialized['value'] = true;
        $this->value = (string) $value;

        return $this;
    }
}
