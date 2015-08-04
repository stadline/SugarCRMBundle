<?php

namespace Stadline\SugarCRMBundle\Service\GetOpportunities;

/**
 * Opportunity from SugarCRM
 * 
 * @author Jérôme Weber <jerome.weber@stadline.com>
 *
 */
class Opportunity
{
    protected $id;
    protected $name;
    protected $createdAt;
    protected $assignedUserName;
    protected $opportunityType;
    protected $campaignName;
    protected $leadSource;
    protected $amount;
    protected $salesStage;
    protected $typeAffaireC;
    protected $closedAt;

    /**
     * Get Id value
     * 
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set Id value
     * 
     * @param string $id
     * 
     * @return \Api\SugarCRMBundle\Service\GetOpportunities\Opportunity
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * Get created at value
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * Set created at value
     *
     * @param \DateTime $date
     *
     * @return \Api\SugarCRMBundle\Service\GetOpportunities\Opportunity
     */
    public function setCreatedAt(\DateTime $date)
    {
        $this->createdAt = $date;
    
        return $this;
    }
    
    /**
     * Get closed at value
     *
     * @return \DateTime
     */
    public function getClosedAt()
    {
        return $this->closedAt;
    }
    
    /**
     * Set closed at value
     *
     * @param \DateTime $date
     *
     * @return \Api\SugarCRMBundle\Service\GetOpportunities\Opportunity
     */
    public function setClosedAt(\DateTime $date)
    {
        $this->closedAt = $date;
    
        return $this;
    }
        
    /**
     * Get name value
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set Name value
     *
     * @param string $name
     *
     * @return \Api\SugarCRMBundle\Service\GetOpportunities\Opportunity
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }
    
    /**
     * Get amount value
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * Set amount value
     *
     * @param float $amount
     *
     * @return \Api\SugarCRMBundle\Service\GetOpportunities\Opportunity
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }
    
    /**
     * Get AssignedUserName value
     *
     * @return string
     */
    public function getAssignedUserName()
    {
        return $this->assignedUserName;
    }
    
    /**
     * Set Assignee value
     *
     * @param string $assignee
     *
     * @return \Api\SugarCRMBundle\Service\GetOpportunities\Opportunity
     */
    public function setAssignedUserName($assignee)
    {
        $this->assignedUserName = $assignee;
    
        return $this;
    }
    
    /**
     * Get campaignName value
     * 
     * @return string
     */
    public function getCampaignName()
    {
        return $this->campaignName;
    }
    
    /**
     * Set CampaignName value
     * 
     * @param string $name
     * 
     * @return \Api\SugarCRMBundle\Service\GetOpportunities\Opportunity
     */
    public function setCampaignName($name)
    {
        $this->campaignName = $name;
        
        return $this;
    }

    /**
     * Get leadSource value
     * 
     * @return string
     */
    public function getLeadSource()
    {
        return $this->leadSource;
    }
    
    /**
     * Set lead source value
     * 
     * @param string $leadSource
     * 
     * @return \Api\SugarCRMBundle\Service\GetOpportunities\Opportunity
     */
    public function setLeadSource($leadSource)
    {
        $this->leadSource = $leadSource;
        
        return $this;
    }

    /**
     * Get opportunityType value
     * 
     * @return string
     */
    public function getOpportunityType()
    {
        return $this->opportunityType;
    }
    
    /**
     * Set opportunityType value
     * 
     * @param string $type
     * 
     * @return \Api\SugarCRMBundle\Service\GetOpportunities\Opportunity
     */
    public function setOpportunityType($type)
    {
        $this->opportunityType = $type;
        
        return $this;
    }

    /**
     * Get salesStage value
     * 
     * @return string
     */
    public function getSalesStage()
    {
        return $this->salesStage;
    }
    
    /**
     * Set sales stage value
     * 
     * @param string $id
     * 
     * @return \Api\SugarCRMBundle\Service\GetOpportunities\Opportunity
     */
    public function setSalesStage($stage)
    {
        $this->salesStage = $stage;
        
        return $this;
    }
    
    /**
     * Get typeAffaireC value
     *
     * @return string
     */
    public function getTypeAffaireC()
    {
        return $this->typeAffaireC;
    }
    
    /**
     * Set typeAffaireC stage value
     *
     * @param string $type
     *
     * @return \Api\SugarCRMBundle\Service\GetOpportunities\Opportunity
     */
    public function setTypeAffaireC($type)
    {
        $this->typeAffaireC = $type;
    
        return $this;
    }    
    
    /**
     * Get minutes for the amount
     * 
     * @return number
     */
    public function getMinutes()
    {
        return round($this->amount/500*7*60, 0);
    }
}