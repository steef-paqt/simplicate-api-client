<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Attachment
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
     * @var AttachmentType
     */
    protected $attachmentType;
    /**
     * @var string
     */
    protected $title;
    /**
     * See /documents/document
     *
     * @var string
     */
    protected $documentId;
    /**
     * @var string
     */
    protected $downloadLink;

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
     * @return AttachmentType
     */
    public function getAttachmentType(): AttachmentType
    {
        return $this->attachmentType;
    }

    /**
     * @param AttachmentType $attachmentType
     *
     * @return self
     */
    public function setAttachmentType(AttachmentType $attachmentType): self
    {
        $this->initialized['attachmentType'] = true;
        $this->attachmentType = $attachmentType;

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
     * See /documents/document
     *
     * @return string
     */
    public function getDocumentId(): string
    {
        return $this->documentId;
    }

    /**
     * See /documents/document
     *
     * @param string $documentId
     *
     * @return self
     */
    public function setDocumentId(string $documentId): self
    {
        $this->initialized['documentId'] = true;
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDownloadLink(): string
    {
        return $this->downloadLink;
    }

    /**
     * @param string $downloadLink
     *
     * @return self
     */
    public function setDownloadLink(string $downloadLink): self
    {
        $this->initialized['downloadLink'] = true;
        $this->downloadLink = $downloadLink;

        return $this;
    }
}
