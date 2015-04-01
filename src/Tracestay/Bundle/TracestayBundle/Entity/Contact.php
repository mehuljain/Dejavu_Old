<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact", indexes={@ORM\Index(name="fk_contactPerson_university1_idx", columns={"universityId"})})
 * @ORM\Entity
 */
class Contact
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
     * @ORM\Column(name="tFirstName", type="string", length=255, nullable=true)
     */
    private $tfirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="tLastName", type="string", length=255, nullable=true)
     */
    private $tlastname;

    /**
     * @var string
     *
     * @ORM\Column(name="tEmail", type="string", length=255, nullable=true)
     */
    private $temail;

    /**
     * @var string
     *
     * @ORM\Column(name="tPhone", type="string", length=15, nullable=true)
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
     * @ORM\Column(name="nZipCode", type="bigint", nullable=true)
     */
    private $nzipcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="nCountry", type="integer", nullable=true)
     */
    private $ncountry;

    /**
     * @var string
     *
     * @ORM\Column(name="tSSN", type="string", length=255, nullable=true)
     */
    private $tssn;

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
     * @var \University
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="University")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="universityId", referencedColumnName="id")
     * })
     */
    private $universityid;



    /**
     * Set tfirstname
     *
     * @param string $tfirstname
     * @return Contact
     */
    public function setTfirstname($tfirstname)
    {
        $this->tfirstname = $tfirstname;

        return $this;
    }

    /**
     * Get tfirstname
     *
     * @return string 
     */
    public function getTfirstname()
    {
        return $this->tfirstname;
    }

    /**
     * Set tlastname
     *
     * @param string $tlastname
     * @return Contact
     */
    public function setTlastname($tlastname)
    {
        $this->tlastname = $tlastname;

        return $this;
    }

    /**
     * Get tlastname
     *
     * @return string 
     */
    public function getTlastname()
    {
        return $this->tlastname;
    }

    /**
     * Set temail
     *
     * @param string $temail
     * @return Contact
     */
    public function setTemail($temail)
    {
        $this->temail = $temail;

        return $this;
    }

    /**
     * Get temail
     *
     * @return string 
     */
    public function getTemail()
    {
        return $this->temail;
    }

    /**
     * Set tphone
     *
     * @param string $tphone
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * Set nzipcode
     *
     * @param integer $nzipcode
     * @return Contact
     */
    public function setNzipcode($nzipcode)
    {
        $this->nzipcode = $nzipcode;

        return $this;
    }

    /**
     * Get nzipcode
     *
     * @return integer 
     */
    public function getNzipcode()
    {
        return $this->nzipcode;
    }

    /**
     * Set ncountry
     *
     * @param integer $ncountry
     * @return Contact
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
     * Set tssn
     *
     * @param string $tssn
     * @return Contact
     */
    public function setTssn($tssn)
    {
        $this->tssn = $tssn;

        return $this;
    }

    /**
     * Get tssn
     *
     * @return string 
     */
    public function getTssn()
    {
        return $this->tssn;
    }

    /**
     * Set dcreatedat
     *
     * @param \DateTime $dcreatedat
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * Set universityid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\University $universityid
     * @return Contact
     */
    public function setUniversityid(\Tracestay\Bundle\TracestayBundle\Entity\University $universityid)
    {
        $this->universityid = $universityid;

        return $this;
    }

    /**
     * Get universityid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\University 
     */
    public function getUniversityid()
    {
        return $this->universityid;
    }
}
