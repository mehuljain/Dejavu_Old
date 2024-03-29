<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-05-12 15:16:44.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */
namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\WebsiteSetting
 *
 * @ORM\Entity(repositoryClass="WebsiteSettingRepository")
 * @ORM\Table(name="websiteSetting", indexes={@ORM\Index(name="fk_website_setting_time_zone1_idx", columns={"timeZoneId"}), @ORM\Index(name="fk_website_setting_hex_value1_idx", columns={"hexValueId"}), @ORM\Index(name="fk_websiteSetting_university1_idx", columns={"university_id"})})
 */
class WebsiteSetting
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $timeZoneId;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $hexValueId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tWebsiteName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tTagLine;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tInstitutionName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tEmailTrackingAddress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tEmail_replyto;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nCountry;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $bHTTPS;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $bGoogleAnalytics;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $bWebmasterTools;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nWebsitelaguage;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $bMailchimp;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tMailchimpAPIkey;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $dUpdatedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $dCreatedAt;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $university_id;

    /**
     * @ORM\ManyToOne(targetEntity="TimeZone", inversedBy="websiteSettings")
     * @ORM\JoinColumn(name="timeZoneId", referencedColumnName="id")
     */
    protected $timeZone;

    /**
     * @ORM\ManyToOne(targetEntity="HexValue", inversedBy="websiteSettings")
     * @ORM\JoinColumn(name="hexValueId", referencedColumnName="id")
     */
    protected $hexValue;

    /**
     * @ORM\ManyToOne(targetEntity="University", inversedBy="websiteSettings")
     * @ORM\JoinColumn(name="university_id", referencedColumnName="id")
     */
    protected $university;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\WebsiteSetting
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of timeZoneId.
     *
     * @param integer $timeZoneId
     * @return \Entity\WebsiteSetting
     */
    public function setTimeZoneId($timeZoneId)
    {
        $this->timeZoneId = $timeZoneId;

        return $this;
    }

    /**
     * Get the value of timeZoneId.
     *
     * @return integer
     */
    public function getTimeZoneId()
    {
        return $this->timeZoneId;
    }

    /**
     * Set the value of hexValueId.
     *
     * @param integer $hexValueId
     * @return \Entity\WebsiteSetting
     */
    public function setHexValueId($hexValueId)
    {
        $this->hexValueId = $hexValueId;

        return $this;
    }

    /**
     * Get the value of hexValueId.
     *
     * @return integer
     */
    public function getHexValueId()
    {
        return $this->hexValueId;
    }

    /**
     * Set the value of tWebsiteName.
     *
     * @param string $tWebsiteName
     * @return \Entity\WebsiteSetting
     */
    public function setTWebsiteName($tWebsiteName)
    {
        $this->tWebsiteName = $tWebsiteName;

        return $this;
    }

    /**
     * Get the value of tWebsiteName.
     *
     * @return string
     */
    public function getTWebsiteName()
    {
        return $this->tWebsiteName;
    }

    /**
     * Set the value of tTagLine.
     *
     * @param string $tTagLine
     * @return \Entity\WebsiteSetting
     */
    public function setTTagLine($tTagLine)
    {
        $this->tTagLine = $tTagLine;

        return $this;
    }

    /**
     * Get the value of tTagLine.
     *
     * @return string
     */
    public function getTTagLine()
    {
        return $this->tTagLine;
    }

    /**
     * Set the value of tInstitutionName.
     *
     * @param string $tInstitutionName
     * @return \Entity\WebsiteSetting
     */
    public function setTInstitutionName($tInstitutionName)
    {
        $this->tInstitutionName = $tInstitutionName;

        return $this;
    }

    /**
     * Get the value of tInstitutionName.
     *
     * @return string
     */
    public function getTInstitutionName()
    {
        return $this->tInstitutionName;
    }

    /**
     * Set the value of tEmailTrackingAddress.
     *
     * @param string $tEmailTrackingAddress
     * @return \Entity\WebsiteSetting
     */
    public function setTEmailTrackingAddress($tEmailTrackingAddress)
    {
        $this->tEmailTrackingAddress = $tEmailTrackingAddress;

        return $this;
    }

    /**
     * Get the value of tEmailTrackingAddress.
     *
     * @return string
     */
    public function getTEmailTrackingAddress()
    {
        return $this->tEmailTrackingAddress;
    }

    /**
     * Set the value of tEmail_replyto.
     *
     * @param string $tEmail_replyto
     * @return \Entity\WebsiteSetting
     */
    public function setTEmailReplyto($tEmail_replyto)
    {
        $this->tEmail_replyto = $tEmail_replyto;

        return $this;
    }

    /**
     * Get the value of tEmail_replyto.
     *
     * @return string
     */
    public function getTEmailReplyto()
    {
        return $this->tEmail_replyto;
    }

    /**
     * Set the value of nCountry.
     *
     * @param integer $nCountry
     * @return \Entity\WebsiteSetting
     */
    public function setNCountry($nCountry)
    {
        $this->nCountry = $nCountry;

        return $this;
    }

    /**
     * Get the value of nCountry.
     *
     * @return integer
     */
    public function getNCountry()
    {
        return $this->nCountry;
    }

    /**
     * Set the value of bHTTPS.
     *
     * @param boolean $bHTTPS
     * @return \Entity\WebsiteSetting
     */
    public function setBHTTPS($bHTTPS)
    {
        $this->bHTTPS = $bHTTPS;

        return $this;
    }

    /**
     * Get the value of bHTTPS.
     *
     * @return boolean
     */
    public function getBHTTPS()
    {
        return $this->bHTTPS;
    }

    /**
     * Set the value of bGoogleAnalytics.
     *
     * @param boolean $bGoogleAnalytics
     * @return \Entity\WebsiteSetting
     */
    public function setBGoogleAnalytics($bGoogleAnalytics)
    {
        $this->bGoogleAnalytics = $bGoogleAnalytics;

        return $this;
    }

    /**
     * Get the value of bGoogleAnalytics.
     *
     * @return boolean
     */
    public function getBGoogleAnalytics()
    {
        return $this->bGoogleAnalytics;
    }

    /**
     * Set the value of bWebmasterTools.
     *
     * @param boolean $bWebmasterTools
     * @return \Entity\WebsiteSetting
     */
    public function setBWebmasterTools($bWebmasterTools)
    {
        $this->bWebmasterTools = $bWebmasterTools;

        return $this;
    }

    /**
     * Get the value of bWebmasterTools.
     *
     * @return boolean
     */
    public function getBWebmasterTools()
    {
        return $this->bWebmasterTools;
    }

    /**
     * Set the value of nWebsitelaguage.
     *
     * @param integer $nWebsitelaguage
     * @return \Entity\WebsiteSetting
     */
    public function setNWebsitelaguage($nWebsitelaguage)
    {
        $this->nWebsitelaguage = $nWebsitelaguage;

        return $this;
    }

    /**
     * Get the value of nWebsitelaguage.
     *
     * @return integer
     */
    public function getNWebsitelaguage()
    {
        return $this->nWebsitelaguage;
    }

    /**
     * Set the value of bMailchimp.
     *
     * @param boolean $bMailchimp
     * @return \Entity\WebsiteSetting
     */
    public function setBMailchimp($bMailchimp)
    {
        $this->bMailchimp = $bMailchimp;

        return $this;
    }

    /**
     * Get the value of bMailchimp.
     *
     * @return boolean
     */
    public function getBMailchimp()
    {
        return $this->bMailchimp;
    }

    /**
     * Set the value of tMailchimpAPIkey.
     *
     * @param string $tMailchimpAPIkey
     * @return \Entity\WebsiteSetting
     */
    public function setTMailchimpAPIkey($tMailchimpAPIkey)
    {
        $this->tMailchimpAPIkey = $tMailchimpAPIkey;

        return $this;
    }

    /**
     * Get the value of tMailchimpAPIkey.
     *
     * @return string
     */
    public function getTMailchimpAPIkey()
    {
        return $this->tMailchimpAPIkey;
    }

    /**
     * Set the value of dUpdatedAt.
     *
     * @param \DateTime $dUpdatedAt
     * @return \Entity\WebsiteSetting
     */
    public function setDUpdatedAt($dUpdatedAt)
    {
        $this->dUpdatedAt = $dUpdatedAt;

        return $this;
    }

    /**
     * Get the value of dUpdatedAt.
     *
     * @return \DateTime
     */
    public function getDUpdatedAt()
    {
        return $this->dUpdatedAt;
    }

    /**
     * Set the value of dCreatedAt.
     *
     * @param \DateTime $dCreatedAt
     * @return \Entity\WebsiteSetting
     */
    public function setDCreatedAt($dCreatedAt)
    {
        $this->dCreatedAt = $dCreatedAt;

        return $this;
    }

    /**
     * Get the value of dCreatedAt.
     *
     * @return \DateTime
     */
    public function getDCreatedAt()
    {
        return $this->dCreatedAt;
    }

    /**
     * Set the value of university_id.
     *
     * @param integer $university_id
     * @return \Entity\WebsiteSetting
     */
    public function setUniversityId($university_id)
    {
        $this->university_id = $university_id;

        return $this;
    }

    /**
     * Get the value of university_id.
     *
     * @return integer
     */
    public function getUniversityId()
    {
        return $this->university_id;
    }

    /**
     * Set TimeZone entity (many to one).
     *
     * @param \Entity\TimeZone $timeZone
     * @return \Entity\WebsiteSetting
     */
    public function setTimeZone(TimeZone $timeZone = null)
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * Get TimeZone entity (many to one).
     *
     * @return \Entity\TimeZone
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Set HexValue entity (many to one).
     *
     * @param \Entity\HexValue $hexValue
     * @return \Entity\WebsiteSetting
     */
    public function setHexValue(HexValue $hexValue = null)
    {
        $this->hexValue = $hexValue;

        return $this;
    }

    /**
     * Get HexValue entity (many to one).
     *
     * @return \Entity\HexValue
     */
    public function getHexValue()
    {
        return $this->hexValue;
    }

    /**
     * Set University entity (many to one).
     *
     * @param \Entity\University $university
     * @return \Entity\WebsiteSetting
     */
    public function setUniversity(University $university = null)
    {
        $this->university = $university;

        return $this;
    }

    /**
     * Get University entity (many to one).
     *
     * @return \Entity\University
     */
    public function getUniversity()
    {
        return $this->university;
    }

    public function __sleep()
    {
        return array('id', 'timeZoneId', 'hexValueId', 'tWebsiteName', 'tTagLine', 'tInstitutionName', 'tEmailTrackingAddress', 'tEmail_replyto', 'nCountry', 'bHTTPS', 'bGoogleAnalytics', 'bWebmasterTools', 'nWebsitelaguage', 'bMailchimp', 'tMailchimpAPIkey', 'dUpdatedAt', 'dCreatedAt', 'university_id');
    }
}