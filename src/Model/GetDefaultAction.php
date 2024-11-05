<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetDefaultAction
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
     * @var GetSimpleDefaultTask
     */
    protected $task;
    /**
     * @var GetSimpleDefaultTask
     */
    protected $toTask;
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
     * @return GetSimpleDefaultTask
     */
    public function getTask(): GetSimpleDefaultTask
    {
        return $this->task;
    }

    /**
     * @param GetSimpleDefaultTask $task
     *
     * @return self
     */
    public function setTask(GetSimpleDefaultTask $task): self
    {
        $this->initialized['task'] = true;
        $this->task = $task;

        return $this;
    }

    /**
     * @return GetSimpleDefaultTask
     */
    public function getToTask(): GetSimpleDefaultTask
    {
        return $this->toTask;
    }

    /**
     * @param GetSimpleDefaultTask $toTask
     *
     * @return self
     */
    public function setToTask(GetSimpleDefaultTask $toTask): self
    {
        $this->initialized['toTask'] = true;
        $this->toTask = $toTask;

        return $this;
    }

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
