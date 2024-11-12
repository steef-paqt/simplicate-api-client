<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostQuote extends AbstractModel
{
    /**
     * @var string
     */
    protected $quotetemplateId;
    /**
     * @var string
     */
    protected $salesId;
    /**
     * @var string
     */
    protected $quoteSubject;
    /**
     * @var string
     */
    protected $json;
    /**
     * @var string
     */
    protected $customerReference;
    /**
     * @var int
     */
    protected $isBlocked;

    /**
     * @return string
     */
    public function getQuotetemplateId(): string
    {
        return $this->quotetemplateId;
    }

    /**
     * @param string $quotetemplateId
     *
     * @return self
     */
    public function setQuotetemplateId(string $quotetemplateId): self
    {
        $this->initialized['quotetemplateId'] = true;
        $this->quotetemplateId = $quotetemplateId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalesId(): string
    {
        return $this->salesId;
    }

    /**
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
     * @return string
     */
    public function getQuoteSubject(): string
    {
        return $this->quoteSubject;
    }

    /**
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
     * @return string
     */
    public function getJson(): string
    {
        return $this->json;
    }

    /**
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
     * @return string
     */
    public function getCustomerReference(): string
    {
        return $this->customerReference;
    }

    /**
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

    /**
     * @return int
     */
    public function getIsBlocked(): int
    {
        return $this->isBlocked;
    }

    /**
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
}
