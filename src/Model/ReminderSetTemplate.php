<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class ReminderSetTemplate
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
    protected $id;
    /**
     *
     *
     * @var string
     */
    protected $label;
    /**
     *
     *
     * @var int
     */
    protected $sendAfter;
    /**
     *
     *
     * @var int
     */
    protected $position;

    /**
     *
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     *
     *
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
     *
     *
     * @return int
     */
    public function getSendAfter(): int
    {
        return $this->sendAfter;
    }

    /**
     *
     *
     * @param int $sendAfter
     *
     * @return self
     */
    public function setSendAfter(int $sendAfter): self
    {
        $this->initialized['sendAfter'] = true;
        $this->sendAfter = $sendAfter;

        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     *
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;

        return $this;
    }
}
