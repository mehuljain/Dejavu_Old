<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Property
 *
 * @ORM\Table(name="property", uniqueConstraints={@ORM\UniqueConstraint(name="university_id_UNIQUE", columns={"universityId"})}, indexes={@ORM\Index(name="fk_property_client1_idx", columns={"clientId"}), @ORM\Index(name="fk_property_propertyDetail1_idx", columns={"propertyDetail_id"}), @ORM\Index(name="fk_property_ownershipStatusRecord1_idx", columns={"ownershipStatusRecord_id"})})
 * @ORM\Entity
 */
class Property
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
     * @var \DateTime
     *
     * @ORM\Column(name="dAvailability", type="date", nullable=true)
     */
    private $davailability;

    /**
     * @var integer
     *
     * @ORM\Column(name="nOccupancyPeriodInMonths", type="integer", nullable=true)
     */
    private $noccupancyperiodinmonths;

    /**
     * @var integer
     *
     * @ORM\Column(name="nBedrooms", type="integer", nullable=true)
     */
    private $nbedrooms;

    /**
     * @var integer
     *
     * @ORM\Column(name="nBathrooms", type="integer", nullable=true)
     */
    private $nbathrooms;

    /**
     * @var integer
     *
     * @ORM\Column(name="nBeds", type="integer", nullable=true)
     */
    private $nbeds;

    /**
     * @var integer
     *
     * @ORM\Column(name="nMaximumOccupants", type="integer", nullable=true)
     */
    private $nmaximumoccupants;

    /**
     * @var float
     *
     * @ORM\Column(name="nRentAmount", type="float", precision=10, scale=0, nullable=true)
     */
    private $nrentamount;

    /**
     * @var integer
     *
     * @ORM\Column(name="nViews", type="integer", nullable=true)
     */
    private $nviews;

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
     * @var string
     *
     * @ORM\Column(name="tPropertyTitle", type="string", length=255, nullable=true)
     */
    private $tpropertytitle;

    /**
     * @var string
     *
     * @ORM\Column(name="tPropertyDescription", type="text", nullable=true)
     */
    private $tpropertydescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dDisplayedOn", type="date", nullable=true)
     */
    private $ddisplayedon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dClosureDate", type="date", nullable=true)
     */
    private $dclosuredate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bIsApproved", type="boolean", nullable=true)
     */
    private $bisapproved;

    /**
     * @var string
     *
     * @ORM\Column(name="tNonapprovalReason", type="text", nullable=true)
     */
    private $tnonapprovalreason;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bIsBlacklisted", type="boolean", nullable=true)
     */
    private $bisblacklisted;

    /**
     * @var string
     *
     * @ORM\Column(name="tBlacklistedReason", type="text", nullable=true)
     */
    private $tblacklistedreason;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dApprovalRequestDate", type="date", nullable=true)
     */
    private $dapprovalrequestdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dApprovalDate", type="date", nullable=true)
     */
    private $dapprovaldate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bIsDisplayed", type="boolean", nullable=true)
     */
    private $bisdisplayed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nApprovedBy", type="integer", nullable=true)
     */
    private $napprovedby;

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
     * @var \Client
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clientId", referencedColumnName="id")
     * })
     */
    private $clientid;

    /**
     * @var \Propertydetail
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Propertydetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="propertyDetail_id", referencedColumnName="id")
     * })
     */
    private $propertydetail;

    /**
     * @var \Ownershipstatusrecord
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Ownershipstatusrecord")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ownershipStatusRecord_id", referencedColumnName="id")
     * })
     */
    private $ownershipstatusrecord;



    /**
     * Set universityid
     *
     * @param integer $universityid
     * @return Property
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
     * Set davailability
     *
     * @param \DateTime $davailability
     * @return Property
     */
    public function setDavailability($davailability)
    {
        $this->davailability = $davailability;

        return $this;
    }

    /**
     * Get davailability
     *
     * @return \DateTime 
     */
    public function getDavailability()
    {
        return $this->davailability;
    }

    /**
     * Set noccupancyperiodinmonths
     *
     * @param integer $noccupancyperiodinmonths
     * @return Property
     */
    public function setNoccupancyperiodinmonths($noccupancyperiodinmonths)
    {
        $this->noccupancyperiodinmonths = $noccupancyperiodinmonths;

        return $this;
    }

    /**
     * Get noccupancyperiodinmonths
     *
     * @return integer 
     */
    public function getNoccupancyperiodinmonths()
    {
        return $this->noccupancyperiodinmonths;
    }

    /**
     * Set nbedrooms
     *
     * @param integer $nbedrooms
     * @return Property
     */
    public function setNbedrooms($nbedrooms)
    {
        $this->nbedrooms = $nbedrooms;

        return $this;
    }

    /**
     * Get nbedrooms
     *
     * @return integer 
     */
    public function getNbedrooms()
    {
        return $this->nbedrooms;
    }

    /**
     * Set nbathrooms
     *
     * @param integer $nbathrooms
     * @return Property
     */
    public function setNbathrooms($nbathrooms)
    {
        $this->nbathrooms = $nbathrooms;

        return $this;
    }

    /**
     * Get nbathrooms
     *
     * @return integer 
     */
    public function getNbathrooms()
    {
        return $this->nbathrooms;
    }

    /**
     * Set nbeds
     *
     * @param integer $nbeds
     * @return Property
     */
    public function setNbeds($nbeds)
    {
        $this->nbeds = $nbeds;

        return $this;
    }

    /**
     * Get nbeds
     *
     * @return integer 
     */
    public function getNbeds()
    {
        return $this->nbeds;
    }

    /**
     * Set nmaximumoccupants
     *
     * @param integer $nmaximumoccupants
     * @return Property
     */
    public function setNmaximumoccupants($nmaximumoccupants)
    {
        $this->nmaximumoccupants = $nmaximumoccupants;

        return $this;
    }

    /**
     * Get nmaximumoccupants
     *
     * @return integer 
     */
    public function getNmaximumoccupants()
    {
        return $this->nmaximumoccupants;
    }

    /**
     * Set nrentamount
     *
     * @param float $nrentamount
     * @return Property
     */
    public function setNrentamount($nrentamount)
    {
        $this->nrentamount = $nrentamount;

        return $this;
    }

    /**
     * Get nrentamount
     *
     * @return float 
     */
    public function getNrentamount()
    {
        return $this->nrentamount;
    }

    /**
     * Set nviews
     *
     * @param integer $nviews
     * @return Property
     */
    public function setNviews($nviews)
    {
        $this->nviews = $nviews;

        return $this;
    }

    /**
     * Get nviews
     *
     * @return integer 
     */
    public function getNviews()
    {
        return $this->nviews;
    }

    /**
     * Set nlatitude
     *
     * @param float $nlatitude
     * @return Property
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
     * @return Property
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
     * Set taddresstitle
     *
     * @param string $taddresstitle
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * Set tpropertytitle
     *
     * @param string $tpropertytitle
     * @return Property
     */
    public function setTpropertytitle($tpropertytitle)
    {
        $this->tpropertytitle = $tpropertytitle;

        return $this;
    }

    /**
     * Get tpropertytitle
     *
     * @return string 
     */
    public function getTpropertytitle()
    {
        return $this->tpropertytitle;
    }

    /**
     * Set tpropertydescription
     *
     * @param string $tpropertydescription
     * @return Property
     */
    public function setTpropertydescription($tpropertydescription)
    {
        $this->tpropertydescription = $tpropertydescription;

        return $this;
    }

    /**
     * Get tpropertydescription
     *
     * @return string 
     */
    public function getTpropertydescription()
    {
        return $this->tpropertydescription;
    }

    /**
     * Set ddisplayedon
     *
     * @param \DateTime $ddisplayedon
     * @return Property
     */
    public function setDdisplayedon($ddisplayedon)
    {
        $this->ddisplayedon = $ddisplayedon;

        return $this;
    }

    /**
     * Get ddisplayedon
     *
     * @return \DateTime 
     */
    public function getDdisplayedon()
    {
        return $this->ddisplayedon;
    }

    /**
     * Set dclosuredate
     *
     * @param \DateTime $dclosuredate
     * @return Property
     */
    public function setDclosuredate($dclosuredate)
    {
        $this->dclosuredate = $dclosuredate;

        return $this;
    }

    /**
     * Get dclosuredate
     *
     * @return \DateTime 
     */
    public function getDclosuredate()
    {
        return $this->dclosuredate;
    }

    /**
     * Set bisapproved
     *
     * @param boolean $bisapproved
     * @return Property
     */
    public function setBisapproved($bisapproved)
    {
        $this->bisapproved = $bisapproved;

        return $this;
    }

    /**
     * Get bisapproved
     *
     * @return boolean 
     */
    public function getBisapproved()
    {
        return $this->bisapproved;
    }

    /**
     * Set tnonapprovalreason
     *
     * @param string $tnonapprovalreason
     * @return Property
     */
    public function setTnonapprovalreason($tnonapprovalreason)
    {
        $this->tnonapprovalreason = $tnonapprovalreason;

        return $this;
    }

    /**
     * Get tnonapprovalreason
     *
     * @return string 
     */
    public function getTnonapprovalreason()
    {
        return $this->tnonapprovalreason;
    }

    /**
     * Set bisblacklisted
     *
     * @param boolean $bisblacklisted
     * @return Property
     */
    public function setBisblacklisted($bisblacklisted)
    {
        $this->bisblacklisted = $bisblacklisted;

        return $this;
    }

    /**
     * Get bisblacklisted
     *
     * @return boolean 
     */
    public function getBisblacklisted()
    {
        return $this->bisblacklisted;
    }

    /**
     * Set tblacklistedreason
     *
     * @param string $tblacklistedreason
     * @return Property
     */
    public function setTblacklistedreason($tblacklistedreason)
    {
        $this->tblacklistedreason = $tblacklistedreason;

        return $this;
    }

    /**
     * Get tblacklistedreason
     *
     * @return string 
     */
    public function getTblacklistedreason()
    {
        return $this->tblacklistedreason;
    }

    /**
     * Set dapprovalrequestdate
     *
     * @param \DateTime $dapprovalrequestdate
     * @return Property
     */
    public function setDapprovalrequestdate($dapprovalrequestdate)
    {
        $this->dapprovalrequestdate = $dapprovalrequestdate;

        return $this;
    }

    /**
     * Get dapprovalrequestdate
     *
     * @return \DateTime 
     */
    public function getDapprovalrequestdate()
    {
        return $this->dapprovalrequestdate;
    }

    /**
     * Set dapprovaldate
     *
     * @param \DateTime $dapprovaldate
     * @return Property
     */
    public function setDapprovaldate($dapprovaldate)
    {
        $this->dapprovaldate = $dapprovaldate;

        return $this;
    }

    /**
     * Get dapprovaldate
     *
     * @return \DateTime 
     */
    public function getDapprovaldate()
    {
        return $this->dapprovaldate;
    }

    /**
     * Set bisdisplayed
     *
     * @param boolean $bisdisplayed
     * @return Property
     */
    public function setBisdisplayed($bisdisplayed)
    {
        $this->bisdisplayed = $bisdisplayed;

        return $this;
    }

    /**
     * Get bisdisplayed
     *
     * @return boolean 
     */
    public function getBisdisplayed()
    {
        return $this->bisdisplayed;
    }

    /**
     * Set napprovedby
     *
     * @param integer $napprovedby
     * @return Property
     */
    public function setNapprovedby($napprovedby)
    {
        $this->napprovedby = $napprovedby;

        return $this;
    }

    /**
     * Get napprovedby
     *
     * @return integer 
     */
    public function getNapprovedby()
    {
        return $this->napprovedby;
    }

    /**
     * Set dcreatedat
     *
     * @param \DateTime $dcreatedat
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * Set ownershipstatusrecord
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Ownershipstatusrecord $ownershipstatusrecord
     * @return Property
     */
    public function setOwnershipstatusrecord(\Tracestay\Bundle\TracestayBundle\Entity\Ownershipstatusrecord $ownershipstatusrecord)
    {
        $this->ownershipstatusrecord = $ownershipstatusrecord;

        return $this;
    }

    /**
     * Get ownershipstatusrecord
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Ownershipstatusrecord 
     */
    public function getOwnershipstatusrecord()
    {
        return $this->ownershipstatusrecord;
    }

    /**
     * Set propertydetail
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Propertydetail $propertydetail
     * @return Property
     */
    public function setPropertydetail(\Tracestay\Bundle\TracestayBundle\Entity\Propertydetail $propertydetail)
    {
        $this->propertydetail = $propertydetail;

        return $this;
    }

    /**
     * Get propertydetail
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Propertydetail 
     */
    public function getPropertydetail()
    {
        return $this->propertydetail;
    }

    /**
     * Set clientid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Client $clientid
     * @return Property
     */
    public function setClientid(\Tracestay\Bundle\TracestayBundle\Entity\Client $clientid)
    {
        $this->clientid = $clientid;

        return $this;
    }

    /**
     * Get clientid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Client 
     */
    public function getClientid()
    {
        return $this->clientid;
    }
}
