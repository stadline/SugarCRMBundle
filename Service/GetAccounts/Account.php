<?php

namespace Stadline\SugarCRMBundle\Service\GetAccounts;

/**
 * Account
 * 
 * @author Jérôme Weber <jerome.weber@stadline.com>
 *
 */
class Account
{
    protected $id;
    protected $name;
    protected $assignedAt;
    protected $email;

    /**
     * Get string value
     * 
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set id value
     * 
     * @param string $id
     * 
     * @return Account
     */
    public function setId($id)
    {
        $this->id = $id;
        
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
    * @return Account
    */
    public function setName($name)
    {
        $this->name = $name;
       
        return $this;
    }

    /**
     * Get who's assigned to the account
     *
     * @return string
     */
    public function getAssignedAt()
    {
        return $this->assignedAt;
    }
    
    /**
     * Set assignedAt name value
     *
     * @param string $name
     *
     * @return Account
     */
    public function setAssignedAt($name)
    {
        $this->assignedAt = $name;
         
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Set Email name value
     *
     * @param string $email
     *
     * @return Account
     */
    public function setEmail($email)
    {
        $this->email = $email;
         
        return $this;
    }    
    
}