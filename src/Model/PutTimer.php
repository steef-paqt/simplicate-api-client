<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PutTimer extends AbstractModel
{
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $description;
    /**
     * JSON
     *
     * @var string
     */
    protected $metadata;

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * JSON
     *
     * @return string
     */
    public function getMetadata(): string
    {
        return $this->metadata;
    }

    /**
     * JSON
     *
     * @param string $metadata
     *
     * @return self
     */
    public function setMetadata(string $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;

        return $this;
    }
}
