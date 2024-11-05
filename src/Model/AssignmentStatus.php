<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class AssignmentStatus
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
     *
     *
     * @var string
     */
    protected $name;
    /**
     *
     *
     * @var string
     */
    protected $color;
    /**
     *
     *
     * @var bool
     */
    protected $isDone;
    /**
     *
     *
     * @var bool
     */
    protected $isBlocked;
    /**
     *
     *
     * @var int
     */
    protected $order;

    /**
     *
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     *
     *
     * @param string $color
     *
     * @return self
     */
    public function setColor(string $color): self
    {
        $this->initialized['color'] = true;
        $this->color = $color;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    /**
     *
     *
     * @param bool $isDone
     *
     * @return self
     */
    public function setIsDone(bool $isDone): self
    {
        $this->initialized['isDone'] = true;
        $this->isDone = $isDone;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getIsBlocked(): bool
    {
        return $this->isBlocked;
    }

    /**
     *
     *
     * @param bool $isBlocked
     *
     * @return self
     */
    public function setIsBlocked(bool $isBlocked): self
    {
        $this->initialized['isBlocked'] = true;
        $this->isBlocked = $isBlocked;

        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     *
     *
     * @param int $order
     *
     * @return self
     */
    public function setOrder(int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }
}
