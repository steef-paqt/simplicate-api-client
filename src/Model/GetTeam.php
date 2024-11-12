<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetTeam extends AbstractModel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var GetEmployeeSimple[]
     */
    protected $employees;
    /**
     * @var string
     */
    protected $name;

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
     * @return GetEmployeeSimple[]
     */
    public function getEmployees(): array
    {
        return $this->employees;
    }

    /**
     * @param GetEmployeeSimple[] $employees
     *
     * @return self
     */
    public function setEmployees(array $employees): self
    {
        $this->initialized['employees'] = true;
        $this->employees = $employees;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
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
}
