<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetInvoiceReminder
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
     * @var ReminderSet
     */
    protected $set;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var bool
     */
    protected $paused;
    /**
     * @var string
     */
    protected $nextAction;

    /**
     * @return ReminderSet
     */
    public function getSet(): ReminderSet
    {
        return $this->set;
    }

    /**
     * @param ReminderSet $set
     *
     * @return self
     */
    public function setSet(ReminderSet $set): self
    {
        $this->initialized['set'] = true;
        $this->set = $set;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPaused(): bool
    {
        return $this->paused;
    }

    /**
     * @param bool $paused
     *
     * @return self
     */
    public function setPaused(bool $paused): self
    {
        $this->initialized['paused'] = true;
        $this->paused = $paused;

        return $this;
    }

    /**
     * @return string
     */
    public function getNextAction(): string
    {
        return $this->nextAction;
    }

    /**
     * @param string $nextAction
     *
     * @return self
     */
    public function setNextAction(string $nextAction): self
    {
        $this->initialized['nextAction'] = true;
        $this->nextAction = $nextAction;

        return $this;
    }
}
