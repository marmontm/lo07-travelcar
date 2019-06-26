<?php

require_once 'SModel.php';

class modelUser
{
    private $_login, $role, $secret, $email, $surname, $firstname, $birthdate, $country, $numDrivingLicence;

    public function __construct($_login = NULL, $role = NULL, $secret = NULL, $email = NULL, $surname = NULL, $firstname = NULL, $birthdate = NULL, $country = NULL, $numDrivingLicence = NULL)
    {
        if(!is_null($_login)) {
            $this->_login = $_login;
            $this->role = $role;
            $this->secret = $secret;
            $this->email = $email;
            $this->surname = $surname;
            $this->firstname = $firstname;
            $this->birthdate = $birthdate;
            $this->country = $country;
            $this->numDrivingLicence = $numDrivingLicence;
        }
    }

    /**
     * @param null $login
     */
    public function setLogin($login): void
    {
        $this->_login = $login;
    }

    /**
     * @return null
     */
    public function getLogin()
    {
        return $this->_login;
    }

    /**
     * @param null $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }

    /**
     * @return null
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param null $secret
     */
    public function setSecret($secret): void
    {
        $this->secret = $secret;
    }

    /**
     * @return null
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param null $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $surname
     */
    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return null
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param null $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return null
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param null $birthdate
     */
    public function setBirthdate($birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return null
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param null $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @return null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param null $numDrivingLicence
     */
    public function setNumDrivingLicence($numDrivingLicence): void
    {
        $this->numDrivingLicence = $numDrivingLicence;
    }

    /**
     * @return null
     */
    public function getNumDrivingLicence()
    {
        return $this->numDrivingLicence;
    }

    public function __toString()
    {
        return $this->_login;
    }
}