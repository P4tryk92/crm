<?php

namespace AppBundle\Entity;

/**
 * Company
 */
class Company
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $industry;

    /**
     * @var string
     */
    private $nip;

    /**
     * @var string
     */
    private $regon;

    /**
     * @var integer
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var boolean
     */
    private $isActive;

    /**
     * @var string
     */
    private $note;

    /**
     * @var \DateTime
     */
    private $companyStartDate;

    /**
     * @var string
     */
    private $site;

    /**
     * @var string
     */
    private $addressStreetAndNumber;

    /**
     * @var string
     */
    private $addressPostCode;

    /**
     * @var string
     */
    private $addressCity;

    /**
     * @var string
     */
    private $voivodeship;

    /**
     * @var string
     */
    private $nationality;

    /**
     * @var string
     */
    private $correspondenceAddressStreetAndNumber;

    /**
     * @var string
     */
    private $correspondenceAddressPostCode;

    /**
     * @var string
     */
    private $correspondenceAddressCity;

    /**
     * @var string
     */
    private $correspondenceVoivodeship;

    /**
     * @var float
     */
    private $numberOfEmployees;

    /**
     * @var float
     */
    private $monthlyCosts;

    /**
     * @var float
     */
    private $estimatedMonthlyCosts;

    /**
     * @var float
     */
    private $fixedAnnualIncome;

    /**
     * @var float
     */
    private $stockQuotes;

    /**
     * @var string
     */
    private $planingInvestments;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $credits;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $leasing;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $wealthByAppraiser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $shares;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->credits = new \Doctrine\Common\Collections\ArrayCollection();
        $this->leasing = new \Doctrine\Common\Collections\ArrayCollection();
        $this->wealthByAppraiser = new \Doctrine\Common\Collections\ArrayCollection();
        $this->shares = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set companyName
     *
     * @param string $companyName
     *
     * @return Company
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
     * Set type
     *
     * @param string $type
     *
     * @return Company
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set industry
     *
     * @param string $industry
     *
     * @return Company
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Set nip
     *
     * @param string $nip
     *
     * @return Company
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
     * Set regon
     *
     * @param string $regon
     *
     * @return Company
     */
    public function setRegon($regon)
    {
        $this->regon = $regon;

        return $this;
    }

    /**
     * Get regon
     *
     * @return string
     */
    public function getRegon()
    {
        return $this->regon;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     *
     * @return Company
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
     * Set email
     *
     * @param string $email
     *
     * @return Company
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Company
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Company
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
     * Set note
     *
     * @param string $note
     *
     * @return Company
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set companyStartDate
     *
     * @param \DateTime $companyStartDate
     *
     * @return Company
     */
    public function setCompanyStartDate($companyStartDate)
    {
        $this->companyStartDate = $companyStartDate;

        return $this;
    }

    /**
     * Get companyStartDate
     *
     * @return \DateTime
     */
    public function getCompanyStartDate()
    {
        return $this->companyStartDate;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return Company
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set addressStreetAndNumber
     *
     * @param string $addressStreetAndNumber
     *
     * @return Company
     */
    public function setAddressStreetAndNumber($addressStreetAndNumber)
    {
        $this->addressStreetAndNumber = $addressStreetAndNumber;

        return $this;
    }

    /**
     * Get addressStreetAndNumber
     *
     * @return string
     */
    public function getAddressStreetAndNumber()
    {
        return $this->addressStreetAndNumber;
    }

    /**
     * Set addressPostCode
     *
     * @param string $addressPostCode
     *
     * @return Company
     */
    public function setAddressPostCode($addressPostCode)
    {
        $this->addressPostCode = $addressPostCode;

        return $this;
    }

    /**
     * Get addressPostCode
     *
     * @return string
     */
    public function getAddressPostCode()
    {
        return $this->addressPostCode;
    }

    /**
     * Set addressCity
     *
     * @param string $addressCity
     *
     * @return Company
     */
    public function setAddressCity($addressCity)
    {
        $this->addressCity = $addressCity;

        return $this;
    }

    /**
     * Get addressCity
     *
     * @return string
     */
    public function getAddressCity()
    {
        return $this->addressCity;
    }

    /**
     * Set voivodeship
     *
     * @param string $voivodeship
     *
     * @return Company
     */
    public function setVoivodeship($voivodeship)
    {
        $this->voivodeship = $voivodeship;

        return $this;
    }

    /**
     * Get voivodeship
     *
     * @return string
     */
    public function getVoivodeship()
    {
        return $this->voivodeship;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     *
     * @return Company
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set correspondenceAddressStreetAndNumber
     *
     * @param string $correspondenceAddressStreetAndNumber
     *
     * @return Company
     */
    public function setCorrespondenceAddressStreetAndNumber($correspondenceAddressStreetAndNumber)
    {
        $this->correspondenceAddressStreetAndNumber = $correspondenceAddressStreetAndNumber;

        return $this;
    }

    /**
     * Get correspondenceAddressStreetAndNumber
     *
     * @return string
     */
    public function getCorrespondenceAddressStreetAndNumber()
    {
        return $this->correspondenceAddressStreetAndNumber;
    }

    /**
     * Set correspondenceAddressPostCode
     *
     * @param string $correspondenceAddressPostCode
     *
     * @return Company
     */
    public function setCorrespondenceAddressPostCode($correspondenceAddressPostCode)
    {
        $this->correspondenceAddressPostCode = $correspondenceAddressPostCode;

        return $this;
    }

    /**
     * Get correspondenceAddressPostCode
     *
     * @return string
     */
    public function getCorrespondenceAddressPostCode()
    {
        return $this->correspondenceAddressPostCode;
    }

    /**
     * Set correspondenceAddressCity
     *
     * @param string $correspondenceAddressCity
     *
     * @return Company
     */
    public function setCorrespondenceAddressCity($correspondenceAddressCity)
    {
        $this->correspondenceAddressCity = $correspondenceAddressCity;

        return $this;
    }

    /**
     * Get correspondenceAddressCity
     *
     * @return string
     */
    public function getCorrespondenceAddressCity()
    {
        return $this->correspondenceAddressCity;
    }

    /**
     * Set correspondenceVoivodeship
     *
     * @param string $correspondenceVoivodeship
     *
     * @return Company
     */
    public function setCorrespondenceVoivodeship($correspondenceVoivodeship)
    {
        $this->correspondenceVoivodeship = $correspondenceVoivodeship;

        return $this;
    }

    /**
     * Get correspondenceVoivodeship
     *
     * @return string
     */
    public function getCorrespondenceVoivodeship()
    {
        return $this->correspondenceVoivodeship;
    }

    /**
     * Set numberOfEmployees
     *
     * @param float $numberOfEmployees
     *
     * @return Company
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $this->numberOfEmployees = $numberOfEmployees;

        return $this;
    }

    /**
     * Get numberOfEmployees
     *
     * @return float
     */
    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }

    /**
     * Set monthlyCosts
     *
     * @param float $monthlyCosts
     *
     * @return Company
     */
    public function setMonthlyCosts($monthlyCosts)
    {
        $this->monthlyCosts = $monthlyCosts;

        return $this;
    }

    /**
     * Get monthlyCosts
     *
     * @return float
     */
    public function getMonthlyCosts()
    {
        return $this->monthlyCosts;
    }

    /**
     * Set estimatedMonthlyCosts
     *
     * @param float $estimatedMonthlyCosts
     *
     * @return Company
     */
    public function setEstimatedMonthlyCosts($estimatedMonthlyCosts)
    {
        $this->estimatedMonthlyCosts = $estimatedMonthlyCosts;

        return $this;
    }

    /**
     * Get estimatedMonthlyCosts
     *
     * @return float
     */
    public function getEstimatedMonthlyCosts()
    {
        return $this->estimatedMonthlyCosts;
    }

    /**
     * Set fixedAnnualIncome
     *
     * @param float $fixedAnnualIncome
     *
     * @return Company
     */
    public function setFixedAnnualIncome($fixedAnnualIncome)
    {
        $this->fixedAnnualIncome = $fixedAnnualIncome;

        return $this;
    }

    /**
     * Get fixedAnnualIncome
     *
     * @return float
     */
    public function getFixedAnnualIncome()
    {
        return $this->fixedAnnualIncome;
    }

    /**
     * Set stockQuotes
     *
     * @param float $stockQuotes
     *
     * @return Company
     */
    public function setStockQuotes($stockQuotes)
    {
        $this->stockQuotes = $stockQuotes;

        return $this;
    }

    /**
     * Get stockQuotes
     *
     * @return float
     */
    public function getStockQuotes()
    {
        return $this->stockQuotes;
    }

    /**
     * Set planingInvestments
     *
     * @param string $planingInvestments
     *
     * @return Company
     */
    public function setPlaningInvestments($planingInvestments)
    {
        $this->planingInvestments = $planingInvestments;

        return $this;
    }

    /**
     * Get planingInvestments
     *
     * @return string
     */
    public function getPlaningInvestments()
    {
        return $this->planingInvestments;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Company
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Company
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Add credit
     *
     * @param \AppBundle\Entity\Credit $credit
     *
     * @return Company
     */
    public function addCredit(\AppBundle\Entity\Credit $credit)
    {
        $this->credits[] = $credit;

        return $this;
    }

    /**
     * Remove credit
     *
     * @param \AppBundle\Entity\Credit $credit
     */
    public function removeCredit(\AppBundle\Entity\Credit $credit)
    {
        $this->credits->removeElement($credit);
    }

    /**
     * Get credits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Add leasing
     *
     * @param \AppBundle\Entity\Leasing $leasing
     *
     * @return Company
     */
    public function addLeasing(\AppBundle\Entity\Leasing $leasing)
    {
        $this->leasing[] = $leasing;

        return $this;
    }

    /**
     * Remove leasing
     *
     * @param \AppBundle\Entity\Leasing $leasing
     */
    public function removeLeasing(\AppBundle\Entity\Leasing $leasing)
    {
        $this->leasing->removeElement($leasing);
    }

    /**
     * Get leasing
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLeasing()
    {
        return $this->leasing;
    }

    /**
     * Add wealthByAppraiser
     *
     * @param \AppBundle\Entity\WealthByAppraiser $wealthByAppraiser
     *
     * @return Company
     */
    public function addWealthByAppraiser(\AppBundle\Entity\WealthByAppraiser $wealthByAppraiser)
    {
        $this->wealthByAppraiser[] = $wealthByAppraiser;

        return $this;
    }

    /**
     * Remove wealthByAppraiser
     *
     * @param \AppBundle\Entity\WealthByAppraiser $wealthByAppraiser
     */
    public function removeWealthByAppraiser(\AppBundle\Entity\WealthByAppraiser $wealthByAppraiser)
    {
        $this->wealthByAppraiser->removeElement($wealthByAppraiser);
    }

    /**
     * Get wealthByAppraiser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWealthByAppraiser()
    {
        return $this->wealthByAppraiser;
    }

    /**
     * Add share
     *
     * @param \AppBundle\Entity\Shares $share
     *
     * @return Company
     */
    public function addShare(\AppBundle\Entity\Shares $share)
    {
        $this->shares[] = $share;

        return $this;
    }

    /**
     * Remove share
     *
     * @param \AppBundle\Entity\Shares $share
     */
    public function removeShare(\AppBundle\Entity\Shares $share)
    {
        $this->shares->removeElement($share);
    }

    /**
     * Get shares
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getShares()
    {
        return $this->shares;
    }
}
