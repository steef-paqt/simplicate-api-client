<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class Organization extends AbstractModel
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $cocCode;
    /**
     * @var string
     */
    protected $vatNumber;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $phone;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $note;
    /**
     * @var string
     */
    protected $linkedinUrl;
    /**
     * @var bool
     */
    protected $hasDifferentPostalAddress;
    /**
     * @var Industry
     */
    protected $industry;
    /**
     * @var OrganizationSize
     */
    protected $organizationsize;
    /**
     * @var string
     */
    protected $invoiceReceiver;
    /**
     * @var bool
     */
    protected $allowAutocollect;
    /**
     * @var string
     */
    protected $bankAccount;
    /**
     * @var string
     */
    protected $bankBic;
    /**
     * @var string
     */
    protected $relationNumber;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getCocCode(): string
    {
        return $this->cocCode;
    }

    /**
     * @param string $cocCode
     *
     * @return self
     */
    public function setCocCode(string $cocCode): self
    {
        $this->initialized['cocCode'] = true;
        $this->cocCode = $cocCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatNumber(): string
    {
        return $this->vatNumber;
    }

    /**
     * @param string $vatNumber
     *
     * @return self
     */
    public function setVatNumber(string $vatNumber): self
    {
        $this->initialized['vatNumber'] = true;
        $this->vatNumber = $vatNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

        return $this;
    }

    /**
     * @return string
     */
    public function getLinkedinUrl(): string
    {
        return $this->linkedinUrl;
    }

    /**
     * @param string $linkedinUrl
     *
     * @return self
     */
    public function setLinkedinUrl(string $linkedinUrl): self
    {
        $this->initialized['linkedinUrl'] = true;
        $this->linkedinUrl = $linkedinUrl;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasDifferentPostalAddress(): bool
    {
        return $this->hasDifferentPostalAddress;
    }

    /**
     * @param bool $hasDifferentPostalAddress
     *
     * @return self
     */
    public function setHasDifferentPostalAddress(bool $hasDifferentPostalAddress): self
    {
        $this->initialized['hasDifferentPostalAddress'] = true;
        $this->hasDifferentPostalAddress = $hasDifferentPostalAddress;

        return $this;
    }

    /**
     * @return Industry
     */
    public function getIndustry(): Industry
    {
        return $this->industry;
    }

    /**
     * @param Industry $industry
     *
     * @return self
     */
    public function setIndustry(Industry $industry): self
    {
        $this->initialized['industry'] = true;
        $this->industry = $industry;

        return $this;
    }

    /**
     * @return OrganizationSize
     */
    public function getOrganizationsize(): OrganizationSize
    {
        return $this->organizationsize;
    }

    /**
     * @param OrganizationSize $organizationsize
     *
     * @return self
     */
    public function setOrganizationsize(OrganizationSize $organizationsize): self
    {
        $this->initialized['organizationsize'] = true;
        $this->organizationsize = $organizationsize;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceReceiver(): string
    {
        return $this->invoiceReceiver;
    }

    /**
     * @param string $invoiceReceiver
     *
     * @return self
     */
    public function setInvoiceReceiver(string $invoiceReceiver): self
    {
        $this->initialized['invoiceReceiver'] = true;
        $this->invoiceReceiver = $invoiceReceiver;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowAutocollect(): bool
    {
        return $this->allowAutocollect;
    }

    /**
     * @param bool $allowAutocollect
     *
     * @return self
     */
    public function setAllowAutocollect(bool $allowAutocollect): self
    {
        $this->initialized['allowAutocollect'] = true;
        $this->allowAutocollect = $allowAutocollect;

        return $this;
    }

    /**
     * @return string
     */
    public function getBankAccount(): string
    {
        return $this->bankAccount;
    }

    /**
     * @param string $bankAccount
     *
     * @return self
     */
    public function setBankAccount(string $bankAccount): self
    {
        $this->initialized['bankAccount'] = true;
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBankBic(): string
    {
        return $this->bankBic;
    }

    /**
     * @param string $bankBic
     *
     * @return self
     */
    public function setBankBic(string $bankBic): self
    {
        $this->initialized['bankBic'] = true;
        $this->bankBic = $bankBic;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelationNumber(): string
    {
        return $this->relationNumber;
    }

    /**
     * @param string $relationNumber
     *
     * @return self
     */
    public function setRelationNumber(string $relationNumber): self
    {
        $this->initialized['relationNumber'] = true;
        $this->relationNumber = $relationNumber;

        return $this;
    }
}
