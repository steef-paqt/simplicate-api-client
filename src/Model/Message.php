<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Message extends AbstractModel
{
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
