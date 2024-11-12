<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class ExternalItemMetadataConfiguration extends AbstractModel
{
    /**
     * @var string
     */
    protected $employeeId;
    /**
     * @var bool
     */
    protected $hasExternalAgendaIntegration;
    /**
     * @var mixed
     */
    protected $externalAgendaSyncMethod;

    /**
     * @return string
     */
    public function getEmployeeId(): string
    {
        return $this->employeeId;
    }

    /**
     * @param string $employeeId
     *
     * @return self
     */
    public function setEmployeeId(string $employeeId): self
    {
        $this->initialized['employeeId'] = true;
        $this->employeeId = $employeeId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasExternalAgendaIntegration(): bool
    {
        return $this->hasExternalAgendaIntegration;
    }

    /**
     * @param bool $hasExternalAgendaIntegration
     *
     * @return self
     */
    public function setHasExternalAgendaIntegration(bool $hasExternalAgendaIntegration): self
    {
        $this->initialized['hasExternalAgendaIntegration'] = true;
        $this->hasExternalAgendaIntegration = $hasExternalAgendaIntegration;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExternalAgendaSyncMethod()
    {
        return $this->externalAgendaSyncMethod;
    }

    /**
     * @param mixed $externalAgendaSyncMethod
     *
     * @return self
     */
    public function setExternalAgendaSyncMethod($externalAgendaSyncMethod): self
    {
        $this->initialized['externalAgendaSyncMethod'] = true;
        $this->externalAgendaSyncMethod = $externalAgendaSyncMethod;

        return $this;
    }
}
