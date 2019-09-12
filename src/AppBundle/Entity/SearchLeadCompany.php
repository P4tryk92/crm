<?php

namespace AppBundle\Entity;

/**
 * SearchLeadCompany
 */
class SearchLeadCompany
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $pin;

    /**
     * @var string
     */
    private $nip;

    /**
     * @var integer
     */
    private $phoneNumber;

    /**
     * @var boolean
     */
    private $isActive;

    /**
     * @var float
     */
    private $fixedSalaryNetFrom;

    /**
     * @var float
     */
    private $fixedSalaryNetTo;

    /**
     * @var float
     */
    private $fixedAnnualIncomeFrom;

    /**
     * @var float
     */
    private $fixedAnnualIncomeTo;

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return integer
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return SearchLeadCompany
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     *
     * @return SearchLeadCompany
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return SearchLeadCompany
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set pin
     *
     * @param string $pin
     *
     * @return SearchLeadCompany
     */
    public function setPin($pin)
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * Get pin
     *
     * @return string
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * Set nip
     *
     * @param string $nip
     *
     * @return SearchLeadCompany
     */
    public function setNip($nip)
    {
        $this->nip = $nip;

        return $this;
    }

    /**
     * Get nip
     *
     * @return string
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     *
     * @return SearchLeadCompany
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return integer
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return SearchLeadCompany
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set fixedSalaryNetFrom
     *
     * @param float $fixedSalaryNetFrom
     *
     * @return SearchLeadCompany
     */
    public function setFixedSalaryNetFrom($fixedSalaryNetFrom)
    {
        $this->fixedSalaryNetFrom = $fixedSalaryNetFrom;

        return $this;
    }

    /**
     * Get fixedSalaryNetFrom
     *
     * @return float
     */
    public function getFixedSalaryNetFrom()
    {
        return $this->fixedSalaryNetFrom;
    }

    /**
     * Set fixedSalaryNetTo
     *
     * @param float $fixedSalaryNetTo
     *
     * @return SearchLeadCompany
     */
    public function setFixedSalaryNetTo($fixedSalaryNetTo)
    {
        $this->fixedSalaryNetTo = $fixedSalaryNetTo;

        return $this;
    }

    /**
     * Get fixedSalaryNetTo
     *
     * @return float
     */
    public function getFixedSalaryNetTo()
    {
        return $this->fixedSalaryNetTo;
    }

    /**
     * Set fixedAnnualIncomeFrom
     *
     * @param float $fixedAnnualIncomeFrom
     *
     * @return SearchLeadCompany
     */
    public function setFixedAnnualIncomeFrom($fixedAnnualIncomeFrom)
    {
        $this->fixedAnnualIncomeFrom = $fixedAnnualIncomeFrom;

        return $this;
    }

    /**
     * Get fixedAnnualIncomeFrom
     *
     * @return float
     */
    public function getFixedAnnualIncomeFrom()
    {
        return $this->fixedAnnualIncomeFrom;
    }

    /**
     * Set fixedAnnualIncomeTo
     *
     * @param float $fixedAnnualIncomeTo
     *
     * @return SearchLeadCompany
     */
    public function setFixedAnnualIncomeTo($fixedAnnualIncomeTo)
    {
        $this->fixedAnnualIncomeTo = $fixedAnnualIncomeTo;

        return $this;
    }

    /**
     * Get fixedAnnualIncomeTo
     *
     * @return float
     */
    public function getFixedAnnualIncomeTo()
    {
        return $this->fixedAnnualIncomeTo;
    }
}

