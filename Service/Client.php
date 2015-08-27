<?php

namespace Stadline\SugarCRMBundle\Service;

use Academe\SugarRestApi\Api\v4;
use Doctrine\Common\Collections\ArrayCollection;
use Stadline\SugarCRMBundle\Service\GetAccounts\Accounts;
use Stadline\SugarCRMBundle\Service\GetContacts\Contacts;
use Stadline\SugarCRMBundle\Service\GetOpportunities\Opportunities;
use Symfony\Component\Validator\Constraints\Null;

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
    public function getAccounts($query)
    {
        $entries = $this->processGetAccounts($query);

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

        return $this->getEntryList('Accounts',$query, "name ASC", null, array('id', 'name', 'assigned_user_name','id_compte_lundi_matin_c', 'email'));
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
            array('id', 'name', 'assigned_user_name', 'email','id_compte_lundi_matin_c'),
            array("opportunities" => array(
                "id","name","num_lmb_fact_c",'type_affaire_c','campaign_name',"account_name",'date_entered','assigned_user_name',
                'opportunity_type',"currency_id_select","date_closed","amount","lead_source","sales_stage","id_compte_lundi_matin_c"

         )));



            if(count($entries['relationship_list'][0]) > 0 ) {
                return new Opportunities($entries);
            } else {
                return new ArrayCollection();
            }

    }

    public  function  setOpportunities($query)
    {

        $worked = $this->setEntry(
            "Opportunities",
            $query
            );


    }

    public function setAccounts($query)
    {
        $worked = $this->setEntry(
            "Accounts",
            $query
        );


    }
    public function getContacts($query)
    {
        $entries = $this->processGetContacts($query);

        return new Contacts($entries['entry_list']);
    }


    protected function processGetContacts($query)
    {

        return $this->getEntryList('Contacts',$query, "name ASC", null, array('id', 'name','phone_work','phone_mobile','first_name','last_name','account_name'));
    }

}
