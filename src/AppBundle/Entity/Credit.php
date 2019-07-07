<?php

namespace AppBundle\Entity;

/**
 * Credit
 */
class Credit
{
    /**
     * @var integer
     */
    private $id;

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
     * @var float
     */
    private $profitMargin;

    /**
     * @var \AppBundle\Entity\Lead
     */
    private $lead;


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
     * Set amount
     *
     * @param float $amount
     *
     * @return Credit
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
     * @return Credit
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
     * @return Credit
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
     * @return Credit
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
     * @return Credit
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
     * Set profitMargin
     *
     * @param float $profitMargin
     *
     * @return Credit
     */
    public function setProfitMargin($profitMargin)
    {
        $this->profitMargin = $profitMargin;

        return $this;
    }

    /**
     * Get profitMargin
     *
     * @return float
     */
    public function getProfitMargin()
    {
        return $this->profitMargin;
    }

    /**
     * Set lead
     *
     * @param \AppBundle\Entity\Lead $lead
     *
     * @return Credit
     */
    public function setLead(\AppBundle\Entity\Lead $lead = null)
    {
        $this->lead = $lead;

        return $this;
    }

    /**
     * Get lead
     *
     * @return \AppBundle\Entity\Lead
     */
    public function getLead()
    {
        return $this->lead;
    }
}

