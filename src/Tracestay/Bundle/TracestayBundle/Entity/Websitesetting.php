<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Websitesetting
 *
 * @ORM\Table(name="websiteSetting", uniqueConstraints={@ORM\UniqueConstraint(name="universityId_UNIQUE", columns={"universityId"})}, indexes={@ORM\Index(name="fk_website_setting_time_zone1_idx", columns={"timeZoneId"}), @ORM\Index(name="fk_website_setting_hex_value1_idx", columns={"hexValueId"})})
 * @ORM\Entity
 */
class Websitesetting
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
     * @var string
     *
     * @ORM\Column(name="tWebsiteName", type="string", length=255, nullable=true)
     */
    private $twebsitename;

    /**
     * @var string
     *
     * @ORM\Column(name="tTagLine", type="string", length=255, nullable=true)
     */
    private $ttagline;

    /**
     * @var string
     *
     * @ORM\Column(name="tInstitutionName", type="string", length=255, nullable=true)
     */
    private $tinstitutionname;

    /**
     * @var string
     *
     * @ORM\Column(name="tEmailTrackingAddress", type="string", length=255, nullable=true)
     */
    private $temailtrackingaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="tEmail_replyto", type="string", length=255, nullable=true)
     */
    private $temailReplyTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="nCountry", type="integer", nullable=true)
     */
    private $ncountry;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bHTTPS", type="boolean", nullable=true)
     */
    private $bhttps;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bGoogleAnalytics", type="boolean", nullable=true)
     */
    private $bgoogleanalytics;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bWebmasterTools", type="boolean", nullable=true)
     */
    private $bwebmastertools;

    /**
     * @var integer
     *
     * @ORM\Column(name="nWebsitelaguage", type="integer", nullable=true)
     */
    private $nwebsitelaguage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bMailchimp", type="boolean", nullable=true)
     */
    private $bmailchimp;

    /**
     * @var string
     *
     * @ORM\Column(name="tMailchimpAPIkey", type="string", length=255, nullable=true)
     */
    private $tmailchimpapikey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dUpdatedAt", type="datetime", nullable=true)
     */
    private $dupdatedat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dCreatedAt", type="datetime", nullable=true)
     */
    private $dcreatedat;

    /**
     * @var \Timezone
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Timezone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="timeZoneId", referencedColumnName="id")
     * })
     */
    private $timezoneid;

    /**
     * @var \Hexvalue
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Hexvalue")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hexValueId", referencedColumnName="id")
     * })
     */
    private $hexvalueid;



    /**
     * Set universityid
     *
     * @param integer $universityid
     * @return Websitesetting
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
     * Set twebsitename
     *
     * @param string $twebsitename
     * @return Websitesetting
     */
    public function setTwebsitename($twebsitename)
    {
        $this->twebsitename = $twebsitename;

        return $this;
    }

    /**
     * Get twebsitename
     *
     * @return string 
     */
    public function getTwebsitename()
    {
        return $this->twebsitename;
    }

    /**
     * Set ttagline
     *
     * @param string $ttagline
     * @return Websitesetting
     */
    public function setTtagline($ttagline)
    {
        $this->ttagline = $ttagline;

        return $this;
    }

    /**
     * Get ttagline
     *
     * @return string 
     */
    public function getTtagline()
    {
        return $this->ttagline;
    }

    /**
     * Set tinstitutionname
     *
     * @param string $tinstitutionname
     * @return Websitesetting
     */
    public function setTinstitutionname($tinstitutionname)
    {
        $this->tinstitutionname = $tinstitutionname;

        return $this;
    }

    /**
     * Get tinstitutionname
     *
     * @return string 
     */
    public function getTinstitutionname()
    {
        return $this->tinstitutionname;
    }

    /**
     * Set temailtrackingaddress
     *
     * @param string $temailtrackingaddress
     * @return Websitesetting
     */
    public function setTemailtrackingaddress($temailtrackingaddress)
    {
        $this->temailtrackingaddress = $temailtrackingaddress;

        return $this;
    }

    /**
     * Get temailtrackingaddress
     *
     * @return string 
     */
    public function getTemailtrackingaddress()
    {
        return $this->temailtrackingaddress;
    }

    /**
     * Set temailReplyTo
     *
     * @param string $temailReplyTo
     * @return Websitesetting
     */
    public function setTemailReplyTo($temailReplyTo)
    {
        $this->temailReplyTo = $temailReplyTo;

        return $this;
    }

    /**
     * Get temailReplyTo
     *
     * @return string 
     */
    public function getTemailReplyTo()
    {
        return $this->temailReplyTo;
    }

    /**
     * Set ncountry
     *
     * @param integer $ncountry
     * @return Websitesetting
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
     * Set bhttps
     *
     * @param boolean $bhttps
     * @return Websitesetting
     */
    public function setBhttps($bhttps)
    {
        $this->bhttps = $bhttps;

        return $this;
    }

    /**
     * Get bhttps
     *
     * @return boolean 
     */
    public function getBhttps()
    {
        return $this->bhttps;
    }

    /**
     * Set bgoogleanalytics
     *
     * @param boolean $bgoogleanalytics
     * @return Websitesetting
     */
    public function setBgoogleanalytics($bgoogleanalytics)
    {
        $this->bgoogleanalytics = $bgoogleanalytics;

        return $this;
    }

    /**
     * Get bgoogleanalytics
     *
     * @return boolean 
     */
    public function getBgoogleanalytics()
    {
        return $this->bgoogleanalytics;
    }

    /**
     * Set bwebmastertools
     *
     * @param boolean $bwebmastertools
     * @return Websitesetting
     */
    public function setBwebmastertools($bwebmastertools)
    {
        $this->bwebmastertools = $bwebmastertools;

        return $this;
    }

    /**
     * Get bwebmastertools
     *
     * @return boolean 
     */
    public function getBwebmastertools()
    {
        return $this->bwebmastertools;
    }

    /**
     * Set nwebsitelaguage
     *
     * @param integer $nwebsitelaguage
     * @return Websitesetting
     */
    public function setNwebsitelaguage($nwebsitelaguage)
    {
        $this->nwebsitelaguage = $nwebsitelaguage;

        return $this;
    }

    /**
     * Get nwebsitelaguage
     *
     * @return integer 
     */
    public function getNwebsitelaguage()
    {
        return $this->nwebsitelaguage;
    }

    /**
     * Set bmailchimp
     *
     * @param boolean $bmailchimp
     * @return Websitesetting
     */
    public function setBmailchimp($bmailchimp)
    {
        $this->bmailchimp = $bmailchimp;

        return $this;
    }

    /**
     * Get bmailchimp
     *
     * @return boolean 
     */
    public function getBmailchimp()
    {
        return $this->bmailchimp;
    }

    /**
     * Set tmailchimpapikey
     *
     * @param string $tmailchimpapikey
     * @return Websitesetting
     */
    public function setTmailchimpapikey($tmailchimpapikey)
    {
        $this->tmailchimpapikey = $tmailchimpapikey;

        return $this;
    }

    /**
     * Get tmailchimpapikey
     *
     * @return string 
     */
    public function getTmailchimpapikey()
    {
        return $this->tmailchimpapikey;
    }

    /**
     * Set dupdatedat
     *
     * @param \DateTime $dupdatedat
     * @return Websitesetting
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
     * Set dcreatedat
     *
     * @param \DateTime $dcreatedat
     * @return Websitesetting
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
     * Set id
     *
     * @param integer $id
     * @return Websitesetting
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
     * Set hexvalueid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Hexvalue $hexvalueid
     * @return Websitesetting
     */
    public function setHexvalueid(\Tracestay\Bundle\TracestayBundle\Entity\Hexvalue $hexvalueid)
    {
        $this->hexvalueid = $hexvalueid;

        return $this;
    }

    /**
     * Get hexvalueid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Hexvalue 
     */
    public function getHexvalueid()
    {
        return $this->hexvalueid;
    }

    /**
     * Set timezoneid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Timezone $timezoneid
     * @return Websitesetting
     */
    public function setTimezoneid(\Tracestay\Bundle\TracestayBundle\Entity\Timezone $timezoneid)
    {
        $this->timezoneid = $timezoneid;

        return $this;
    }

    /**
     * Get timezoneid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Timezone 
     */
    public function getTimezoneid()
    {
        return $this->timezoneid;
    }
}
