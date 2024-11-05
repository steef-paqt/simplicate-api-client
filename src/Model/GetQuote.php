<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetQuote
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
     * @var QuoteTemplate
     */
    protected $quotetemplate;
    /**
     *
     *
     * @var string
     */
    protected $sendType;
    /**
     *
     *
     * @var string
     */
    protected $quoteNumber;
    /**
     *
     *
     * @var string
     */
    protected $quoteDate;
    /**
     *
     *
     * @var QuoteStatus
     */
    protected $quotestatus;
    /**
     *
     *
     * @var string
     */
    protected $json;
    /**
     *
     *
     * @var QuoteSalesService[]
     */
    protected $services;
    /**
     *
     *
     * @var string
     */
    protected $totalExcl;
    /**
     *
     *
     * @var string
     */
    protected $totalIncl;
    /**
     *
     *
     * @var string
     */
    protected $totalVat;
    /**
     *
     *
     * @var mixed
     */
    protected $vat;
    /**
     *
     *
     * @var mixed
     */
    protected $grandTotals;
    /**
     *
     *
     * @var mixed
     */
    protected $receivers;
    /**
     *
     *
     * @var int
     */
    protected $validDays;
    /**
     *
     *
     * @var mixed
     */
    protected $paymentTerm;
    /**
     *
     *
     * @var mixed
     */
    protected $downloadUrl;
    /**
     *
     *
     * @var int
     */
    protected $isSepaAuthorization;
    /**
     *
     *
     * @var int
     */
    protected $isOutdated;
    /**
     *
     *
     * @var int
     */
    protected $isBlocked;
    /**
     *
     *
     * @var string
     */
    protected $createdBy;
    /**
     *
     *
     * @var string
     */
    protected $lastUpdatedApprovalStatus;
    /**
     *
     *
     * @var string
     */
    protected $sentAt;
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
    protected $salesId;
    /**
     *
     *
     * @var string
     */
    protected $quoteSubject;
    /**
     *
     *
     * @var string
     */
    protected $customerReference;

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
     * @return QuoteTemplate
     */
    public function getQuotetemplate(): QuoteTemplate
    {
        return $this->quotetemplate;
    }

    /**
     *
     *
     * @param QuoteTemplate $quotetemplate
     *
     * @return self
     */
    public function setQuotetemplate(QuoteTemplate $quotetemplate): self
    {
        $this->initialized['quotetemplate'] = true;
        $this->quotetemplate = $quotetemplate;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getSendType(): string
    {
        return $this->sendType;
    }

    /**
     *
     *
     * @param string $sendType
     *
     * @return self
     */
    public function setSendType(string $sendType): self
    {
        $this->initialized['sendType'] = true;
        $this->sendType = $sendType;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getQuoteNumber(): string
    {
        return $this->quoteNumber;
    }

    /**
     *
     *
     * @param string $quoteNumber
     *
     * @return self
     */
    public function setQuoteNumber(string $quoteNumber): self
    {
        $this->initialized['quoteNumber'] = true;
        $this->quoteNumber = $quoteNumber;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getQuoteDate(): string
    {
        return $this->quoteDate;
    }

    /**
     *
     *
     * @param string $quoteDate
     *
     * @return self
     */
    public function setQuoteDate(string $quoteDate): self
    {
        $this->initialized['quoteDate'] = true;
        $this->quoteDate = $quoteDate;

        return $this;
    }

    /**
     *
     *
     * @return QuoteStatus
     */
    public function getQuotestatus(): QuoteStatus
    {
        return $this->quotestatus;
    }

    /**
     *
     *
     * @param QuoteStatus $quotestatus
     *
     * @return self
     */
    public function setQuotestatus(QuoteStatus $quotestatus): self
    {
        $this->initialized['quotestatus'] = true;
        $this->quotestatus = $quotestatus;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getJson(): string
    {
        return $this->json;
    }

    /**
     *
     *
     * @param string $json
     *
     * @return self
     */
    public function setJson(string $json): self
    {
        $this->initialized['json'] = true;
        $this->json = $json;

        return $this;
    }

    /**
     *
     *
     * @return QuoteSalesService[]
     */
    public function getServices(): array
    {
        return $this->services;
    }

    /**
     *
     *
     * @param QuoteSalesService[] $services
     *
     * @return self
     */
    public function setServices(array $services): self
    {
        $this->initialized['services'] = true;
        $this->services = $services;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getTotalExcl(): string
    {
        return $this->totalExcl;
    }

    /**
     *
     *
     * @param string $totalExcl
     *
     * @return self
     */
    public function setTotalExcl(string $totalExcl): self
    {
        $this->initialized['totalExcl'] = true;
        $this->totalExcl = $totalExcl;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getTotalIncl(): string
    {
        return $this->totalIncl;
    }

    /**
     *
     *
     * @param string $totalIncl
     *
     * @return self
     */
    public function setTotalIncl(string $totalIncl): self
    {
        $this->initialized['totalIncl'] = true;
        $this->totalIncl = $totalIncl;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getTotalVat(): string
    {
        return $this->totalVat;
    }

    /**
     *
     *
     * @param string $totalVat
     *
     * @return self
     */
    public function setTotalVat(string $totalVat): self
    {
        $this->initialized['totalVat'] = true;
        $this->totalVat = $totalVat;

        return $this;
    }

    /**
     *
     *
     * @return mixed
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     *
     *
     * @param mixed $vat
     *
     * @return self
     */
    public function setVat($vat): self
    {
        $this->initialized['vat'] = true;
        $this->vat = $vat;

        return $this;
    }

    /**
     *
     *
     * @return mixed
     */
    public function getGrandTotals()
    {
        return $this->grandTotals;
    }

    /**
     *
     *
     * @param mixed $grandTotals
     *
     * @return self
     */
    public function setGrandTotals($grandTotals): self
    {
        $this->initialized['grandTotals'] = true;
        $this->grandTotals = $grandTotals;

        return $this;
    }

    /**
     *
     *
     * @return mixed
     */
    public function getReceivers()
    {
        return $this->receivers;
    }

    /**
     *
     *
     * @param mixed $receivers
     *
     * @return self
     */
    public function setReceivers($receivers): self
    {
        $this->initialized['receivers'] = true;
        $this->receivers = $receivers;

        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getValidDays(): int
    {
        return $this->validDays;
    }

    /**
     *
     *
     * @param int $validDays
     *
     * @return self
     */
    public function setValidDays(int $validDays): self
    {
        $this->initialized['validDays'] = true;
        $this->validDays = $validDays;

        return $this;
    }

    /**
     *
     *
     * @return mixed
     */
    public function getPaymentTerm()
    {
        return $this->paymentTerm;
    }

    /**
     *
     *
     * @param mixed $paymentTerm
     *
     * @return self
     */
    public function setPaymentTerm($paymentTerm): self
    {
        $this->initialized['paymentTerm'] = true;
        $this->paymentTerm = $paymentTerm;

        return $this;
    }

    /**
     *
     *
     * @return mixed
     */
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    /**
     *
     *
     * @param mixed $downloadUrl
     *
     * @return self
     */
    public function setDownloadUrl($downloadUrl): self
    {
        $this->initialized['downloadUrl'] = true;
        $this->downloadUrl = $downloadUrl;

        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getIsSepaAuthorization(): int
    {
        return $this->isSepaAuthorization;
    }

    /**
     *
     *
     * @param int $isSepaAuthorization
     *
     * @return self
     */
    public function setIsSepaAuthorization(int $isSepaAuthorization): self
    {
        $this->initialized['isSepaAuthorization'] = true;
        $this->isSepaAuthorization = $isSepaAuthorization;

        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getIsOutdated(): int
    {
        return $this->isOutdated;
    }

    /**
     *
     *
     * @param int $isOutdated
     *
     * @return self
     */
    public function setIsOutdated(int $isOutdated): self
    {
        $this->initialized['isOutdated'] = true;
        $this->isOutdated = $isOutdated;

        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getIsBlocked(): int
    {
        return $this->isBlocked;
    }

    /**
     *
     *
     * @param int $isBlocked
     *
     * @return self
     */
    public function setIsBlocked(int $isBlocked): self
    {
        $this->initialized['isBlocked'] = true;
        $this->isBlocked = $isBlocked;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }

    /**
     *
     *
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(string $createdBy): self
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
    public function getLastUpdatedApprovalStatus(): string
    {
        return $this->lastUpdatedApprovalStatus;
    }

    /**
     *
     *
     * @param string $lastUpdatedApprovalStatus
     *
     * @return self
     */
    public function setLastUpdatedApprovalStatus(string $lastUpdatedApprovalStatus): self
    {
        $this->initialized['lastUpdatedApprovalStatus'] = true;
        $this->lastUpdatedApprovalStatus = $lastUpdatedApprovalStatus;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getSentAt(): string
    {
        return $this->sentAt;
    }

    /**
     *
     *
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
    public function getSalesId(): string
    {
        return $this->salesId;
    }

    /**
     *
     *
     * @param string $salesId
     *
     * @return self
     */
    public function setSalesId(string $salesId): self
    {
        $this->initialized['salesId'] = true;
        $this->salesId = $salesId;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getQuoteSubject(): string
    {
        return $this->quoteSubject;
    }

    /**
     *
     *
     * @param string $quoteSubject
     *
     * @return self
     */
    public function setQuoteSubject(string $quoteSubject): self
    {
        $this->initialized['quoteSubject'] = true;
        $this->quoteSubject = $quoteSubject;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getCustomerReference(): string
    {
        return $this->customerReference;
    }

    /**
     *
     *
     * @param string $customerReference
     *
     * @return self
     */
    public function setCustomerReference(string $customerReference): self
    {
        $this->initialized['customerReference'] = true;
        $this->customerReference = $customerReference;

        return $this;
    }
}
