<?php

namespace AppBundle\Entity;

/**
 * Lead
 */
class Lead
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
    private $lastName;

    /**
     * @var integer
     */
    private $pin;

    /**
     * @var integer
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $email;

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
    private $birthDate;

    /**
     * @var string
     */
    private $birthPlace;

    /**
     * @var string
     */
    private $idCard;

    /**
     * @var \DateTime
     */
    private $idCardExpirationDate;

    /**
     * @var string
     */
    private $fatherFirstName;

    /**
     * @var string
     */
    private $motherFirstName;

    /**
     * @var string
     */
    private $motherFamilySurname;

    /**
     * @var string
     */
    private $maritalStatus;

    /**
     * @var string
     */
    private $education;

    /**
     * @var string
     */
    private $workIndustry;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $workLengthExperience;

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
     * @var \DateTime
     */
    private $dateFromLivesAtCurrentAddress;

    /**
     * @var float
     */
    private $fixedSalaryNet;

    /**
     * @var float
     */
    private $estimatedTimeSalaryNet;

    /**
     * @var integer
     */
    private $numberOfPeopleInTheHousehold;

    /**
     * @var float
     */
    private $totalFamilyIncome;

    /**
     * @var string
     */
    private $typeOfWorkContract;

    /**
     * @var \DateTime
     */
    private $startWorkContractDate;

    /**
     * @var string
     */
    private $endWorkContractDate;

    /**
     * @var boolean
     */
    private $alimony;

    /**
     * @var \DateTime
     */
    private $alimonyDateFrom;

    /**
     * @var \DateTime
     */
    private $alimonyDateTo;

    /**
     * @var float
     */
    private $alimonyAmount;

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
    private $wealth;

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
        $this->wealth = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Lead
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
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Lead
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
     * @param integer $pin
     *
     * @return Lead
     */
    public function setPin($pin)
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * Get pin
     *
     * @return integer
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     *
     * @return Lead
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
     * @return Lead
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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Lead
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
     * @return Lead
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
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Lead
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set birthPlace
     *
     * @param string $birthPlace
     *
     * @return Lead
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }

    /**
     * Get birthPlace
     *
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * Set idCard
     *
     * @param string $idCard
     *
     * @return Lead
     */
    public function setIdCard($idCard)
    {
        $this->idCard = $idCard;

        return $this;
    }

    /**
     * Get idCard
     *
     * @return string
     */
    public function getIdCard()
    {
        return $this->idCard;
    }

    /**
     * Set idCardExpirationDate
     *
     * @param \DateTime $idCardExpirationDate
     *
     * @return Lead
     */
    public function setIdCardExpirationDate($idCardExpirationDate)
    {
        $this->idCardExpirationDate = $idCardExpirationDate;

        return $this;
    }

    /**
     * Get idCardExpirationDate
     *
     * @return \DateTime
     */
    public function getIdCardExpirationDate()
    {
        return $this->idCardExpirationDate;
    }

    /**
     * Set fatherFirstName
     *
     * @param string $fatherFirstName
     *
     * @return Lead
     */
    public function setFatherFirstName($fatherFirstName)
    {
        $this->fatherFirstName = $fatherFirstName;

        return $this;
    }

    /**
     * Get fatherFirstName
     *
     * @return string
     */
    public function getFatherFirstName()
    {
        return $this->fatherFirstName;
    }

    /**
     * Set motherFirstName
     *
     * @param string $motherFirstName
     *
     * @return Lead
     */
    public function setMotherFirstName($motherFirstName)
    {
        $this->motherFirstName = $motherFirstName;

        return $this;
    }

    /**
     * Get motherFirstName
     *
     * @return string
     */
    public function getMotherFirstName()
    {
        return $this->motherFirstName;
    }

    /**
     * Set motherFamilySurname
     *
     * @param string $motherFamilySurname
     *
     * @return Lead
     */
    public function setMotherFamilySurname($motherFamilySurname)
    {
        $this->motherFamilySurname = $motherFamilySurname;

        return $this;
    }

    /**
     * Get motherFamilySurname
     *
     * @return string
     */
    public function getMotherFamilySurname()
    {
        return $this->motherFamilySurname;
    }

    /**
     * Set maritalStatus
     *
     * @param string $maritalStatus
     *
     * @return Lead
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    /**
     * Get maritalStatus
     *
     * @return string
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Set education
     *
     * @param string $education
     *
     * @return Lead
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return string
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set workIndustry
     *
     * @param string $workIndustry
     *
     * @return Lead
     */
    public function setWorkIndustry($workIndustry)
    {
        $this->workIndustry = $workIndustry;

        return $this;
    }

    /**
     * Get workIndustry
     *
     * @return string
     */
    public function getWorkIndustry()
    {
        return $this->workIndustry;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     *
     * @return Lead
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
     * Set workLengthExperience
     *
     * @param string $workLengthExperience
     *
     * @return Lead
     */
    public function setWorkLengthExperience($workLengthExperience)
    {
        $this->workLengthExperience = $workLengthExperience;

        return $this;
    }

    /**
     * Get workLengthExperience
     *
     * @return string
     */
    public function getWorkLengthExperience()
    {
        return $this->workLengthExperience;
    }

    /**
     * Set addressStreetAndNumber
     *
     * @param string $addressStreetAndNumber
     *
     * @return Lead
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
     * @return Lead
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
     * @return Lead
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
     * @return Lead
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
     * @return Lead
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
     * @return Lead
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
     * @return Lead
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
     * @return Lead
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
     * @return Lead
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
     * Set dateFromLivesAtCurrentAddress
     *
     * @param \DateTime $dateFromLivesAtCurrentAddress
     *
     * @return Lead
     */
    public function setDateFromLivesAtCurrentAddress($dateFromLivesAtCurrentAddress)
    {
        $this->dateFromLivesAtCurrentAddress = $dateFromLivesAtCurrentAddress;

        return $this;
    }

    /**
     * Get dateFromLivesAtCurrentAddress
     *
     * @return \DateTime
     */
    public function getDateFromLivesAtCurrentAddress()
    {
        return $this->dateFromLivesAtCurrentAddress;
    }

    /**
     * Set fixedSalaryNet
     *
     * @param float $fixedSalaryNet
     *
     * @return Lead
     */
    public function setFixedSalaryNet($fixedSalaryNet)
    {
        $this->fixedSalaryNet = $fixedSalaryNet;

        return $this;
    }

    /**
     * Get fixedSalaryNet
     *
     * @return float
     */
    public function getFixedSalaryNet()
    {
        return $this->fixedSalaryNet;
    }

    /**
     * Set estimatedTimeSalaryNet
     *
     * @param float $estimatedTimeSalaryNet
     *
     * @return Lead
     */
    public function setEstimatedTimeSalaryNet($estimatedTimeSalaryNet)
    {
        $this->estimatedTimeSalaryNet = $estimatedTimeSalaryNet;

        return $this;
    }

    /**
     * Get estimatedTimeSalaryNet
     *
     * @return float
     */
    public function getEstimatedTimeSalaryNet()
    {
        return $this->estimatedTimeSalaryNet;
    }

    /**
     * Set numberOfPeopleInTheHousehold
     *
     * @param integer $numberOfPeopleInTheHousehold
     *
     * @return Lead
     */
    public function setNumberOfPeopleInTheHousehold($numberOfPeopleInTheHousehold)
    {
        $this->numberOfPeopleInTheHousehold = $numberOfPeopleInTheHousehold;

        return $this;
    }

    /**
     * Get numberOfPeopleInTheHousehold
     *
     * @return integer
     */
    public function getNumberOfPeopleInTheHousehold()
    {
        return $this->numberOfPeopleInTheHousehold;
    }

    /**
     * Set totalFamilyIncome
     *
     * @param float $totalFamilyIncome
     *
     * @return Lead
     */
    public function setTotalFamilyIncome($totalFamilyIncome)
    {
        $this->totalFamilyIncome = $totalFamilyIncome;

        return $this;
    }

    /**
     * Get totalFamilyIncome
     *
     * @return float
     */
    public function getTotalFamilyIncome()
    {
        return $this->totalFamilyIncome;
    }

    /**
     * Set typeOfWorkContract
     *
     * @param string $typeOfWorkContract
     *
     * @return Lead
     */
    public function setTypeOfWorkContract($typeOfWorkContract)
    {
        $this->typeOfWorkContract = $typeOfWorkContract;

        return $this;
    }

    /**
     * Get typeOfWorkContract
     *
     * @return string
     */
    public function getTypeOfWorkContract()
    {
        return $this->typeOfWorkContract;
    }

    /**
     * Set startWorkContractDate
     *
     * @param \DateTime $startWorkContractDate
     *
     * @return Lead
     */
    public function setStartWorkContractDate($startWorkContractDate)
    {
        $this->startWorkContractDate = $startWorkContractDate;

        return $this;
    }

    /**
     * Get startWorkContractDate
     *
     * @return \DateTime
     */
    public function getStartWorkContractDate()
    {
        return $this->startWorkContractDate;
    }

    /**
     * Set endWorkContractDate
     *
     * @param string $endWorkContractDate
     *
     * @return Lead
     */
    public function setEndWorkContractDate($endWorkContractDate)
    {
        $this->endWorkContractDate = $endWorkContractDate;

        return $this;
    }

    /**
     * Get endWorkContractDate
     *
     * @return string
     */
    public function getEndWorkContractDate()
    {
        return $this->endWorkContractDate;
    }

    /**
     * Set alimony
     *
     * @param boolean $alimony
     *
     * @return Lead
     */
    public function setAlimony($alimony)
    {
        $this->alimony = $alimony;

        return $this;
    }

    /**
     * Get alimony
     *
     * @return boolean
     */
    public function getAlimony()
    {
        return $this->alimony;
    }

    /**
     * Set alimonyDateFrom
     *
     * @param \DateTime $alimonyDateFrom
     *
     * @return Lead
     */
    public function setAlimonyDateFrom($alimonyDateFrom)
    {
        $this->alimonyDateFrom = $alimonyDateFrom;

        return $this;
    }

    /**
     * Get alimonyDateFrom
     *
     * @return \DateTime
     */
    public function getAlimonyDateFrom()
    {
        return $this->alimonyDateFrom;
    }

    /**
     * Set alimonyDateTo
     *
     * @param \DateTime $alimonyDateTo
     *
     * @return Lead
     */
    public function setAlimonyDateTo($alimonyDateTo)
    {
        $this->alimonyDateTo = $alimonyDateTo;

        return $this;
    }

    /**
     * Get alimonyDateTo
     *
     * @return \DateTime
     */
    public function getAlimonyDateTo()
    {
        return $this->alimonyDateTo;
    }

    /**
     * Set alimonyAmount
     *
     * @param float $alimonyAmount
     *
     * @return Lead
     */
    public function setAlimonyAmount($alimonyAmount)
    {
        $this->alimonyAmount = $alimonyAmount;

        return $this;
    }

    /**
     * Get alimonyAmount
     *
     * @return float
     */
    public function getAlimonyAmount()
    {
        return $this->alimonyAmount;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Lead
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
     * @return Lead
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
     * @return Lead
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
     * Add wealth
     *
     * @param \AppBundle\Entity\Wealth $wealth
     *
     * @return Lead
     */
    public function addWealth(\AppBundle\Entity\Wealth $wealth)
    {
        $this->wealth[] = $wealth;

        return $this;
    }

    /**
     * Remove wealth
     *
     * @param \AppBundle\Entity\Wealth $wealth
     */
    public function removeWealth(\AppBundle\Entity\Wealth $wealth)
    {
        $this->wealth->removeElement($wealth);
    }

    /**
     * Get wealth
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWealth()
    {
        return $this->wealth;
    }

    /**
     * Add wealthByAppraiser
     *
     * @param \AppBundle\Entity\WealthByAppraiser $wealthByAppraiser
     *
     * @return Lead
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
     * @return Lead
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

