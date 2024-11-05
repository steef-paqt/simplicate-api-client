<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class Feature
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
    protected $identifier;
    /**
     *
     *
     * @var string
     */
    protected $name;
    /**
     *
     *
     * @var bool
     */
    protected $isEnabled;

    /**
     *
     *
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     *
     *
     * @param string $identifier
     *
     * @return self
     */
    public function setIdentifier(string $identifier): self
    {
        $this->initialized['identifier'] = true;
        $this->identifier = $identifier;

        return $this;
    }

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
     * @return bool
     */
    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    /**
     *
     *
     * @param bool $isEnabled
     *
     * @return self
     */
    public function setIsEnabled(bool $isEnabled): self
    {
        $this->initialized['isEnabled'] = true;
        $this->isEnabled = $isEnabled;

        return $this;
    }
}
