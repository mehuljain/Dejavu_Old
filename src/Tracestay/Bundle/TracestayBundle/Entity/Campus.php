<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campus
 *
 * @ORM\Table(name="campus", uniqueConstraints={@ORM\UniqueConstraint(name="university_id_UNIQUE", columns={"universityId"})})
 * @ORM\Entity
 */
class Campus
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
     * @var string
     *
     * @ORM\Column(name="tTitle", type="string", length=255, nullable=true)
     */
    private $ttitle;

    /**
     * @var string
     *
     * @ORM\Column(name="tDescription", type="text", nullable=true)
     */
    private $tdescription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bIsMain", type="boolean", nullable=true)
     */
    private $bismain;

    /**
     * @var string
     *
     * @ORM\Column(name="tCampusCode", type="string", length=20, nullable=true)
     */
    private $tcampuscode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dEstablishmentYear", type="date", nullable=true)
     */
    private $destablishmentyear;

    /**
     * @var string
     *
     * @ORM\Column(name="tAddressTitle", type="string", length=225, nullable=true)
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
     * @ORM\Column(name="tCity", type="string", length=255, nullable=true)
     */
    private $tcity;

    /**
     * @var string
     *
     * @ORM\Column(name="tState", type="string", length=255, nullable=true)
     */
    private $tstate;

    /**
     * @var integer
     *
     * @ORM\Column(name="nCountry", type="integer", nullable=true)
     */
    private $ncountry;

    /**
     * @var string
     *
     * @ORM\Column(name="tZipCode", type="string", length=15, nullable=true)
     */
    private $tzipcode;

    /**
     * @var float
     *
     * @ORM\Column(name="nLatitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $nlatitude;

    /**
     * @var float
     *
     * @ORM\Column(name="nLongitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $nlongitude;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dCreatedAt", type="date", nullable=true)
     */
    private $dcreatedat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dUpdatedAt", type="date", nullable=true)
     */
    private $dupdatedat;



    /**
     * Set universityid
     *
     * @param integer $universityid
     * @return Campus
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
     * Set ttitle
     *
     * @param string $ttitle
     * @return Campus
     */
    public function setTtitle($ttitle)
    {
        $this->ttitle = $ttitle;

        return $this;
    }

    /**
     * Get ttitle
     *
     * @return string 
     */
    public function getTtitle()
    {
        return $this->ttitle;
    }

    /**
     * Set tdescription
     *
     * @param string $tdescription
     * @return Campus
     */
    public function setTdescription($tdescription)
    {
        $this->tdescription = $tdescription;

        return $this;
    }

    /**
     * Get tdescription
     *
     * @return string 
     */
    public function getTdescription()
    {
        return $this->tdescription;
    }

    /**
     * Set bismain
     *
     * @param boolean $bismain
     * @return Campus
     */
    public function setBismain($bismain)
    {
        $this->bismain = $bismain;

        return $this;
    }

    /**
     * Get bismain
     *
     * @return boolean 
     */
    public function getBismain()
    {
        return $this->bismain;
    }

    /**
     * Set tcampuscode
     *
     * @param string $tcampuscode
     * @return Campus
     */
    public function setTcampuscode($tcampuscode)
    {
        $this->tcampuscode = $tcampuscode;

        return $this;
    }

    /**
     * Get tcampuscode
     *
     * @return string 
     */
    public function getTcampuscode()
    {
        return $this->tcampuscode;
    }

    /**
     * Set destablishmentyear
     *
     * @param \DateTime $destablishmentyear
     * @return Campus
     */
    public function setDestablishmentyear($destablishmentyear)
    {
        $this->destablishmentyear = $destablishmentyear;

        return $this;
    }

    /**
     * Get destablishmentyear
     *
     * @return \DateTime 
     */
    public function getDestablishmentyear()
    {
        return $this->destablishmentyear;
    }

    /**
     * Set taddresstitle
     *
     * @param string $taddresstitle
     * @return Campus
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
     * @return Campus
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
     * @return Campus
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
     * Set tcity
     *
     * @param string $tcity
     * @return Campus
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
     * Set tstate
     *
     * @param string $tstate
     * @return Campus
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
     * Set ncountry
     *
     * @param integer $ncountry
     * @return Campus
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
     * Set tzipcode
     *
     * @param string $tzipcode
     * @return Campus
     */
    public function setTzipcode($tzipcode)
    {
        $this->tzipcode = $tzipcode;

        return $this;
    }

    /**
     * Get tzipcode
     *
     * @return string 
     */
    public function getTzipcode()
    {
        return $this->tzipcode;
    }

    /**
     * Set nlatitude
     *
     * @param float $nlatitude
     * @return Campus
     */
    public function setNlatitude($nlatitude)
    {
        $this->nlatitude = $nlatitude;

        return $this;
    }

    /**
     * Get nlatitude
     *
     * @return float 
     */
    public function getNlatitude()
    {
        return $this->nlatitude;
    }

    /**
     * Set nlongitude
     *
     * @param float $nlongitude
     * @return Campus
     */
    public function setNlongitude($nlongitude)
    {
        $this->nlongitude = $nlongitude;

        return $this;
    }

    /**
     * Get nlongitude
     *
     * @return float 
     */
    public function getNlongitude()
    {
        return $this->nlongitude;
    }

    /**
     * Set dcreatedat
     *
     * @param \DateTime $dcreatedat
     * @return Campus
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
     * @return Campus
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
