<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class DefaultTask
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
     * @var int
     */
    protected $order;
    /**
     *
     *
     * @var string
     */
    protected $description;
    /**
     *
     *
     * @var bool
     */
    protected $canChangeDestination;
    /**
     *
     *
     * @var bool
     */
    protected $willSendEmail;
    /**
     *
     *
     * @var bool
     */
    protected $isReturnToSender;
    /**
     *
     *
     * @var float
     */
    protected $averageHoursCost;
    /**
     *
     *
     * @var bool
     */
    protected $canBeTransferred;

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

    /**
     *
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     *
     *
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
     *
     *
     * @return bool
     */
    public function getCanChangeDestination(): bool
    {
        return $this->canChangeDestination;
    }

    /**
     *
     *
     * @param bool $canChangeDestination
     *
     * @return self
     */
    public function setCanChangeDestination(bool $canChangeDestination): self
    {
        $this->initialized['canChangeDestination'] = true;
        $this->canChangeDestination = $canChangeDestination;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getWillSendEmail(): bool
    {
        return $this->willSendEmail;
    }

    /**
     *
     *
     * @param bool $willSendEmail
     *
     * @return self
     */
    public function setWillSendEmail(bool $willSendEmail): self
    {
        $this->initialized['willSendEmail'] = true;
        $this->willSendEmail = $willSendEmail;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getIsReturnToSender(): bool
    {
        return $this->isReturnToSender;
    }

    /**
     *
     *
     * @param bool $isReturnToSender
     *
     * @return self
     */
    public function setIsReturnToSender(bool $isReturnToSender): self
    {
        $this->initialized['isReturnToSender'] = true;
        $this->isReturnToSender = $isReturnToSender;

        return $this;
    }

    /**
     *
     *
     * @return float
     */
    public function getAverageHoursCost(): float
    {
        return $this->averageHoursCost;
    }

    /**
     *
     *
     * @param float $averageHoursCost
     *
     * @return self
     */
    public function setAverageHoursCost(float $averageHoursCost): self
    {
        $this->initialized['averageHoursCost'] = true;
        $this->averageHoursCost = $averageHoursCost;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getCanBeTransferred(): bool
    {
        return $this->canBeTransferred;
    }

    /**
     *
     *
     * @param bool $canBeTransferred
     *
     * @return self
     */
    public function setCanBeTransferred(bool $canBeTransferred): self
    {
        $this->initialized['canBeTransferred'] = true;
        $this->canBeTransferred = $canBeTransferred;

        return $this;
    }
}
