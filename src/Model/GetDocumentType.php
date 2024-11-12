<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Model;

class GetDocumentType extends AbstractModel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var bool
     */
    protected $canHaveAttachment;
    /**
     * @var bool
     */
    protected $isForCrm;
    /**
     * @var bool
     */
    protected $isForContact;
    /**
     * @var bool
     */
    protected $isForSale;
    /**
     * @var bool
     */
    protected $isForDebtor;
    /**
     * @var bool
     */
    protected $isForProject;
    /**
     * @var bool
     */
    protected $isForSubscription;
    /**
     * @var bool
     */
    protected $isForEmployee;
    /**
     * @var bool
     */
    protected $isForInvoice;
    /**
     * @var bool
     */
    protected $isForMyorganizationprofile;
    /**
     * @var bool
     */
    protected $isBlocked;
    /**
     * @var bool
     */
    protected $isVisibleOnAll;

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
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCanHaveAttachment(): bool
    {
        return $this->canHaveAttachment;
    }

    /**
     * @param bool $canHaveAttachment
     *
     * @return self
     */
    public function setCanHaveAttachment(bool $canHaveAttachment): self
    {
        $this->initialized['canHaveAttachment'] = true;
        $this->canHaveAttachment = $canHaveAttachment;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsForCrm(): bool
    {
        return $this->isForCrm;
    }

    /**
     * @param bool $isForCrm
     *
     * @return self
     */
    public function setIsForCrm(bool $isForCrm): self
    {
        $this->initialized['isForCrm'] = true;
        $this->isForCrm = $isForCrm;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsForContact(): bool
    {
        return $this->isForContact;
    }

    /**
     * @param bool $isForContact
     *
     * @return self
     */
    public function setIsForContact(bool $isForContact): self
    {
        $this->initialized['isForContact'] = true;
        $this->isForContact = $isForContact;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsForSale(): bool
    {
        return $this->isForSale;
    }

    /**
     * @param bool $isForSale
     *
     * @return self
     */
    public function setIsForSale(bool $isForSale): self
    {
        $this->initialized['isForSale'] = true;
        $this->isForSale = $isForSale;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsForDebtor(): bool
    {
        return $this->isForDebtor;
    }

    /**
     * @param bool $isForDebtor
     *
     * @return self
     */
    public function setIsForDebtor(bool $isForDebtor): self
    {
        $this->initialized['isForDebtor'] = true;
        $this->isForDebtor = $isForDebtor;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsForProject(): bool
    {
        return $this->isForProject;
    }

    /**
     * @param bool $isForProject
     *
     * @return self
     */
    public function setIsForProject(bool $isForProject): self
    {
        $this->initialized['isForProject'] = true;
        $this->isForProject = $isForProject;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsForSubscription(): bool
    {
        return $this->isForSubscription;
    }

    /**
     * @param bool $isForSubscription
     *
     * @return self
     */
    public function setIsForSubscription(bool $isForSubscription): self
    {
        $this->initialized['isForSubscription'] = true;
        $this->isForSubscription = $isForSubscription;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsForEmployee(): bool
    {
        return $this->isForEmployee;
    }

    /**
     * @param bool $isForEmployee
     *
     * @return self
     */
    public function setIsForEmployee(bool $isForEmployee): self
    {
        $this->initialized['isForEmployee'] = true;
        $this->isForEmployee = $isForEmployee;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsForInvoice(): bool
    {
        return $this->isForInvoice;
    }

    /**
     * @param bool $isForInvoice
     *
     * @return self
     */
    public function setIsForInvoice(bool $isForInvoice): self
    {
        $this->initialized['isForInvoice'] = true;
        $this->isForInvoice = $isForInvoice;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsForMyorganizationprofile(): bool
    {
        return $this->isForMyorganizationprofile;
    }

    /**
     * @param bool $isForMyorganizationprofile
     *
     * @return self
     */
    public function setIsForMyorganizationprofile(bool $isForMyorganizationprofile): self
    {
        $this->initialized['isForMyorganizationprofile'] = true;
        $this->isForMyorganizationprofile = $isForMyorganizationprofile;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsBlocked(): bool
    {
        return $this->isBlocked;
    }

    /**
     * @param bool $isBlocked
     *
     * @return self
     */
    public function setIsBlocked(bool $isBlocked): self
    {
        $this->initialized['isBlocked'] = true;
        $this->isBlocked = $isBlocked;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsVisibleOnAll(): bool
    {
        return $this->isVisibleOnAll;
    }

    /**
     * @param bool $isVisibleOnAll
     *
     * @return self
     */
    public function setIsVisibleOnAll(bool $isVisibleOnAll): self
    {
        $this->initialized['isVisibleOnAll'] = true;
        $this->isVisibleOnAll = $isVisibleOnAll;

        return $this;
    }
}
