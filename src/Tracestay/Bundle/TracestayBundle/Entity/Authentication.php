<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Authentication
 *
 * @ORM\Table(name="authentication", indexes={@ORM\Index(name="fk_authentication_authentication_type1_idx", columns={"authenticationTypeId"})})
 * @ORM\Entity
 */
class Authentication
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
     * @var integer
     *
     * @ORM\Column(name="universityId", type="integer", nullable=false)
     */
    private $universityid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bRistrictions", type="boolean", nullable=true)
     */
    private $bristrictions;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bEmailVerification", type="boolean", nullable=true)
     */
    private $bemailverification;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bLDAP", type="boolean", nullable=true)
     */
    private $bldap;

    /**
     * @var string
     *
     * @ORM\Column(name="tLDAPserver", type="string", length=255, nullable=true)
     */
    private $tldapserver;

    /**
     * @var integer
     *
     * @ORM\Column(name="nPortNo", type="integer", nullable=true)
     */
    private $nportno;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bCAS", type="boolean", nullable=true)
     */
    private $bcas;

    /**
     * @var string
     *
     * @ORM\Column(name="tCASserver", type="string", length=255, nullable=true)
     */
    private $tcasserver;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bCASdisablePassiveAuthetication", type="boolean", nullable=true)
     */
    private $bcasdisablepassiveauthetication;

    /**
     * @var boolean
     *
     * @ORM\Column(name="buseSSL", type="boolean", nullable=true)
     */
    private $busessl;

    /**
     * @var string
     *
     * @ORM\Column(name="tUserDNformat", type="string", length=255, nullable=true)
     */
    private $tuserdnformat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bForceAcceptSSLCertificate", type="boolean", nullable=true)
     */
    private $bforceacceptsslcertificate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bHTTPpostAuthentication", type="boolean", nullable=true)
     */
    private $bhttppostauthentication;

    /**
     * @var string
     *
     * @ORM\Column(name="tURL", type="string", length=255, nullable=true)
     */
    private $turl;

    /**
     * @var string
     *
     * @ORM\Column(name="tUserNameVariable", type="string", length=255, nullable=true)
     */
    private $tusernamevariable;

    /**
     * @var string
     *
     * @ORM\Column(name="tPasswordVariable", type="string", length=255, nullable=true)
     */
    private $tpasswordvariable;

    /**
     * @var string
     *
     * @ORM\Column(name="tValidResponse", type="string", length=255, nullable=true)
     */
    private $tvalidresponse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dCreatedAt", type="datetime", nullable=true)
     */
    private $dcreatedat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dUpdatedAt", type="datetime", nullable=true)
     */
    private $dupdatedat;

    /**
     * @var \Authenticationtype
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Authenticationtype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="authenticationTypeId", referencedColumnName="id")
     * })
     */
    private $authenticationtypeid;



    /**
     * Set universityid
     *
     * @param integer $universityid
     * @return Authentication
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
     * Set bristrictions
     *
     * @param boolean $bristrictions
     * @return Authentication
     */
    public function setBristrictions($bristrictions)
    {
        $this->bristrictions = $bristrictions;

        return $this;
    }

    /**
     * Get bristrictions
     *
     * @return boolean 
     */
    public function getBristrictions()
    {
        return $this->bristrictions;
    }

    /**
     * Set bemailverification
     *
     * @param boolean $bemailverification
     * @return Authentication
     */
    public function setBemailverification($bemailverification)
    {
        $this->bemailverification = $bemailverification;

        return $this;
    }

    /**
     * Get bemailverification
     *
     * @return boolean 
     */
    public function getBemailverification()
    {
        return $this->bemailverification;
    }

    /**
     * Set bldap
     *
     * @param boolean $bldap
     * @return Authentication
     */
    public function setBldap($bldap)
    {
        $this->bldap = $bldap;

        return $this;
    }

    /**
     * Get bldap
     *
     * @return boolean 
     */
    public function getBldap()
    {
        return $this->bldap;
    }

    /**
     * Set tldapserver
     *
     * @param string $tldapserver
     * @return Authentication
     */
    public function setTldapserver($tldapserver)
    {
        $this->tldapserver = $tldapserver;

        return $this;
    }

    /**
     * Get tldapserver
     *
     * @return string 
     */
    public function getTldapserver()
    {
        return $this->tldapserver;
    }

    /**
     * Set nportno
     *
     * @param integer $nportno
     * @return Authentication
     */
    public function setNportno($nportno)
    {
        $this->nportno = $nportno;

        return $this;
    }

    /**
     * Get nportno
     *
     * @return integer 
     */
    public function getNportno()
    {
        return $this->nportno;
    }

    /**
     * Set bcas
     *
     * @param boolean $bcas
     * @return Authentication
     */
    public function setBcas($bcas)
    {
        $this->bcas = $bcas;

        return $this;
    }

    /**
     * Get bcas
     *
     * @return boolean 
     */
    public function getBcas()
    {
        return $this->bcas;
    }

    /**
     * Set tcasserver
     *
     * @param string $tcasserver
     * @return Authentication
     */
    public function setTcasserver($tcasserver)
    {
        $this->tcasserver = $tcasserver;

        return $this;
    }

    /**
     * Get tcasserver
     *
     * @return string 
     */
    public function getTcasserver()
    {
        return $this->tcasserver;
    }

    /**
     * Set bcasdisablepassiveauthetication
     *
     * @param boolean $bcasdisablepassiveauthetication
     * @return Authentication
     */
    public function setBcasdisablepassiveauthetication($bcasdisablepassiveauthetication)
    {
        $this->bcasdisablepassiveauthetication = $bcasdisablepassiveauthetication;

        return $this;
    }

    /**
     * Get bcasdisablepassiveauthetication
     *
     * @return boolean 
     */
    public function getBcasdisablepassiveauthetication()
    {
        return $this->bcasdisablepassiveauthetication;
    }

    /**
     * Set busessl
     *
     * @param boolean $busessl
     * @return Authentication
     */
    public function setBusessl($busessl)
    {
        $this->busessl = $busessl;

        return $this;
    }

    /**
     * Get busessl
     *
     * @return boolean 
     */
    public function getBusessl()
    {
        return $this->busessl;
    }

    /**
     * Set tuserdnformat
     *
     * @param string $tuserdnformat
     * @return Authentication
     */
    public function setTuserdnformat($tuserdnformat)
    {
        $this->tuserdnformat = $tuserdnformat;

        return $this;
    }

    /**
     * Get tuserdnformat
     *
     * @return string 
     */
    public function getTuserdnformat()
    {
        return $this->tuserdnformat;
    }

    /**
     * Set bforceacceptsslcertificate
     *
     * @param boolean $bforceacceptsslcertificate
     * @return Authentication
     */
    public function setBforceacceptsslcertificate($bforceacceptsslcertificate)
    {
        $this->bforceacceptsslcertificate = $bforceacceptsslcertificate;

        return $this;
    }

    /**
     * Get bforceacceptsslcertificate
     *
     * @return boolean 
     */
    public function getBforceacceptsslcertificate()
    {
        return $this->bforceacceptsslcertificate;
    }

    /**
     * Set bhttppostauthentication
     *
     * @param boolean $bhttppostauthentication
     * @return Authentication
     */
    public function setBhttppostauthentication($bhttppostauthentication)
    {
        $this->bhttppostauthentication = $bhttppostauthentication;

        return $this;
    }

    /**
     * Get bhttppostauthentication
     *
     * @return boolean 
     */
    public function getBhttppostauthentication()
    {
        return $this->bhttppostauthentication;
    }

    /**
     * Set turl
     *
     * @param string $turl
     * @return Authentication
     */
    public function setTurl($turl)
    {
        $this->turl = $turl;

        return $this;
    }

    /**
     * Get turl
     *
     * @return string 
     */
    public function getTurl()
    {
        return $this->turl;
    }

    /**
     * Set tusernamevariable
     *
     * @param string $tusernamevariable
     * @return Authentication
     */
    public function setTusernamevariable($tusernamevariable)
    {
        $this->tusernamevariable = $tusernamevariable;

        return $this;
    }

    /**
     * Get tusernamevariable
     *
     * @return string 
     */
    public function getTusernamevariable()
    {
        return $this->tusernamevariable;
    }

    /**
     * Set tpasswordvariable
     *
     * @param string $tpasswordvariable
     * @return Authentication
     */
    public function setTpasswordvariable($tpasswordvariable)
    {
        $this->tpasswordvariable = $tpasswordvariable;

        return $this;
    }

    /**
     * Get tpasswordvariable
     *
     * @return string 
     */
    public function getTpasswordvariable()
    {
        return $this->tpasswordvariable;
    }

    /**
     * Set tvalidresponse
     *
     * @param string $tvalidresponse
     * @return Authentication
     */
    public function setTvalidresponse($tvalidresponse)
    {
        $this->tvalidresponse = $tvalidresponse;

        return $this;
    }

    /**
     * Get tvalidresponse
     *
     * @return string 
     */
    public function getTvalidresponse()
    {
        return $this->tvalidresponse;
    }

    /**
     * Set dcreatedat
     *
     * @param \DateTime $dcreatedat
     * @return Authentication
     */
    public function setDcreatedat($dcreatedat)
    {
        $this->dcreatedat = $dcreatedat;

        return $this;
    }

    /**
     * Get dcreatedat
     *
     * @return \DateTime 
     */
    public function getDcreatedat()
    {
        return $this->dcreatedat;
    }

    /**
     * Set dupdatedat
     *
     * @param \DateTime $dupdatedat
     * @return Authentication
     */
    public function setDupdatedat($dupdatedat)
    {
        $this->dupdatedat = $dupdatedat;

        return $this;
    }

    /**
     * Get dupdatedat
     *
     * @return \DateTime 
     */
    public function getDupdatedat()
    {
        return $this->dupdatedat;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Authentication
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
     * Set authenticationtypeid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Authenticationtype $authenticationtypeid
     * @return Authentication
     */
    public function setAuthenticationtypeid(\Tracestay\Bundle\TracestayBundle\Entity\Authenticationtype $authenticationtypeid)
    {
        $this->authenticationtypeid = $authenticationtypeid;

        return $this;
    }

    /**
     * Get authenticationtypeid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Authenticationtype 
     */
    public function getAuthenticationtypeid()
    {
        return $this->authenticationtypeid;
    }
}
