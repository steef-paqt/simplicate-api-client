<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Workflow
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
    protected $title;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $deadlineDate;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

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
     * @return string
     */
    public function getDeadlineDate(): string
    {
        return $this->deadlineDate;
    }

    /**
     * @param string $deadlineDate
     *
     * @return self
     */
    public function setDeadlineDate(string $deadlineDate): self
    {
        $this->initialized['deadlineDate'] = true;
        $this->deadlineDate = $deadlineDate;

        return $this;
    }
}
