<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", uniqueConstraints={@ORM\UniqueConstraint(name="university_id_UNIQUE", columns={"universityId"})})
 * @ORM\Entity
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="universityId", type="integer", nullable=false)
     */
    private $universityid;

    /**
     * @var string
     *
     * @ORM\Column(name="username_canonical", type="string", length=255, nullable=true)
     */
    private $usernameCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="email_canonical", type="string", length=255, nullable=true)
     */
    private $emailCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="tOrganizationName", type="string", length=255, nullable=true)
     */
    private $torganizationname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dJoining", type="date", nullable=true)
     */
    private $djoining;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dRelieving", type="date", nullable=true)
     */
    private $drelieving;

    /**
     * @var string
     *
     * @ORM\Column(name="tphone", type="string", length=15, nullable=true)
     */
    private $tphone;

    /**
     * @var string
     *
     * @ORM\Column(name="tAddressTitle", type="string", length=255, nullable=true)
     */
    private $taddresstitle;

    /**
     * @var string
     *
     * @ORM\Column(name="tStreet1", type="string", length=255, nullable=true)
     */
    private $tstreet1;

    /**
     * @var string
     *
     * @ORM\Column(name="tStreet2", type="string", length=255, nullable=true)
     */
    private $tstreet2;

    /**
     * @var string
     *
     * @ORM\Column(name="tState", type="string", length=255, nullable=true)
     */
    private $tstate;

    /**
     * @var string
     *
     * @ORM\Column(name="tCity", type="string", length=255, nullable=true)
     */
    private $tcity;

    /**
     * @var integer
     *
     * @ORM\Column(name="nCountry", type="integer", nullable=true)
     */
    private $ncountry;

    /**
     * @var string
     *
     * @ORM\Column(name="nZipCode", type="string", length=15, nullable=true)
     */
    private $nzipcode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bNotify", type="boolean", nullable=true)
     */
    private $bnotify;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bDisplayContactDetails", type="boolean", nullable=true)
     */
    private $bdisplaycontactdetails;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=true)
     */
    private $locked;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expired", type="boolean", nullable=true)
     */
    private $expired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expired_at", type="datetime", nullable=true)
     */
    private $expiredAt;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation_token", type="string", length=255, nullable=true)
     */
    private $confirmationToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true)
     */
    private $passwordRequestedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="roles", type="text", nullable=true)
     */
    private $roles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="credentials_expired", type="boolean", nullable=true)
     */
    private $credentialsExpired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="credentials_expired_at", type="datetime", nullable=true)
     */
    private $credentialsExpiredAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;



    /**
     * Set universityid
     *
     * @param integer $universityid
     * @return Client
     */
    public function setUniversityid($universityid)
    {
        $this->universityid = $universityid;

        return $this;
    }

    /**
     * Get universityid
     *
     * @return integer 
     */
    public function getUniversityid()
    {
        return $this->universityid;
    }

    /**
     * Set usernameCanonical
     *
     * @param string $usernameCanonical
     * @return Client
     */
    public function setUsernameCanonical($usernameCanonical)
    {
        $this->usernameCanonical = $usernameCanonical;

        return $this;
    }

    /**
     * Get usernameCanonical
     *
     * @return string 
     */
    public function getUsernameCanonical()
    {
        return $this->usernameCanonical;
    }

    /**
     * Set emailCanonical
     *
     * @param string $emailCanonical
     * @return Client
     */
    public function setEmailCanonical($emailCanonical)
    {
        $this->emailCanonical = $emailCanonical;

        return $this;
    }

    /**
     * Get emailCanonical
     *
     * @return string 
     */
    public function getEmailCanonical()
    {
        return $this->emailCanonical;
    }

    /**
     * Set torganizationname
     *
     * @param string $torganizationname
     * @return Client
     */
    public function setTorganizationname($torganizationname)
    {
        $this->torganizationname = $torganizationname;

        return $this;
    }

    /**
     * Get torganizationname
     *
     * @return string 
     */
    public function getTorganizationname()
    {
        return $this->torganizationname;
    }

    /**
     * Set djoining
     *
     * @param \DateTime $djoining
     * @return Client
     */
    public function setDjoining($djoining)
    {
        $this->djoining = $djoining;

        return $this;
    }

    /**
     * Get djoining
     *
     * @return \DateTime 
     */
    public function getDjoining()
    {
        return $this->djoining;
    }

    /**
     * Set drelieving
     *
     * @param \DateTime $drelieving
     * @return Client
     */
    public function setDrelieving($drelieving)
    {
        $this->drelieving = $drelieving;

        return $this;
    }

    /**
     * Get drelieving
     *
     * @return \DateTime 
     */
    public function getDrelieving()
    {
        return $this->drelieving;
    }

    /**
     * Set tphone
     *
     * @param string $tphone
     * @return Client
     */
    public function setTphone($tphone)
    {
        $this->tphone = $tphone;

        return $this;
    }

    /**
     * Get tphone
     *
     * @return string 
     */
    public function getTphone()
    {
        return $this->tphone;
    }

    /**
     * Set taddresstitle
     *
     * @param string $taddresstitle
     * @return Client
     */
    public function setTaddresstitle($taddresstitle)
    {
        $this->taddresstitle = $taddresstitle;

        return $this;
    }

    /**
     * Get taddresstitle
     *
     * @return string 
     */
    public function getTaddresstitle()
    {
        return $this->taddresstitle;
    }

    /**
     * Set tstreet1
     *
     * @param string $tstreet1
     * @return Client
     */
    public function setTstreet1($tstreet1)
    {
        $this->tstreet1 = $tstreet1;

        return $this;
    }

    /**
     * Get tstreet1
     *
     * @return string 
     */
    public function getTstreet1()
    {
        return $this->tstreet1;
    }

    /**
     * Set tstreet2
     *
     * @param string $tstreet2
     * @return Client
     */
    public function setTstreet2($tstreet2)
    {
        $this->tstreet2 = $tstreet2;

        return $this;
    }

    /**
     * Get tstreet2
     *
     * @return string 
     */
    public function getTstreet2()
    {
        return $this->tstreet2;
    }

    /**
     * Set tstate
     *
     * @param string $tstate
     * @return Client
     */
    public function setTstate($tstate)
    {
        $this->tstate = $tstate;

        return $this;
    }

    /**
     * Get tstate
     *
     * @return string 
     */
    public function getTstate()
    {
        return $this->tstate;
    }

    /**
     * Set tcity
     *
     * @param string $tcity
     * @return Client
     */
    public function setTcity($tcity)
    {
        $this->tcity = $tcity;

        return $this;
    }

    /**
     * Get tcity
     *
     * @return string 
     */
    public function getTcity()
    {
        return $this->tcity;
    }

    /**
     * Set ncountry
     *
     * @param integer $ncountry
     * @return Client
     */
    public function setNcountry($ncountry)
    {
        $this->ncountry = $ncountry;

        return $this;
    }

    /**
     * Get ncountry
     *
     * @return integer 
     */
    public function getNcountry()
    {
        return $this->ncountry;
    }

    /**
     * Set nzipcode
     *
     * @param string $nzipcode
     * @return Client
     */
    public function setNzipcode($nzipcode)
    {
        $this->nzipcode = $nzipcode;

        return $this;
    }

    /**
     * Get nzipcode
     *
     * @return string 
     */
    public function getNzipcode()
    {
        return $this->nzipcode;
    }

    /**
     * Set bnotify
     *
     * @param boolean $bnotify
     * @return Client
     */
    public function setBnotify($bnotify)
    {
        $this->bnotify = $bnotify;

        return $this;
    }

    /**
     * Get bnotify
     *
     * @return boolean 
     */
    public function getBnotify()
    {
        return $this->bnotify;
    }

    /**
     * Set bdisplaycontactdetails
     *
     * @param boolean $bdisplaycontactdetails
     * @return Client
     */
    public function setBdisplaycontactdetails($bdisplaycontactdetails)
    {
        $this->bdisplaycontactdetails = $bdisplaycontactdetails;

        return $this;
    }

    /**
     * Get bdisplaycontactdetails
     *
     * @return boolean 
     */
    public function getBdisplaycontactdetails()
    {
        return $this->bdisplaycontactdetails;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Client
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Client
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     * @return Client
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set locked
     *
     * @param boolean $locked
     * @return Client
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set expired
     *
     * @param boolean $expired
     * @return Client
     */
    public function setExpired($expired)
    {
        $this->expired = $expired;

        return $this;
    }

    /**
     * Get expired
     *
     * @return boolean 
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * Set expiredAt
     *
     * @param \DateTime $expiredAt
     * @return Client
     */
    public function setExpiredAt($expiredAt)
    {
        $this->expiredAt = $expiredAt;

        return $this;
    }

    /**
     * Get expiredAt
     *
     * @return \DateTime 
     */
    public function getExpiredAt()
    {
        return $this->expiredAt;
    }

    /**
     * Set confirmationToken
     *
     * @param string $confirmationToken
     * @return Client
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }

    /**
     * Get confirmationToken
     *
     * @return string 
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * Set passwordRequestedAt
     *
     * @param \DateTime $passwordRequestedAt
     * @return Client
     */
    public function setPasswordRequestedAt($passwordRequestedAt)
    {
        $this->passwordRequestedAt = $passwordRequestedAt;

        return $this;
    }

    /**
     * Get passwordRequestedAt
     *
     * @return \DateTime 
     */
    public function getPasswordRequestedAt()
    {
        return $this->passwordRequestedAt;
    }

    /**
     * Set roles
     *
     * @param string $roles
     * @return Client
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return string 
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set credentialsExpired
     *
     * @param boolean $credentialsExpired
     * @return Client
     */
    public function setCredentialsExpired($credentialsExpired)
    {
        $this->credentialsExpired = $credentialsExpired;

        return $this;
    }

    /**
     * Get credentialsExpired
     *
     * @return boolean 
     */
    public function getCredentialsExpired()
    {
        return $this->credentialsExpired;
    }

    /**
     * Set credentialsExpiredAt
     *
     * @param \DateTime $credentialsExpiredAt
     * @return Client
     */
    public function setCredentialsExpiredAt($credentialsExpiredAt)
    {
        $this->credentialsExpiredAt = $credentialsExpiredAt;

        return $this;
    }

    /**
     * Get credentialsExpiredAt
     *
     * @return \DateTime 
     */
    public function getCredentialsExpiredAt()
    {
        return $this->credentialsExpiredAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Client
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Client
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Client
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Client
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

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
}
