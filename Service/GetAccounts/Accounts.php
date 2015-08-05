<?php

namespace Stadline\SugarCRMBundle\Service\GetAccounts;

/**
 * Collection of accounts
 * 
 * @author Jérôme Weber <jerome.weber@stadline.com>
 *
 */
class Accounts extends \ArrayObject
{
    public function __construct($arrayAccounts)
    {
        // browse through list
        $collection = array();

        if ($arrayAccounts)
        {
            foreach ($arrayAccounts as $arrayAccount) {
                
                $account = new Account();
                
                $account->setId($arrayAccount['name_value_list']['id']);
                $account->setName(htmlspecialchars_decode($arrayAccount['name_value_list']['name'], ENT_QUOTES));
                $account->setAssignedAt($arrayAccount['name_value_list']['assigned_user_name']);
                $collection[$account->getId()] = $account;
            }
            
            // Sort accounts by name
            usort($collection, function($a, $b)
            {
                return strcmp($a->getName(), $b->getName());
            });
        }
        
        // build ArrayObject using collection
        return parent::__construct($collection);
    }
}
