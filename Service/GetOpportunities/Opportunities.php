<?php

namespace Stadline\SugarCRMBundle\Service\GetOpportunities;


use Stadline\SugarCRMBundle\Service\GetAccounts;
/**
 * Collection of opportunities
 * 
 * @author Jérôme Weber <jerome.weber@stadline.com>
 *
 */

class Opportunities extends \ArrayObject
{
    protected $minutes;
    
    public function __construct($arrayOpportunities)
    {
        // browse through list
        $collection = array();
        $this->minutes = array();



        if ($arrayOpportunities)
        {

            foreach ($arrayOpportunities['relationship_list'][0]['opportunities'] as $arrayOpportunity) {

                $opportunity = new Opportunity();
                
                $opportunity->setId($arrayOpportunity['id']);
                $opportunity->setCreatedAt(new \DateTime($arrayOpportunity['date_entered']));
                $opportunity->setClosedAt(new \DateTime($arrayOpportunity['date_closed']));
                $opportunity->setName($arrayOpportunity['name']);
                $opportunity->setAssignedUserName($arrayOpportunity['assigned_user_name']);
                $opportunity->setOpportunityType($arrayOpportunity['opportunity_type']);
                $opportunity->setCampaignName($arrayOpportunity['campaign_name']);
                $opportunity->setLeadSource($arrayOpportunity['lead_source']);
                $opportunity->setAmount($arrayOpportunity['amount']);
                $opportunity->setSalesStage($arrayOpportunity['sales_stage']);
                $opportunity->setTypeAffaireC($arrayOpportunity['type_affaire_c']);
                $opportunity->setnumfact($arrayOpportunity['num_lmb_fact_c']);
                $opportunity->setidLMB($arrayOpportunities['entry_list'][0]['name_value_list']['id_compte_lundi_matin_c']);
                
                $collection[$opportunity->getId()] = $opportunity;
                
                // Minutes by lead source
                $key = strtolower(substr(str_replace("2004_", "", $opportunity->getLeadSource()), 5));
                
                if (!array_key_exists($key, $this->minutes))
                {
                    $this->minutes[$key] = 0;
                }
                    
           	    $this->minutes[$key] += $opportunity->getMinutes();
            }

            // Sort accounts by name
            usort($collection, function($a, $b)
            {
                return $a->getClosedAt() < $b->getClosedAt();
            });
            
        }
        
        // build ArrayObject using collection
        return parent::__construct($collection);
    }
    
    /**
     * Get minutes for presta Inge
     * 
     * @return number
     */
    public function getMinutesDev()
    {
        return array_key_exists('presta_inge', $this->minutes)?$this->minutes['presta_inge']:0;
    }

    /**
     * Get minutes for external product
     *
     * @return number
     */
    public function getMinutesExternal()
    {
        return array_key_exists('pdt_externe', $this->minutes)?$this->minutes['pdt_externe']:0;
    }

    /**
     * Get minutes for packs
     *
     * @return number
     */
    public function getMinutesSubscriptions()
    {
        return array_key_exists('pack_extraclub', $this->minutes)?$this->minutes['pack_extraclub']:0;
    }
    
    /**
     * Get minutes for maintenance
     *
     * @return number
     */
    public function getMinutesMaintenance()
    {
        return array_key_exists('maintenance', $this->minutes)?$this->minutes['maintenance']:0;
    }


    /**
     * Get minutes for hosting
     *
     * @return number
     */
    public function getMinutesHosting()
    {
        return array_key_exists('hebergement', $this->minutes)?$this->minutes['hebergement']:0;
    }

    /**
     * Get minutes for support
     *
     * @return number
     */
    public function getMinutesHelpDesk()
    {
        return array_key_exists('presta_support', $this->minutes)?$this->minutes['presta_support']:0;
    }

    /**
     * Get minutes
     * 
     * @return array
     */
    public function getMinutes()
    {
        return $this->getMinutes();
    }
}
