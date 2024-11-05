<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class Quote
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
