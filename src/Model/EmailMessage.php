<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class EmailMessage
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
    protected $sentAt;
    /**
     * @var string
     */
    protected $receivedAt;
    /**
     * @var string
     */
    protected $sender;
    /**
     * @var string
     */
    protected $recipients;
    /**
     * @var string
     */
    protected $ccRecipients;
    /**
     * @var string
     */
    protected $bccRecipients;
    /**
     * @var string
     */
    protected $subject;
    /**
     * @var string
     */
    protected $htmlMessage;
    /**
     * @var string
     */
    protected $htmlBody;
    /**
     * @var string
     */
    protected $plainText;
    /**
     * @var EmailAttachment[]
     */
    protected $attachments;
    /**
     * @var LinkedToEntity[]
     */
    protected $linkedTo;

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
    public function getSentAt(): string
    {
        return $this->sentAt;
    }

    /**
     * @param string $sentAt
     *
     * @return self
     */
    public function setSentAt(string $sentAt): self
    {
        $this->initialized['sentAt'] = true;
        $this->sentAt = $sentAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getReceivedAt(): string
    {
        return $this->receivedAt;
    }

    /**
     * @param string $receivedAt
     *
     * @return self
     */
    public function setReceivedAt(string $receivedAt): self
    {
        $this->initialized['receivedAt'] = true;
        $this->receivedAt = $receivedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getSender(): string
    {
        return $this->sender;
    }

    /**
     * @param string $sender
     *
     * @return self
     */
    public function setSender(string $sender): self
    {
        $this->initialized['sender'] = true;
        $this->sender = $sender;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipients(): string
    {
        return $this->recipients;
    }

    /**
     * @param string $recipients
     *
     * @return self
     */
    public function setRecipients(string $recipients): self
    {
        $this->initialized['recipients'] = true;
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * @return string
     */
    public function getCcRecipients(): string
    {
        return $this->ccRecipients;
    }

    /**
     * @param string $ccRecipients
     *
     * @return self
     */
    public function setCcRecipients(string $ccRecipients): self
    {
        $this->initialized['ccRecipients'] = true;
        $this->ccRecipients = $ccRecipients;

        return $this;
    }

    /**
     * @return string
     */
    public function getBccRecipients(): string
    {
        return $this->bccRecipients;
    }

    /**
     * @param string $bccRecipients
     *
     * @return self
     */
    public function setBccRecipients(string $bccRecipients): self
    {
        $this->initialized['bccRecipients'] = true;
        $this->bccRecipients = $bccRecipients;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlMessage(): string
    {
        return $this->htmlMessage;
    }

    /**
     * @param string $htmlMessage
     *
     * @return self
     */
    public function setHtmlMessage(string $htmlMessage): self
    {
        $this->initialized['htmlMessage'] = true;
        $this->htmlMessage = $htmlMessage;

        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlBody(): string
    {
        return $this->htmlBody;
    }

    /**
     * @param string $htmlBody
     *
     * @return self
     */
    public function setHtmlBody(string $htmlBody): self
    {
        $this->initialized['htmlBody'] = true;
        $this->htmlBody = $htmlBody;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlainText(): string
    {
        return $this->plainText;
    }

    /**
     * @param string $plainText
     *
     * @return self
     */
    public function setPlainText(string $plainText): self
    {
        $this->initialized['plainText'] = true;
        $this->plainText = $plainText;

        return $this;
    }

    /**
     * @return EmailAttachment[]
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }

    /**
     * @param EmailAttachment[] $attachments
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
}
