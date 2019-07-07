<?php

namespace AppBundle\Entity;

/**
 * Wealth
 */
class Wealth
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var float
     */
    private $estimatedValuation;

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
     * Set type
     *
     * @param string $type
     *
     * @return Wealth
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
     * Set estimatedValuation
     *
     * @param float $estimatedValuation
     *
     * @return Wealth
     */
    public function setEstimatedValuation($estimatedValuation)
    {
        $this->estimatedValuation = $estimatedValuation;

        return $this;
    }

    /**
     * Get estimatedValuation
     *
     * @return float
     */
    public function getEstimatedValuation()
    {
        return $this->estimatedValuation;
    }

    /**
     * Set lead
     *
     * @param \AppBundle\Entity\Lead $lead
     *
     * @return Wealth
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

