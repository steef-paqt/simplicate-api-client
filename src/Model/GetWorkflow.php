<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetWorkflow
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
     * @var GetSimpleDefaultWorkflow
     */
    protected $defaultworkflow;
    /**
     * @var CurrentTask
     */
    protected $currentTask;
    /**
     * @var GetDefaultAction[]
     */
    protected $actions;
    /**
     * @var LinkedTo[]
     */
    protected $linkedTo;
    /**
     * @var string
     */
    protected $filename;
    /**
     * @var GetDocument[]
     */
    protected $attachments;
    /**
     * @var Comment[]
     */
    protected $comments;
    /**
     * @var CreatedBy
     */
    protected $createdBy;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;
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
     * @return GetSimpleDefaultWorkflow
     */
    public function getDefaultworkflow(): GetSimpleDefaultWorkflow
    {
        return $this->defaultworkflow;
    }

    /**
     * @param GetSimpleDefaultWorkflow $defaultworkflow
     *
     * @return self
     */
    public function setDefaultworkflow(GetSimpleDefaultWorkflow $defaultworkflow): self
    {
        $this->initialized['defaultworkflow'] = true;
        $this->defaultworkflow = $defaultworkflow;

        return $this;
    }

    /**
     * @return CurrentTask
     */
    public function getCurrentTask(): CurrentTask
    {
        return $this->currentTask;
    }

    /**
     * @param CurrentTask $currentTask
     *
     * @return self
     */
    public function setCurrentTask(CurrentTask $currentTask): self
    {
        $this->initialized['currentTask'] = true;
        $this->currentTask = $currentTask;

        return $this;
    }

    /**
     * @return GetDefaultAction[]
     */
    public function getActions(): array
    {
        return $this->actions;
    }

    /**
     * @param GetDefaultAction[] $actions
     *
     * @return self
     */
    public function setActions(array $actions): self
    {
        $this->initialized['actions'] = true;
        $this->actions = $actions;

        return $this;
    }

    /**
     * @return LinkedTo[]
     */
    public function getLinkedTo(): array
    {
        return $this->linkedTo;
    }

    /**
     * @param LinkedTo[] $linkedTo
     *
     * @return self
     */
    public function setLinkedTo(array $linkedTo): self
    {
        $this->initialized['linkedTo'] = true;
        $this->linkedTo = $linkedTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     *
     * @return self
     */
    public function setFilename(string $filename): self
    {
        $this->initialized['filename'] = true;
        $this->filename = $filename;

        return $this;
    }

    /**
     * @return GetDocument[]
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }

    /**
     * @param GetDocument[] $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * @return Comment[]
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param Comment[] $comments
     *
     * @return self
     */
    public function setComments(array $comments): self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;

        return $this;
    }

    /**
     * @return CreatedBy
     */
    public function getCreatedBy(): CreatedBy
    {
        return $this->createdBy;
    }

    /**
     * @param CreatedBy $createdBy
     *
     * @return self
     */
    public function setCreatedBy(CreatedBy $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

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
