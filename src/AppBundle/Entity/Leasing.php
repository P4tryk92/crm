<?php

namespace AppBundle\Entity;

/**
 * Leasing
 */
class Leasing
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $leasingThing;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var \DateTime
     */
    private $grantingDate;

    /**
     * @var \DateTime
     */
    private $repaymentDate;

    /**
     * @var integer
     */
    private $monthlyInstallment;

    /**
     * @var string
     */
    private $bankName;

    /**
     * @var \AppBundle\Entity\Company
     */
    private $company;


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
     * Set leasingThing
     *
     * @param string $leasingThing
     *
     * @return Leasing
     */
    public function setLeasingThing($leasingThing)
    {
        $this->leasingThing = $leasingThing;

        return $this;
    }

    /**
     * Get leasingThing
     *
     * @return string
     */
    public function getLeasingThing()
    {
        return $this->leasingThing;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Leasing
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set grantingDate
     *
     * @param \DateTime $grantingDate
     *
     * @return Leasing
     */
    public function setGrantingDate($grantingDate)
    {
        $this->grantingDate = $grantingDate;

        return $this;
    }

    /**
     * Get grantingDate
     *
     * @return \DateTime
     */
    public function getGrantingDate()
    {
        return $this->grantingDate;
    }

    /**
     * Set repaymentDate
     *
     * @param \DateTime $repaymentDate
     *
     * @return Leasing
     */
    public function setRepaymentDate($repaymentDate)
    {
        $this->repaymentDate = $repaymentDate;

        return $this;
    }

    /**
     * Get repaymentDate
     *
     * @return \DateTime
     */
    public function getRepaymentDate()
    {
        return $this->repaymentDate;
    }

    /**
     * Set monthlyInstallment
     *
     * @param integer $monthlyInstallment
     *
     * @return Leasing
     */
    public function setMonthlyInstallment($monthlyInstallment)
    {
        $this->monthlyInstallment = $monthlyInstallment;

        return $this;
    }

    /**
     * Get monthlyInstallment
     *
     * @return integer
     */
    public function getMonthlyInstallment()
    {
        return $this->monthlyInstallment;
    }

    /**
     * Set bankName
     *
     * @param string $bankName
     *
     * @return Leasing
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * Get bankName
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Set company
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return Leasing
     */
    public function setCompany(\AppBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \AppBundle\Entity\Company
     */
    public function getCompany()
    {
        return $this->company;
    }
}
