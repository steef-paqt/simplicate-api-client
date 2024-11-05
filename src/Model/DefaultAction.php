<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class DefaultAction
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
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $isResponseRequired;
    /**
     * @var string
     */
    protected $color;

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
    public function getIsResponseRequired(): bool
    {
        return $this->isResponseRequired;
    }

    /**
     * @param bool $isResponseRequired
     *
     * @return self
     */
    public function setIsResponseRequired(bool $isResponseRequired): self
    {
        $this->initialized['isResponseRequired'] = true;
        $this->isResponseRequired = $isResponseRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
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
}
