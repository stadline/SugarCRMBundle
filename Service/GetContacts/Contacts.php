<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 26/08/15
 * Time: 10:06
 */



namespace Stadline\SugarCRMBundle\Service\GetContacts;

/**
 * Collection of contacts
 *
 *
 *
 */
class Contacts extends \ArrayObject
{
    public function __construct($arrayAccounts)
    {
        // browse through list
        $collection = array();


        if ($arrayAccounts)
        {
            foreach ($arrayAccounts as $arrayAccount) {
                if(empty($arrayAccount['name_value_list']['account_name']))
                {
                    $arrayAccount['name_value_list']['account_name'] = "";
                }

                $contact = new Contact();

                $contact->setId($arrayAccount['name_value_list']['id']);
                $contact->setGroup($arrayAccount['name_value_list']['account_name']);
                $contact->setFirstname(htmlspecialchars_decode($arrayAccount['name_value_list']['first_name'], ENT_QUOTES));
                $contact->setLastname($arrayAccount['name_value_list']['last_name']);
                $contact->setWorkPhone($arrayAccount['name_value_list']['phone_work']);
                $contact->setWorkMobile($arrayAccount['name_value_list']['phone_mobile']);
                $contact->sethomePhone('');
                $contact->sethomeMobile('');
                $collection[$contact->getId()] = $contact;

            }

            // Sort accounts by name
            usort($collection, function($a, $b)
            {
                return strcmp($a->getFirstname(), $b->getFirstname());
            });
        }

        // build ArrayObject using collection
        return parent::__construct($collection);
    }
}