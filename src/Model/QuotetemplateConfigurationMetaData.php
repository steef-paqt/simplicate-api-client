<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class QuotetemplateConfigurationMetaData extends AbstractModel
{
    /**
     * Default text for view_and_sign_button for the quotetemplate e-mail
     *
     * @var string
     */
    protected $defaultViewAndSignButtonText;
    /**
     * Default background color for view_and_sign_button for the quotetemplate e-mail
     *
     * @var string
     */
    protected $defaultViewAndSignButtonBgColor;
    /**
     * Default text color for view_and_sign_button for the quotetemplate e-mail
     *
     * @var string
     */
    protected $defaultViewAndSignButtonTextColor;
    /**
     * @var int
     */
    protected $count;
    /**
     * @var int
     */
    protected $totalCount;
    /**
     * @var int
     */
    protected $offset;
    /**
     * @var int
     */
    protected $limit;
    /**
     * @var int
     */
    protected $upperLimit;
    /**
     * @var bool
     */
    protected $nocleanup;
    /**
     * @var string
     */
    protected $checksum;

    /**
     * Default text for view_and_sign_button for the quotetemplate e-mail
     *
     * @return string
     */
    public function getDefaultViewAndSignButtonText(): string
    {
        return $this->defaultViewAndSignButtonText;
    }

    /**
     * Default text for view_and_sign_button for the quotetemplate e-mail
     *
     * @param string $defaultViewAndSignButtonText
     *
     * @return self
     */
    public function setDefaultViewAndSignButtonText(string $defaultViewAndSignButtonText): self
    {
        $this->initialized['defaultViewAndSignButtonText'] = true;
        $this->defaultViewAndSignButtonText = $defaultViewAndSignButtonText;

        return $this;
    }

    /**
     * Default background color for view_and_sign_button for the quotetemplate e-mail
     *
     * @return string
     */
    public function getDefaultViewAndSignButtonBgColor(): string
    {
        return $this->defaultViewAndSignButtonBgColor;
    }

    /**
     * Default background color for view_and_sign_button for the quotetemplate e-mail
     *
     * @param string $defaultViewAndSignButtonBgColor
     *
     * @return self
     */
    public function setDefaultViewAndSignButtonBgColor(string $defaultViewAndSignButtonBgColor): self
    {
        $this->initialized['defaultViewAndSignButtonBgColor'] = true;
        $this->defaultViewAndSignButtonBgColor = $defaultViewAndSignButtonBgColor;

        return $this;
    }

    /**
     * Default text color for view_and_sign_button for the quotetemplate e-mail
     *
     * @return string
     */
    public function getDefaultViewAndSignButtonTextColor(): string
    {
        return $this->defaultViewAndSignButtonTextColor;
    }

    /**
     * Default text color for view_and_sign_button for the quotetemplate e-mail
     *
     * @param string $defaultViewAndSignButtonTextColor
     *
     * @return self
     */
    public function setDefaultViewAndSignButtonTextColor(string $defaultViewAndSignButtonTextColor): self
    {
        $this->initialized['defaultViewAndSignButtonTextColor'] = true;
        $this->defaultViewAndSignButtonTextColor = $defaultViewAndSignButtonTextColor;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     *
     * @return self
     */
    public function setOffset(int $offset): self
    {
        $this->initialized['offset'] = true;
        $this->offset = $offset;

        return $this;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;

        return $this;
    }

    /**
     * @return int
     */
    public function getUpperLimit(): int
    {
        return $this->upperLimit;
    }

    /**
     * @param int $upperLimit
     *
     * @return self
     */
    public function setUpperLimit(int $upperLimit): self
    {
        $this->initialized['upperLimit'] = true;
        $this->upperLimit = $upperLimit;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNocleanup(): bool
    {
        return $this->nocleanup;
    }

    /**
     * @param bool $nocleanup
     *
     * @return self
     */
    public function setNocleanup(bool $nocleanup): self
    {
        $this->initialized['nocleanup'] = true;
        $this->nocleanup = $nocleanup;

        return $this;
    }

    /**
     * @return string
     */
    public function getChecksum(): string
    {
        return $this->checksum;
    }

    /**
     * @param string $checksum
     *
     * @return self
     */
    public function setChecksum(string $checksum): self
    {
        $this->initialized['checksum'] = true;
        $this->checksum = $checksum;

        return $this;
    }
}
