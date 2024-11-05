<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Model;

class GetBasicPersonSimple
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
    protected $dateOfBirth;
    /**
     *
     *
     * @var string
     */
    protected $genderId;
    /**
     *
     *
     * @var string
     */
    protected $gender;
    /**
     *
     *
     * @var GetAddress
     */
    protected $address;
    /**
     *
     *
     * @var string
     */
    protected $email;
    /**
     *
     *
     * @var string
     */
    protected $phone;
    /**
     *
     *
     * @var string
     */
    protected $twitterUrl;
    /**
     *
     *
     * @var string
     */
    protected $linkedinUrl;
    /**
     *
     *
     * @var string
     */
    protected $facebookUrl;
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
     * @return string
     */
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }

    /**
     *
     *
     * @param string $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth(string $dateOfBirth): self
    {
        $this->initialized['dateOfBirth'] = true;
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getGenderId(): string
    {
        return $this->genderId;
    }

    /**
     *
     *
     * @param string $genderId
     *
     * @return self
     */
    public function setGenderId(string $genderId): self
    {
        $this->initialized['genderId'] = true;
        $this->genderId = $genderId;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     *
     *
     * @param string $gender
     *
     * @return self
     */
    public function setGender(string $gender): self
    {
        $this->initialized['gender'] = true;
        $this->gender = $gender;

        return $this;
    }

    /**
     *
     *
     * @return GetAddress
     */
    public function getAddress(): GetAddress
    {
        return $this->address;
    }

    /**
     *
     *
     * @param GetAddress $address
     *
     * @return self
     */
    public function setAddress(GetAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     *
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     *
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getTwitterUrl(): string
    {
        return $this->twitterUrl;
    }

    /**
     *
     *
     * @param string $twitterUrl
     *
     * @return self
     */
    public function setTwitterUrl(string $twitterUrl): self
    {
        $this->initialized['twitterUrl'] = true;
        $this->twitterUrl = $twitterUrl;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getLinkedinUrl(): string
    {
        return $this->linkedinUrl;
    }

    /**
     *
     *
     * @param string $linkedinUrl
     *
     * @return self
     */
    public function setLinkedinUrl(string $linkedinUrl): self
    {
        $this->initialized['linkedinUrl'] = true;
        $this->linkedinUrl = $linkedinUrl;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getFacebookUrl(): string
    {
        return $this->facebookUrl;
    }

    /**
     *
     *
     * @param string $facebookUrl
     *
     * @return self
     */
    public function setFacebookUrl(string $facebookUrl): self
    {
        $this->initialized['facebookUrl'] = true;
        $this->facebookUrl = $facebookUrl;

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
