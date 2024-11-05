<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetMessage
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
     * @var Attachment[]
     */
    protected $attachments;
    /**
     * @var MessageType
     */
    protected $messageType;
    /**
     * @var LinkedToEntity[]
     */
    protected $linkedTo;
    /**
     * @var Creator
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
     * @var ContentField[]
     */
    protected $contentFields;
    /**
     * @var string
     */
    protected $content;
    /**
     * @var string
     */
    protected $displayDate;

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
     * @return Attachment[]
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }

    /**
     * @param Attachment[] $attachments
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
     * @return MessageType
     */
    public function getMessageType(): MessageType
    {
        return $this->messageType;
    }

    /**
     * @param MessageType $messageType
     *
     * @return self
     */
    public function setMessageType(MessageType $messageType): self
    {
        $this->initialized['messageType'] = true;
        $this->messageType = $messageType;

        return $this;
    }

    /**
     * @return LinkedToEntity[]
     */
    public function getLinkedTo(): array
    {
        return $this->linkedTo;
    }

    /**
     * @param LinkedToEntity[] $linkedTo
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
     * @return Creator
     */
    public function getCreatedBy(): Creator
    {
        return $this->createdBy;
    }

    /**
     * @param Creator $createdBy
     *
     * @return self
     */
    public function setCreatedBy(Creator $createdBy): self
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
     * @return ContentField[]
     */
    public function getContentFields(): array
    {
        return $this->contentFields;
    }

    /**
     * @param ContentField[] $contentFields
     *
     * @return self
     */
    public function setContentFields(array $contentFields): self
    {
        $this->initialized['contentFields'] = true;
        $this->contentFields = $contentFields;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayDate(): string
    {
        return $this->displayDate;
    }

    /**
     * @param string $displayDate
     *
     * @return self
     */
    public function setDisplayDate(string $displayDate): self
    {
        $this->initialized['displayDate'] = true;
        $this->displayDate = $displayDate;

        return $this;
    }
}
