<?php
/**
 * Created by PhpStorm.
 * User: gaetan
 * Date: 1/8/16
 * Time: 3:36 PM
 */

namespace Stadline\SugarCRMBundle\Mock;

use Stadline\SugarCRMBundle\Service\GetAccounts\Account;
use Stadline\SugarCRMBundle\Service\GetContacts\Contact;
use Stadline\SugarCRMBundle\Service\GetOpportunities\Opportunity;

class SugarMock implements SugarMockInterface{

    private $index =1;
    private $opportunities = array();

    public function getAccounts($query)
    {
        $account = new Account();
        $account->setId("1");
        $account->setName("Test Lundi Matin");
        $account->setAssignedAt("Test mock");
        $account->setEmail("test@mail.com");
        $account->setidLMB("");

        return array($account);
    }

    public function searchAccountsByName($query)
    {
        $account = new Account();
        $account->setId("1");
        $account->setName($query);
        $account->setAssignedAt("Test mock");
        $account->setEmail("test@mail.com");
        $account->setidLMB("");
        return array($account);
    }

    public function searchAccountsById($query)
    {
        $account = new Account();
        $account->setId($query);
        $account->setName("Test account");
        $account->setAssignedAt("Test mock");
        $account->setEmail("test@mail.com");
        $account->setidLMB("");
        return array($account);
    }

    public function getOpportunities($query)
    {
        return $this->opportunities;
    }

    public function setOpportunities($query)
    {
        $opportunity = new Opportunity();

        for ($i = 0; $i < count($query); $i++){
            if($query[$i]['name'] == 'id')
            {
                $opportunity->setId($query[$i]['value']);
            }
            if($query[$i]['name'] == 'num_lmb_fact_c')
            {
                $opportunity->setnumfact($query[$i]['value']);
            }
            if($query[$i]['name'] == 'sales_stage')
            {
                $opportunity->setSalesStage($query[$i]['value']);
            }
//            if($query[$i]['name'] == 'pdf_lmb_fact_c')
//            {
//                $opportunity->set($query[$i]['value']);
//            }
        }
    }

    public function setAccounts($query)
    {
        $account = new Account();
        $account->setName($query["name"]);
        $account->setAssignedAt($query["assigned_at"]);
        $account->setEmail($query["email"]);
        $account->setidLMB($query["idlmb"]);
    }

    public function getContacts($query)
    {
        $contact = new Contact();
        $contact->setId("1");
        $contact->setFirstname("Contact Firstname");
        $contact->setGroup("Contact Group");
        $contact->sethomeMobile("0606060606");
        $contact->gethomePhone("0300000000");
        $contact->setWorkMobile("0606060606");
        $contact->setWorkPhone("0300000000");
        return array($contact);
    }

    public function addOpportunity(Opportunity $opportunity)
    {
        $this->opportunities[] = $opportunity;
        return $this->opportunities;
    }
}