<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class RecentSalesQuote
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
    protected $quoteNumber;
    /**
     *
     *
     * @var RecentSalesQuoteStatus
     */
    protected $status;

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
     * @return RecentSalesQuoteStatus
     */
    public function getStatus(): RecentSalesQuoteStatus
    {
        return $this->status;
    }

    /**
     *
     *
     * @param RecentSalesQuoteStatus $status
     *
     * @return self
     */
    public function setStatus(RecentSalesQuoteStatus $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
