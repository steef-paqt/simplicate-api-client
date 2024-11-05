<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class PostEmployee
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
    protected $personId;
    /**
     *
     *
     * @var PostEmployeeFk
     */
    protected $supervisor;
    /**
     *
     *
     * @var PostEmployeeStatusFk
     */
    protected $status;
    /**
     *
     *
     * @var PostCustomFieldValue[]
     */
    protected $customFields;

    /**
     *
     *
     * @return string
     */
    public function getPersonId(): string
    {
        return $this->personId;
    }

    /**
     *
     *
     * @param string $personId
     *
     * @return self
     */
    public function setPersonId(string $personId): self
    {
        $this->initialized['personId'] = true;
        $this->personId = $personId;

        return $this;
    }

    /**
     *
     *
     * @return PostEmployeeFk
     */
    public function getSupervisor(): PostEmployeeFk
    {
        return $this->supervisor;
    }

    /**
     *
     *
     * @param PostEmployeeFk $supervisor
     *
     * @return self
     */
    public function setSupervisor(PostEmployeeFk $supervisor): self
    {
        $this->initialized['supervisor'] = true;
        $this->supervisor = $supervisor;

        return $this;
    }

    /**
     *
     *
     * @return PostEmployeeStatusFk
     */
    public function getStatus(): PostEmployeeStatusFk
    {
        return $this->status;
    }

    /**
     *
     *
     * @param PostEmployeeStatusFk $status
     *
     * @return self
     */
    public function setStatus(PostEmployeeStatusFk $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     *
     *
     * @return PostCustomFieldValue[]
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     *
     *
     * @param PostCustomFieldValue[] $customFields
     *
     * @return self
     */
    public function setCustomFields(array $customFields): self
    {
        $this->initialized['customFields'] = true;
        $this->customFields = $customFields;

        return $this;
    }
}
