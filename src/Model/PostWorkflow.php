<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostWorkflow
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
    protected $defaultworkflowId;
    /**
     * @var CreatedBy
     */
    protected $createdBy;
    /**
     * @var LinkedTo[]
     */
    protected $linkedTo;
    /**
     * @var PostDocument[]
     */
    protected $attachments;
    /**
     * @var Comment[]
     */
    protected $comments;
    /**
     * @var string
     */
    protected $destinationEmployeeId;
    /**
     * @var string
     */
    protected $transferToEmployeeId;
    /**
     * @var string
     */
    protected $transferToMessage;
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
    public function getDefaultworkflowId(): string
    {
        return $this->defaultworkflowId;
    }

    /**
     * @param string $defaultworkflowId
     *
     * @return self
     */
    public function setDefaultworkflowId(string $defaultworkflowId): self
    {
        $this->initialized['defaultworkflowId'] = true;
        $this->defaultworkflowId = $defaultworkflowId;

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
     * @return PostDocument[]
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }

    /**
     * @param PostDocument[] $attachments
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
     * @return string
     */
    public function getDestinationEmployeeId(): string
    {
        return $this->destinationEmployeeId;
    }

    /**
     * @param string $destinationEmployeeId
     *
     * @return self
     */
    public function setDestinationEmployeeId(string $destinationEmployeeId): self
    {
        $this->initialized['destinationEmployeeId'] = true;
        $this->destinationEmployeeId = $destinationEmployeeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransferToEmployeeId(): string
    {
        return $this->transferToEmployeeId;
    }

    /**
     * @param string $transferToEmployeeId
     *
     * @return self
     */
    public function setTransferToEmployeeId(string $transferToEmployeeId): self
    {
        $this->initialized['transferToEmployeeId'] = true;
        $this->transferToEmployeeId = $transferToEmployeeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransferToMessage(): string
    {
        return $this->transferToMessage;
    }

    /**
     * @param string $transferToMessage
     *
     * @return self
     */
    public function setTransferToMessage(string $transferToMessage): self
    {
        $this->initialized['transferToMessage'] = true;
        $this->transferToMessage = $transferToMessage;

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
