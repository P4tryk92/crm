<?php

namespace AppBundle\Entity;

/**
 * Shares
 */
class Shares
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nameAndType;

    /**
     * @var float
     */
    private $numberOfSharesHeld;

    /**
     * @var float
     */
    private $value;

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
     * Set nameAndType
     *
     * @param string $nameAndType
     *
     * @return Shares
     */
    public function setNameAndType($nameAndType)
    {
        $this->nameAndType = $nameAndType;

        return $this;
    }

    /**
     * Get nameAndType
     *
     * @return string
     */
    public function getNameAndType()
    {
        return $this->nameAndType;
    }

    /**
     * Set numberOfSharesHeld
     *
     * @param float $numberOfSharesHeld
     *
     * @return Shares
     */
    public function setNumberOfSharesHeld($numberOfSharesHeld)
    {
        $this->numberOfSharesHeld = $numberOfSharesHeld;

        return $this;
    }

    /**
     * Get numberOfSharesHeld
     *
     * @return float
     */
    public function getNumberOfSharesHeld()
    {
        return $this->numberOfSharesHeld;
    }

    /**
     * Set value
     *
     * @param float $value
     *
     * @return Shares
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set lead
     *
     * @param \AppBundle\Entity\Lead $lead
     *
     * @return Shares
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

