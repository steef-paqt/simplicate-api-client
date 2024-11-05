<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetPersonDebtorSimple
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
     * @var RelationType
     */
    protected $relationType;
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
    protected $fullName;
    /**
     *
     *
     * @var string
     */
    protected $relationNumber;

    /**
     *
     *
     * @return RelationType
     */
    public function getRelationType(): RelationType
    {
        return $this->relationType;
    }

    /**
     *
     *
     * @param RelationType $relationType
     *
     * @return self
     */
    public function setRelationType(RelationType $relationType): self
    {
        $this->initialized['relationType'] = true;
        $this->relationType = $relationType;

        return $this;
    }

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
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     *
     *
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName): self
    {
        $this->initialized['fullName'] = true;
        $this->fullName = $fullName;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getRelationNumber(): string
    {
        return $this->relationNumber;
    }

    /**
     *
     *
     * @param string $relationNumber
     *
     * @return self
     */
    public function setRelationNumber(string $relationNumber): self
    {
        $this->initialized['relationNumber'] = true;
        $this->relationNumber = $relationNumber;

        return $this;
    }
}
