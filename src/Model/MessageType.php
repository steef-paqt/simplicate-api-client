<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class MessageType
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
    protected $id;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var bool
     */
    protected $blocked;
    /**
     * @var string
     */
    protected $logAction;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    /**
     * @return bool
     */
    public function getBlocked(): bool
    {
        return $this->blocked;
    }

    /**
     * @param bool $blocked
     *
     * @return self
     */
    public function setBlocked(bool $blocked): self
    {
        $this->initialized['blocked'] = true;
        $this->blocked = $blocked;

        return $this;
    }

    /**
     * @return string
     */
    public function getLogAction(): string
    {
        return $this->logAction;
    }

    /**
     * @param string $logAction
     *
     * @return self
     */
    public function setLogAction(string $logAction): self
    {
        $this->initialized['logAction'] = true;
        $this->logAction = $logAction;

        return $this;
    }
}
