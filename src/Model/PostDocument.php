<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PostDocument
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
     * @var PostDocumentLinkedTo[]
     */
    protected $linkedTo;
    /**
     * @var string
     */
    protected $documentTypeId;
    /**
     * @var string
     */
    protected $uploadQueueId;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $description;

    /**
     * @return PostDocumentLinkedTo[]
     */
    public function getLinkedTo(): array
    {
        return $this->linkedTo;
    }

    /**
     * @param PostDocumentLinkedTo[] $linkedTo
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
    public function getDocumentTypeId(): string
    {
        return $this->documentTypeId;
    }

    /**
     * @param string $documentTypeId
     *
     * @return self
     */
    public function setDocumentTypeId(string $documentTypeId): self
    {
        $this->initialized['documentTypeId'] = true;
        $this->documentTypeId = $documentTypeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUploadQueueId(): string
    {
        return $this->uploadQueueId;
    }

    /**
     * @param string $uploadQueueId
     *
     * @return self
     */
    public function setUploadQueueId(string $uploadQueueId): self
    {
        $this->initialized['uploadQueueId'] = true;
        $this->uploadQueueId = $uploadQueueId;

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
}
