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

    public function getAccounts($query)
    {
        $account = new Account();
        $account->setId("1");
        $account->setName("Test account");
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
        $opportunity = new Opportunity();
        // Sales Stage = Closed Lost
        if ($query == 1)
        {
            $opportunity->setId("1");
            $opportunity->setName("Test Mock Opportunity");
            $opportunity->setCreatedAt(new \DateTime());
            $opportunity->setAssignedUserName("Test account");
            $opportunity->setOpportunityType("Mock opportunity");
            $opportunity->setCampaignName("Mock test");
            $opportunity->setLeadSource("Mock Lead Source");
            $opportunity->setAmount(10);
            $opportunity->setSalesStage("Closed Lost");
            $opportunity->setTypeAffaireC("Type affaire");
            $opportunity->setidLMB("");
            $opportunity->setnumfact("");
        }
        // Sales Stage = Closed Won
        else if ($query == 2)
        {
            $opportunity->setId("1");
            $opportunity->setName("Test Mock Opportunity");
            $opportunity->setCreatedAt(new \DateTime());
            $opportunity->setAssignedUserName("Test account");
            $opportunity->setOpportunityType("Mock opportunity");
            $opportunity->setCampaignName("Mock test");
            $opportunity->setLeadSource("Mock Lead Source");
            $opportunity->setAmount(10);
            $opportunity->setSalesStage("Closed Won");
            $opportunity->setTypeAffaireC("Type affaire");
            $opportunity->setidLMB("");
            $opportunity->setnumfact("");
        }
        // Num fact != null
        else if ($query = 3)
        {
            $opportunity->setId("1");
            $opportunity->setName("Test Mock Opportunity");
            $opportunity->setCreatedAt(new \DateTime());
            $opportunity->setAssignedUserName("Test account");
            $opportunity->setOpportunityType("Mock opportunity");
            $opportunity->setCampaignName("Mock test");
            $opportunity->setLeadSource("Mock Lead Source");
            $opportunity->setAmount(10);
            $opportunity->setSalesStage("facture");
            $opportunity->setTypeAffaireC("Type affaire");
            $opportunity->setidLMB("");
            $opportunity->setnumfact("1");
        }
        // Sales stages != Closed Lost/Won && numfact = ""
        else if ($query = 4)
        {
            $opportunity->setId("1");
            $opportunity->setName("Test Mock Opportunity");
            $opportunity->setCreatedAt(new \DateTime());
            $opportunity->setAssignedUserName("Test account");
            $opportunity->setOpportunityType("Mock opportunity");
            $opportunity->setCampaignName("Mock test");
            $opportunity->setLeadSource("Mock Lead Source");
            $opportunity->setAmount(10);
            $opportunity->setSalesStage("facture");
            $opportunity->setTypeAffaireC("Type affaire");
            $opportunity->setidLMB("");
            $opportunity->setnumfact("");
        }
        else {
            $opportunity = null;
        }
        return array($opportunity);
    }

    public function setOpportunities($query)
    {
        $opportunity = new Opportunity();
        $opportunity->setName($query["name"]);
        $opportunity->setCreatedAt(new \DateTime());
        $opportunity->setAssignedUserName($query["username"]);
        $opportunity->setOpportunityType($query["opportunity_type"]);
        $opportunity->setCampaignName($query["campaign_name"]);
        $opportunity->setLeadSource($query["lead_source"]);
        $opportunity->setAmount($query["amount"]);
        $opportunity->setSalesStage($query["sales_stage"]);
        $opportunity->setTypeAffaireC($query["affaire_type"]);
        $opportunity->setidLMB($query["idlmb"]);
        $opportunity->setnumfact($query["num_fact"]);
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
}