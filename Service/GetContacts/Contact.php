<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 26/08/15
 * Time: 09:45
 */



namespace Stadline\SugarCRMBundle\Service\GetContacts;

/**
 * Contact
 *
 *
 */
class Contact
{
    protected $id;
    protected $group;
    protected $Firstname;
    protected $Lastname;
    protected $WorkPhone;
    protected $WorkMobile;
    protected $homePhone;
    protected $homeMobile;

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
     * @return Contact
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Group value
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set Group value
     *
     * @param string $group
     *
     * @return Contact
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get Firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->Firstname;
    }

    /**
     * Set Firstname value
     *
     * @param string $Firstname
     *
     * @return Contact
     */
    public function setFirstname($Firstname)
    {
        $this->Firstname = $Firstname;

        return $this;
    }

    /**
     * Get Lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->Lastname;
    }

    /**
     * Set Lastname value
     *
     * @param string $Lastname
     *
     * @return Contact
     */
    public function setLastname($Lastname)
    {
        $this->Lastname = $Lastname;

        return $this;
    }

    /**
     * Get WorkPhone value
     *
     * @return string
     */
    public function getWorkPhone()
    {
        return $this->WorkPhone;
    }

    /**
     * Set WorkPhone value
     *
     * @param string $WorkPhone
     *
     * @return Contact
     */
    public function setWorkPhone($WorkPhone)
    {
        $this->WorkPhone = $WorkPhone;

        return $this;
    }

    /**
     * Get WorkMobile value
     *
     * @return string
     */
    public function getWorkMobile()
    {
        return $this->WorkMobile;
    }

    /**
     * Set WorkMobile value
     *
     * @param string $WorkMobile
     *
     * @return Contact
     */
    public function setWorkMobile($WorkMobile)
    {
        $this->WorkMobile = $WorkMobile;

        return $this;
    }

    /**
     * Get homePhone value
     *
     * @return string
     */
    public function gethomePhone()
    {
        return $this->homePhone;
    }

    /**
     * Set homePhone value
     *
     * @param string $homePhone
     *
     * @return Contact
     */
    public function sethomePhone($homePhone)
    {
        $this->homePhone = $homePhone;

        return $this;
    }

    /**
     * Get homeMobile value
     *
     * @return string
     */
    public function gethomeMobile()
    {
        return $this->homeMobile;
    }

    /**
     * Set homeMobile value
     *
     * @param string $homeMobile
     *
     * @return Contact
     */
    public function sethomeMobile($homeMobile)
    {
        $this->homeMobile = $homeMobile;

        return $this;
    }

}