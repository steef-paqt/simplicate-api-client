<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostMessage extends AbstractModel
{
    /**
     * @var string
     */
    protected $messagetypeId;
    /**
     * @var PostMessageLinkedTo
     */
    protected $linkedTo;
    /**
     * employee_id as seen in /crm/employee
     *
     * @var string
     */
    protected $createdById = 'employee:abc123';
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
    public function getMessagetypeId(): string
    {
        return $this->messagetypeId;
    }

    /**
     * @param string $messagetypeId
     *
     * @return self
     */
    public function setMessagetypeId(string $messagetypeId): self
    {
        $this->initialized['messagetypeId'] = true;
        $this->messagetypeId = $messagetypeId;

        return $this;
    }

    /**
     * @return PostMessageLinkedTo
     */
    public function getLinkedTo(): PostMessageLinkedTo
    {
        return $this->linkedTo;
    }

    /**
     * @param PostMessageLinkedTo $linkedTo
     *
     * @return self
     */
    public function setLinkedTo(PostMessageLinkedTo $linkedTo): self
    {
        $this->initialized['linkedTo'] = true;
        $this->linkedTo = $linkedTo;

        return $this;
    }

    /**
     * employee_id as seen in /crm/employee
     *
     * @return string
     */
    public function getCreatedById(): string
    {
        return $this->createdById;
    }

    /**
     * employee_id as seen in /crm/employee
     *
     * @param string $createdById
     *
     * @return self
     */
    public function setCreatedById(string $createdById): self
    {
        $this->initialized['createdById'] = true;
        $this->createdById = $createdById;

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
