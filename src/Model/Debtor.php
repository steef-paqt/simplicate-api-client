<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Debtor extends AbstractModel
{
    /**
     * @var string
     */
    protected $provisionMethod;
    /**
     * @var bool
     */
    protected $sendInvoiceEmailToContact;
    /**
     * See /crm/person
     *
     * @var string
     */
    protected $provisionContactpersonId;
    /**
     * @var bool
     */
    protected $sendInvoiceEmailToProjectContact;
    /**
     * @var bool
     */
    protected $sendInvoiceEmailToFixedEmail;
    /**
     * @var string
     */
    protected $sendEmailEmail;
    /**
     * @var bool
     */
    protected $sendInvoiceEmailToCc;
    /**
     * @var mixed[]
     */
    protected $cc;
    /**
     * @var string
     */
    protected $attentionTo;
    /**
     * See /crm/person
     *
     * @var string
     */
    protected $attentionToPersonId;
    /**
     * @var string
     */
    protected $attentionToFixed;
    /**
     * @var bool
     */
    protected $autocollect;
    /**
     * @var bool
     */
    protected $reminders;
    /**
     * @var string
     */
    protected $sendEmailType;
    /**
     * @var bool
     */
    protected $autosendSubscriptionInvoice;
    /**
     * @var string
     */
    protected $invoicetemplateId;

    /**
     * @return string
     */
    public function getProvisionMethod(): string
    {
        return $this->provisionMethod;
    }

    /**
     * @param string $provisionMethod
     *
     * @return self
     */
    public function setProvisionMethod(string $provisionMethod): self
    {
        $this->initialized['provisionMethod'] = true;
        $this->provisionMethod = $provisionMethod;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSendInvoiceEmailToContact(): bool
    {
        return $this->sendInvoiceEmailToContact;
    }

    /**
     * @param bool $sendInvoiceEmailToContact
     *
     * @return self
     */
    public function setSendInvoiceEmailToContact(bool $sendInvoiceEmailToContact): self
    {
        $this->initialized['sendInvoiceEmailToContact'] = true;
        $this->sendInvoiceEmailToContact = $sendInvoiceEmailToContact;

        return $this;
    }

    /**
     * See /crm/person
     *
     * @return string
     */
    public function getProvisionContactpersonId(): string
    {
        return $this->provisionContactpersonId;
    }

    /**
     * See /crm/person
     *
     * @param string $provisionContactpersonId
     *
     * @return self
     */
    public function setProvisionContactpersonId(string $provisionContactpersonId): self
    {
        $this->initialized['provisionContactpersonId'] = true;
        $this->provisionContactpersonId = $provisionContactpersonId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSendInvoiceEmailToProjectContact(): bool
    {
        return $this->sendInvoiceEmailToProjectContact;
    }

    /**
     * @param bool $sendInvoiceEmailToProjectContact
     *
     * @return self
     */
    public function setSendInvoiceEmailToProjectContact(bool $sendInvoiceEmailToProjectContact): self
    {
        $this->initialized['sendInvoiceEmailToProjectContact'] = true;
        $this->sendInvoiceEmailToProjectContact = $sendInvoiceEmailToProjectContact;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSendInvoiceEmailToFixedEmail(): bool
    {
        return $this->sendInvoiceEmailToFixedEmail;
    }

    /**
     * @param bool $sendInvoiceEmailToFixedEmail
     *
     * @return self
     */
    public function setSendInvoiceEmailToFixedEmail(bool $sendInvoiceEmailToFixedEmail): self
    {
        $this->initialized['sendInvoiceEmailToFixedEmail'] = true;
        $this->sendInvoiceEmailToFixedEmail = $sendInvoiceEmailToFixedEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getSendEmailEmail(): string
    {
        return $this->sendEmailEmail;
    }

    /**
     * @param string $sendEmailEmail
     *
     * @return self
     */
    public function setSendEmailEmail(string $sendEmailEmail): self
    {
        $this->initialized['sendEmailEmail'] = true;
        $this->sendEmailEmail = $sendEmailEmail;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSendInvoiceEmailToCc(): bool
    {
        return $this->sendInvoiceEmailToCc;
    }

    /**
     * @param bool $sendInvoiceEmailToCc
     *
     * @return self
     */
    public function setSendInvoiceEmailToCc(bool $sendInvoiceEmailToCc): self
    {
        $this->initialized['sendInvoiceEmailToCc'] = true;
        $this->sendInvoiceEmailToCc = $sendInvoiceEmailToCc;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getCc(): array
    {
        return $this->cc;
    }

    /**
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
     * @return string
     */
    public function getAttentionTo(): string
    {
        return $this->attentionTo;
    }

    /**
     * @param string $attentionTo
     *
     * @return self
     */
    public function setAttentionTo(string $attentionTo): self
    {
        $this->initialized['attentionTo'] = true;
        $this->attentionTo = $attentionTo;

        return $this;
    }

    /**
     * See /crm/person
     *
     * @return string
     */
    public function getAttentionToPersonId(): string
    {
        return $this->attentionToPersonId;
    }

    /**
     * See /crm/person
     *
     * @param string $attentionToPersonId
     *
     * @return self
     */
    public function setAttentionToPersonId(string $attentionToPersonId): self
    {
        $this->initialized['attentionToPersonId'] = true;
        $this->attentionToPersonId = $attentionToPersonId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttentionToFixed(): string
    {
        return $this->attentionToFixed;
    }

    /**
     * @param string $attentionToFixed
     *
     * @return self
     */
    public function setAttentionToFixed(string $attentionToFixed): self
    {
        $this->initialized['attentionToFixed'] = true;
        $this->attentionToFixed = $attentionToFixed;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAutocollect(): bool
    {
        return $this->autocollect;
    }

    /**
     * @param bool $autocollect
     *
     * @return self
     */
    public function setAutocollect(bool $autocollect): self
    {
        $this->initialized['autocollect'] = true;
        $this->autocollect = $autocollect;

        return $this;
    }

    /**
     * @return bool
     */
    public function getReminders(): bool
    {
        return $this->reminders;
    }

    /**
     * @param bool $reminders
     *
     * @return self
     */
    public function setReminders(bool $reminders): self
    {
        $this->initialized['reminders'] = true;
        $this->reminders = $reminders;

        return $this;
    }

    /**
     * @return string
     */
    public function getSendEmailType(): string
    {
        return $this->sendEmailType;
    }

    /**
     * @param string $sendEmailType
     *
     * @return self
     */
    public function setSendEmailType(string $sendEmailType): self
    {
        $this->initialized['sendEmailType'] = true;
        $this->sendEmailType = $sendEmailType;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAutosendSubscriptionInvoice(): bool
    {
        return $this->autosendSubscriptionInvoice;
    }

    /**
     * @param bool $autosendSubscriptionInvoice
     *
     * @return self
     */
    public function setAutosendSubscriptionInvoice(bool $autosendSubscriptionInvoice): self
    {
        $this->initialized['autosendSubscriptionInvoice'] = true;
        $this->autosendSubscriptionInvoice = $autosendSubscriptionInvoice;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicetemplateId(): string
    {
        return $this->invoicetemplateId;
    }

    /**
     * @param string $invoicetemplateId
     *
     * @return self
     */
    public function setInvoicetemplateId(string $invoicetemplateId): self
    {
        $this->initialized['invoicetemplateId'] = true;
        $this->invoicetemplateId = $invoicetemplateId;

        return $this;
    }
}
