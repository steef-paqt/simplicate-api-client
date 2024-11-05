<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PutQuoteEmail
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
    protected $subject;
    /**
     *
     *
     * @var string
     */
    protected $body;
    /**
     *
     *
     * @var mixed[]
     */
    protected $attachments;
    /**
     *
     *
     * @var mixed[]
     */
    protected $to;
    /**
     *
     *
     * @var mixed[]
     */
    protected $cc;
    /**
     *
     *
     * @var mixed[]
     */
    protected $bcc;

    /**
     *
     *
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     *
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body): self
    {
        $this->initialized['body'] = true;
        $this->body = $body;

        return $this;
    }

    /**
     *
     *
     * @return mixed[]
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }

    /**
     *
     *
     * @param mixed[] $attachments
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
     *
     *
     * @return mixed[]
     */
    public function getTo(): array
    {
        return $this->to;
    }

    /**
     *
     *
     * @param mixed[] $to
     *
     * @return self
     */
    public function setTo(array $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;

        return $this;
    }

    /**
     *
     *
     * @return mixed[]
     */
    public function getCc(): array
    {
        return $this->cc;
    }

    /**
     *
     *
     * @param mixed[] $cc
     *
     * @return self
     */
    public function setCc(array $cc): self
    {
        $this->initialized['cc'] = true;
        $this->cc = $cc;

        return $this;
    }

    /**
     *
     *
     * @return mixed[]
     */
    public function getBcc(): array
    {
        return $this->bcc;
    }

    /**
     *
     *
     * @param mixed[] $bcc
     *
     * @return self
     */
    public function setBcc(array $bcc): self
    {
        $this->initialized['bcc'] = true;
        $this->bcc = $bcc;

        return $this;
    }
}
