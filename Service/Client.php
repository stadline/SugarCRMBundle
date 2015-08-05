<?php

namespace Stadline\SugarCRMBundle\Service;

use Academe\SugarRestApi\Api\v4;
use Stadline\SugarCRMBundle\Service\GetAccounts\Accounts;
use Stadline\SugarCRMBundle\Service\GetOpportunities\Opportunities;

/**
 * Sugar Rest API Client
 * 
 * @author Jérôme Weber <jerome.weber@stadline.com>
 *
 */
class Client extends v4
{
    protected $username;
    protected $password;
    
    /**
     * Constructor
     * 
     * @param string $base_url
     * @param string $username
     * @param string $password
     */
    public function __construct($baseUrl, $username, $password)
    {
        parent::__construct();

        $this->setDomain($baseUrl);
        $this->username = $username;
        $this->password = $password;
        
        $this->login($this->username, $this->password);
    }

    public function login($username = NULL, $password = NULL)
    {
        parent::login($username, $password);
        $this->putSession($this->getSession());
    }
    
    /**
     * Get Accounts
     * 
     * @return Accounts
     */
    public function getAccounts()
    {
        $entries = $this->processGetAccounts(null);
        return new Accounts($entries['entry_list']);
    }
   
    /**
     * Search account by name
     * 
     * @param string $query
     * 
     * @return Accounts
     */
    public function searchAccountsByName($query)
    {
        $entries = $this->processGetAccounts("accounts.name like '".$query."%'");
        return new Accounts($entries['entry_list']);        
    }

    /**
     * Search account by id
     *
     * @param string $query
     *
     * @return Accounts
     */
    public function searchAccountsById($query)
    {
        $entries = $this->processGetAccounts("accounts.id = '$query'");
        return new Accounts($entries['entry_list']);
    }
    
    /**
     * Process get accounts on the api
     * 
     * @param string $query
     * 
     * @return array
     */
    protected function processGetAccounts($query)
    {
        return $this->getEntryList('Accounts', $query, "name ASC", null, array('id', 'name', 'assigned_user_name', 'email'));
    }
    
    /**
     * Get account with opportunities linked
     * 
     * @param string $query
     */
    public function getOpportunities($query)
    {
        $entries = $this->getEntryList(
            'Accounts',
            "accounts.id = '$query'",
            "name ASC",
            null,
            array('id', 'name', 'assigned_user_name', 'email'),
            array("opportunities" => array(
        	   'id', 'name', 'date_entered', 'assigned_user_name', 'opportunity_type', 'campaign_name', 'lead_source', 'amount', 'sales_stage', 'type_affaire_c', 'date_closed'
            ))
         );

        return new Opportunities($entries['relationship_list'][0]['opportunities']);
    }
}
