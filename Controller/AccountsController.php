<?php

namespace Stadline\SugarCRMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AccountsController extends Controller
{
    public function listAction()
    {
        $api = $this->get('api_sugar_crm_client');

        $accounts = null;
        
        if ($this->getRequest()->get('name'))
        {
            $accounts = $api->searchAccountsByName($this->getRequest()->get('name'));
        }
        elseif ($this->getRequest()->get('id'))
        {
            $accounts = $api->searchAccountsById($this->getRequest()->get('id'));        
        }
        
        $jsonArray = array();
        
        if ($accounts)
        foreach ($accounts as $account)
        {
            $jsonArray[] = array("id" => $account->getId(), "text" => $account->getName());
        }
        
        return new JsonResponse($jsonArray);        
    }
}
