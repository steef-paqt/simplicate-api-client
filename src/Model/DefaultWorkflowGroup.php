<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class DefaultWorkflowGroup extends AbstractModel
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $isBlocked;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
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
     * @return bool
     */
    public function getIsBlocked(): bool
    {
        return $this->isBlocked;
    }

    /**
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
}
