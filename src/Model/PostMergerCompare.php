<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PostMergerCompare
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var bool
     */
    protected $swapLock;
    /**
     * @var string
     */
    protected $sourceId;
    /**
     * @var string
     */
    protected $targetId;

    /**
     * @return bool
     */
    public function getSwapLock(): bool
    {
        return $this->swapLock;
    }

    /**
     * @param bool $swapLock
     *
     * @return self
     */
    public function setSwapLock(bool $swapLock): self
    {
        $this->initialized['swapLock'] = true;
        $this->swapLock = $swapLock;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceId(): string
    {
        return $this->sourceId;
    }

    /**
     * @param string $sourceId
     *
     * @return self
     */
    public function setSourceId(string $sourceId): self
    {
        $this->initialized['sourceId'] = true;
        $this->sourceId = $sourceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTargetId(): string
    {
        return $this->targetId;
    }

    /**
     * @param string $targetId
     *
     * @return self
     */
    public function setTargetId(string $targetId): self
    {
        $this->initialized['targetId'] = true;
        $this->targetId = $targetId;

        return $this;
    }
}
