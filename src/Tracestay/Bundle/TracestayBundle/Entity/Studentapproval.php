<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Studentapproval
 *
 * @ORM\Table(name="studentApproval")
 * @ORM\Entity
 */
class Studentapproval
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @ORM\Column(name="bRestrictions", type="boolean", nullable=true)
     */
    private $brestrictions;

    /**
     * @var integer
     *
     * @ORM\Column(name="nExpirationInMonths", type="integer", nullable=true)
     */
    private $nexpirationinmonths;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bHTTPverification", type="boolean", nullable=true)
     */
    private $bhttpverification;

    /**
     * @var string
     *
     * @ORM\Column(name="tURL", type="string", length=255, nullable=true)
     */
    private $turl;

    /**
     * @var string
     *
     * @ORM\Column(name="tUsernameLable", type="string", length=255, nullable=true)
     */
    private $tusernamelable;

    /**
     * @var string
     *
     * @ORM\Column(name="tPostUsernameAs", type="string", length=255, nullable=true)
     */
    private $tpostusernameas;

    /**
     * @var string
     *
     * @ORM\Column(name="tPasswordLabel", type="string", length=255, nullable=true)
     */
    private $tpasswordlabel;

    /**
     * @var string
     *
     * @ORM\Column(name="tPostPasswordAs", type="string", length=255, nullable=true)
     */
    private $tpostpasswordas;

    /**
     * @var string
     *
     * @ORM\Column(name="tValidResponse", type="string", length=255, nullable=true)
     */
    private $tvalidresponse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bOfferPersonalinfo", type="boolean", nullable=true)
     */
    private $bofferpersonalinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="tStudentType", type="string", length=255, nullable=true)
     */
    private $tstudenttype;

    /**
     * @var string
     *
     * @ORM\Column(name="tStudentId", type="string", length=255, nullable=true)
     */
    private $tstudentid;

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
     * Set universityid
     *
     * @param integer $universityid
     * @return Studentapproval
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
     * Set brestrictions
     *
     * @param boolean $brestrictions
     * @return Studentapproval
     */
    public function setBrestrictions($brestrictions)
    {
        $this->brestrictions = $brestrictions;

        return $this;
    }

    /**
     * Get brestrictions
     *
     * @return boolean 
     */
    public function getBrestrictions()
    {
        return $this->brestrictions;
    }

    /**
     * Set nexpirationinmonths
     *
     * @param integer $nexpirationinmonths
     * @return Studentapproval
     */
    public function setNexpirationinmonths($nexpirationinmonths)
    {
        $this->nexpirationinmonths = $nexpirationinmonths;

        return $this;
    }

    /**
     * Get nexpirationinmonths
     *
     * @return integer 
     */
    public function getNexpirationinmonths()
    {
        return $this->nexpirationinmonths;
    }

    /**
     * Set bhttpverification
     *
     * @param boolean $bhttpverification
     * @return Studentapproval
     */
    public function setBhttpverification($bhttpverification)
    {
        $this->bhttpverification = $bhttpverification;

        return $this;
    }

    /**
     * Get bhttpverification
     *
     * @return boolean 
     */
    public function getBhttpverification()
    {
        return $this->bhttpverification;
    }

    /**
     * Set turl
     *
     * @param string $turl
     * @return Studentapproval
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
     * Set tusernamelable
     *
     * @param string $tusernamelable
     * @return Studentapproval
     */
    public function setTusernamelable($tusernamelable)
    {
        $this->tusernamelable = $tusernamelable;

        return $this;
    }

    /**
     * Get tusernamelable
     *
     * @return string 
     */
    public function getTusernamelable()
    {
        return $this->tusernamelable;
    }

    /**
     * Set tpostusernameas
     *
     * @param string $tpostusernameas
     * @return Studentapproval
     */
    public function setTpostusernameas($tpostusernameas)
    {
        $this->tpostusernameas = $tpostusernameas;

        return $this;
    }

    /**
     * Get tpostusernameas
     *
     * @return string 
     */
    public function getTpostusernameas()
    {
        return $this->tpostusernameas;
    }

    /**
     * Set tpasswordlabel
     *
     * @param string $tpasswordlabel
     * @return Studentapproval
     */
    public function setTpasswordlabel($tpasswordlabel)
    {
        $this->tpasswordlabel = $tpasswordlabel;

        return $this;
    }

    /**
     * Get tpasswordlabel
     *
     * @return string 
     */
    public function getTpasswordlabel()
    {
        return $this->tpasswordlabel;
    }

    /**
     * Set tpostpasswordas
     *
     * @param string $tpostpasswordas
     * @return Studentapproval
     */
    public function setTpostpasswordas($tpostpasswordas)
    {
        $this->tpostpasswordas = $tpostpasswordas;

        return $this;
    }

    /**
     * Get tpostpasswordas
     *
     * @return string 
     */
    public function getTpostpasswordas()
    {
        return $this->tpostpasswordas;
    }

    /**
     * Set tvalidresponse
     *
     * @param string $tvalidresponse
     * @return Studentapproval
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
     * Set bofferpersonalinfo
     *
     * @param boolean $bofferpersonalinfo
     * @return Studentapproval
     */
    public function setBofferpersonalinfo($bofferpersonalinfo)
    {
        $this->bofferpersonalinfo = $bofferpersonalinfo;

        return $this;
    }

    /**
     * Get bofferpersonalinfo
     *
     * @return boolean 
     */
    public function getBofferpersonalinfo()
    {
        return $this->bofferpersonalinfo;
    }

    /**
     * Set tstudenttype
     *
     * @param string $tstudenttype
     * @return Studentapproval
     */
    public function setTstudenttype($tstudenttype)
    {
        $this->tstudenttype = $tstudenttype;

        return $this;
    }

    /**
     * Get tstudenttype
     *
     * @return string 
     */
    public function getTstudenttype()
    {
        return $this->tstudenttype;
    }

    /**
     * Set tstudentid
     *
     * @param string $tstudentid
     * @return Studentapproval
     */
    public function setTstudentid($tstudentid)
    {
        $this->tstudentid = $tstudentid;

        return $this;
    }

    /**
     * Get tstudentid
     *
     * @return string 
     */
    public function getTstudentid()
    {
        return $this->tstudentid;
    }

    /**
     * Set dcreatedat
     *
     * @param \DateTime $dcreatedat
     * @return Studentapproval
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
     * @return Studentapproval
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
