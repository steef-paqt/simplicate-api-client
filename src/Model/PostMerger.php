<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostMerger extends AbstractModel
{
    /**
     * @var string
     */
    protected $sourceId;
    /**
     * @var string
     */
    protected $targetId;

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
