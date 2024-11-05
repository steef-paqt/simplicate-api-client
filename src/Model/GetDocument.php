<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetDocument
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
     *
     *
     * @var string
     */
    protected $id;
    /**
     *
     *
     * @var string
     */
    protected $downloadUrl;
    /**
     *
     *
     * @var DocumentTypeSimple
     */
    protected $documentType;
    /**
     *
     *
     * @var LinkedToEntity[]
     */
    protected $linkedTo;
    /**
     *
     *
     * @var GetEmployeeSimple
     */
    protected $createdBy;
    /**
     *
     *
     * @var string
     */
    protected $createdAt;
    /**
     *
     *
     * @var string
     */
    protected $updatedAt;
    /**
     *
     *
     * @var string
     */
    protected $title;
    /**
     *
     *
     * @var string
     */
    protected $description;

    /**
     *
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getDownloadUrl(): string
    {
        return $this->downloadUrl;
    }

    /**
     *
     *
     * @param string $downloadUrl
     *
     * @return self
     */
    public function setDownloadUrl(string $downloadUrl): self
    {
        $this->initialized['downloadUrl'] = true;
        $this->downloadUrl = $downloadUrl;

        return $this;
    }

    /**
     *
     *
     * @return DocumentTypeSimple
     */
    public function getDocumentType(): DocumentTypeSimple
    {
        return $this->documentType;
    }

    /**
     *
     *
     * @param DocumentTypeSimple $documentType
     *
     * @return self
     */
    public function setDocumentType(DocumentTypeSimple $documentType): self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;

        return $this;
    }

    /**
     *
     *
     * @return LinkedToEntity[]
     */
    public function getLinkedTo(): array
    {
        return $this->linkedTo;
    }

    /**
     *
     *
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
     *
     *
     * @return GetEmployeeSimple
     */
    public function getCreatedBy(): GetEmployeeSimple
    {
        return $this->createdBy;
    }

    /**
     *
     *
     * @param GetEmployeeSimple $createdBy
     *
     * @return self
     */
    public function setCreatedBy(GetEmployeeSimple $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     *
     *
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
