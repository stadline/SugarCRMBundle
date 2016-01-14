<?php
/**
 * Created by PhpStorm.
 * User: gaetan
 * Date: 1/8/16
 * Time: 3:36 PM
 */

namespace Stadline\SugarCRMBundle\Mock;


interface SugarMockInterface {
    public function getAccounts($query);
    public function searchAccountsByName($query);
    public function searchAccountsById($query);
    public function getOpportunities($query);
    public function setOpportunities($query);
    public function setAccounts($query);
    public function getContacts($query);
} 