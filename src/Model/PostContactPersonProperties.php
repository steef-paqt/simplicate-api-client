<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class PostContactPersonProperties extends AbstractModel
{
    /**
     * @var string
     */
    protected $workFunction;
    /**
     * @var string
     */
    protected $workEmail;
    /**
     * @var string
     */
    protected $workMobile;

    /**
     * @return string
     */
    public function getWorkFunction(): string
    {
        return $this->workFunction;
    }

    /**
     * @param string $workFunction
     *
     * @return self
     */
    public function setWorkFunction(string $workFunction): self
    {
        $this->initialized['workFunction'] = true;
        $this->workFunction = $workFunction;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkEmail(): string
    {
        return $this->workEmail;
    }

    /**
     * @param string $workEmail
     *
     * @return self
     */
    public function setWorkEmail(string $workEmail): self
    {
        $this->initialized['workEmail'] = true;
        $this->workEmail = $workEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkMobile(): string
    {
        return $this->workMobile;
    }

    /**
     * @param string $workMobile
     *
     * @return self
     */
    public function setWorkMobile(string $workMobile): self
    {
        $this->initialized['workMobile'] = true;
        $this->workMobile = $workMobile;

        return $this;
    }
}
