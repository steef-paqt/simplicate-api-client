<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostAttachment
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
     * See /timeline/message
     *
     * @var string
     */
    protected $messageId;
    /**
     * See /documents/document
     *
     * @var string
     */
    protected $documentId;

    /**
     * See /timeline/message
     *
     * @return string
     */
    public function getMessageId(): string
    {
        return $this->messageId;
    }

    /**
     * See /timeline/message
     *
     * @param string $messageId
     *
     * @return self
     */
    public function setMessageId(string $messageId): self
    {
        $this->initialized['messageId'] = true;
        $this->messageId = $messageId;

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
}
