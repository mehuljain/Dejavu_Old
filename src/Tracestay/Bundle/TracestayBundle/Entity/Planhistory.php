<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planhistory
 *
 * @ORM\Table(name="planHistory", indexes={@ORM\Index(name="fk_planHistory_university_idx", columns={"universityId"}), @ORM\Index(name="fk_planHistory_currencyCode1_idx", columns={"currencyCodeId"})})
 * @ORM\Entity
 */
class Planhistory
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
     * @ORM\Column(name="nListingName", type="integer", nullable=true)
     */
    private $nlistingname;

    /**
     * @var integer
     *
     * @ORM\Column(name="nAdminAccounts", type="integer", nullable=true)
     */
    private $nadminaccounts;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bEmailSupport", type="boolean", nullable=true)
     */
    private $bemailsupport;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bPhoneSupport", type="boolean", nullable=true)
     */
    private $bphonesupport;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bMailouts", type="boolean", nullable=true)
     */
    private $bmailouts;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bSSLsetup", type="boolean", nullable=true)
     */
    private $bsslsetup;

    /**
     * @var integer
     *
     * @ORM\Column(name="nCountry", type="integer", nullable=true)
     */
    private $ncountry;

    /**
     * @var string
     *
     * @ORM\Column(name="tAdditionalNotes", type="text", nullable=true)
     */
    private $tadditionalnotes;

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
     * @var \Currencycode
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Currencycode")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currencyCodeId", referencedColumnName="id")
     * })
     */
    private $currencycodeid;



    /**
     * Set nlistingname
     *
     * @param integer $nlistingname
     * @return Planhistory
     */
    public function setNlistingname($nlistingname)
    {
        $this->nlistingname = $nlistingname;

        return $this;
    }

    /**
     * Get nlistingname
     *
     * @return integer 
     */
    public function getNlistingname()
    {
        return $this->nlistingname;
    }

    /**
     * Set nadminaccounts
     *
     * @param integer $nadminaccounts
     * @return Planhistory
     */
    public function setNadminaccounts($nadminaccounts)
    {
        $this->nadminaccounts = $nadminaccounts;

        return $this;
    }

    /**
     * Get nadminaccounts
     *
     * @return integer 
     */
    public function getNadminaccounts()
    {
        return $this->nadminaccounts;
    }

    /**
     * Set bemailsupport
     *
     * @param boolean $bemailsupport
     * @return Planhistory
     */
    public function setBemailsupport($bemailsupport)
    {
        $this->bemailsupport = $bemailsupport;

        return $this;
    }

    /**
     * Get bemailsupport
     *
     * @return boolean 
     */
    public function getBemailsupport()
    {
        return $this->bemailsupport;
    }

    /**
     * Set bphonesupport
     *
     * @param boolean $bphonesupport
     * @return Planhistory
     */
    public function setBphonesupport($bphonesupport)
    {
        $this->bphonesupport = $bphonesupport;

        return $this;
    }

    /**
     * Get bphonesupport
     *
     * @return boolean 
     */
    public function getBphonesupport()
    {
        return $this->bphonesupport;
    }

    /**
     * Set bmailouts
     *
     * @param boolean $bmailouts
     * @return Planhistory
     */
    public function setBmailouts($bmailouts)
    {
        $this->bmailouts = $bmailouts;

        return $this;
    }

    /**
     * Get bmailouts
     *
     * @return boolean 
     */
    public function getBmailouts()
    {
        return $this->bmailouts;
    }

    /**
     * Set bsslsetup
     *
     * @param boolean $bsslsetup
     * @return Planhistory
     */
    public function setBsslsetup($bsslsetup)
    {
        $this->bsslsetup = $bsslsetup;

        return $this;
    }

    /**
     * Get bsslsetup
     *
     * @return boolean 
     */
    public function getBsslsetup()
    {
        return $this->bsslsetup;
    }

    /**
     * Set ncountry
     *
     * @param integer $ncountry
     * @return Planhistory
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
     * Set tadditionalnotes
     *
     * @param string $tadditionalnotes
     * @return Planhistory
     */
    public function setTadditionalnotes($tadditionalnotes)
    {
        $this->tadditionalnotes = $tadditionalnotes;

        return $this;
    }

    /**
     * Get tadditionalnotes
     *
     * @return string 
     */
    public function getTadditionalnotes()
    {
        return $this->tadditionalnotes;
    }

    /**
     * Set dcreatedat
     *
     * @param \DateTime $dcreatedat
     * @return Planhistory
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
     * @return Planhistory
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
     * @return Planhistory
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
     * Set currencycodeid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Currencycode $currencycodeid
     * @return Planhistory
     */
    public function setCurrencycodeid(\Tracestay\Bundle\TracestayBundle\Entity\Currencycode $currencycodeid)
    {
        $this->currencycodeid = $currencycodeid;

        return $this;
    }

    /**
     * Get currencycodeid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Currencycode 
     */
    public function getCurrencycodeid()
    {
        return $this->currencycodeid;
    }

    /**
     * Set universityid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\University $universityid
     * @return Planhistory
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
