<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetContactSimple extends AbstractModel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var GetPersonSimple
     */
    protected $person;
    /**
     * @var GetOrganizationSimple
     */
    protected $organization;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
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
     * @return GetPersonSimple
     */
    public function getPerson(): GetPersonSimple
    {
        return $this->person;
    }

    /**
     * @param GetPersonSimple $person
     *
     * @return self
     */
    public function setPerson(GetPersonSimple $person): self
    {
        $this->initialized['person'] = true;
        $this->person = $person;

        return $this;
    }

    /**
     * @return GetOrganizationSimple
     */
    public function getOrganization(): GetOrganizationSimple
    {
        return $this->organization;
    }

    /**
     * @param GetOrganizationSimple $organization
     *
     * @return self
     */
    public function setOrganization(GetOrganizationSimple $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }
}
