<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class Interest
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
     * @var string
     */
    protected $name;
    /**
     *
     *
     * @var string
     */
    protected $apiName;
    /**
     *
     *
     * @var bool
     */
    protected $organization;
    /**
     *
     *
     * @var bool
     */
    protected $person;
    /**
     *
     *
     * @var bool
     */
    protected $contact;

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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     *
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
     *
     *
     * @return string
     */
    public function getApiName(): string
    {
        return $this->apiName;
    }

    /**
     *
     *
     * @param string $apiName
     *
     * @return self
     */
    public function setApiName(string $apiName): self
    {
        $this->initialized['apiName'] = true;
        $this->apiName = $apiName;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getOrganization(): bool
    {
        return $this->organization;
    }

    /**
     *
     *
     * @param bool $organization
     *
     * @return self
     */
    public function setOrganization(bool $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getPerson(): bool
    {
        return $this->person;
    }

    /**
     *
     *
     * @param bool $person
     *
     * @return self
     */
    public function setPerson(bool $person): self
    {
        $this->initialized['person'] = true;
        $this->person = $person;

        return $this;
    }

    /**
     *
     *
     * @return bool
     */
    public function getContact(): bool
    {
        return $this->contact;
    }

    /**
     *
     *
     * @param bool $contact
     *
     * @return self
     */
    public function setContact(bool $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;

        return $this;
    }
}
