<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListingSetting
 *
 * @ORM\Table(name="listing_setting", indexes={@ORM\Index(name="fk_listing_setting_address_visibility1_idx", columns={"addressVisibilityId"})})
 * @ORM\Entity
 */
class ListingSetting
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
     * @var integer
     *
     * @ORM\Column(name="nAdvertisePeriod", type="integer", nullable=true)
     */
    private $nadvertiseperiod;

    /**
     * @var integer
     *
     * @ORM\Column(name="nBondPeriod", type="integer", nullable=true)
     */
    private $nbondperiod;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bPhotoRequired", type="boolean", nullable=true)
     */
    private $bphotorequired;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bEnableBadges", type="boolean", nullable=true)
     */
    private $benablebadges;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bEnableStarRatings", type="boolean", nullable=true)
     */
    private $benablestarratings;

    /**
     * @var integer
     *
     * @ORM\Column(name="nStarRating", type="integer", nullable=true)
     */
    private $nstarrating;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dCreatedAt", type="datetime", nullable=true)
     */
    private $dcreatedat;

    /**
     * @var integer
     *
     * @ORM\Column(name="dUpdatedAt", type="integer", nullable=true)
     */
    private $dupdatedat;

    /**
     * @var \Addressvisibility
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Addressvisibility")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addressVisibilityId", referencedColumnName="id")
     * })
     */
    private $addressvisibilityid;



    /**
     * Set universityid
     *
     * @param integer $universityid
     * @return ListingSetting
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
     * Set nadvertiseperiod
     *
     * @param integer $nadvertiseperiod
     * @return ListingSetting
     */
    public function setNadvertiseperiod($nadvertiseperiod)
    {
        $this->nadvertiseperiod = $nadvertiseperiod;

        return $this;
    }

    /**
     * Get nadvertiseperiod
     *
     * @return integer 
     */
    public function getNadvertiseperiod()
    {
        return $this->nadvertiseperiod;
    }

    /**
     * Set nbondperiod
     *
     * @param integer $nbondperiod
     * @return ListingSetting
     */
    public function setNbondperiod($nbondperiod)
    {
        $this->nbondperiod = $nbondperiod;

        return $this;
    }

    /**
     * Get nbondperiod
     *
     * @return integer 
     */
    public function getNbondperiod()
    {
        return $this->nbondperiod;
    }

    /**
     * Set bphotorequired
     *
     * @param boolean $bphotorequired
     * @return ListingSetting
     */
    public function setBphotorequired($bphotorequired)
    {
        $this->bphotorequired = $bphotorequired;

        return $this;
    }

    /**
     * Get bphotorequired
     *
     * @return boolean 
     */
    public function getBphotorequired()
    {
        return $this->bphotorequired;
    }

    /**
     * Set benablebadges
     *
     * @param boolean $benablebadges
     * @return ListingSetting
     */
    public function setBenablebadges($benablebadges)
    {
        $this->benablebadges = $benablebadges;

        return $this;
    }

    /**
     * Get benablebadges
     *
     * @return boolean 
     */
    public function getBenablebadges()
    {
        return $this->benablebadges;
    }

    /**
     * Set benablestarratings
     *
     * @param boolean $benablestarratings
     * @return ListingSetting
     */
    public function setBenablestarratings($benablestarratings)
    {
        $this->benablestarratings = $benablestarratings;

        return $this;
    }

    /**
     * Get benablestarratings
     *
     * @return boolean 
     */
    public function getBenablestarratings()
    {
        return $this->benablestarratings;
    }

    /**
     * Set nstarrating
     *
     * @param integer $nstarrating
     * @return ListingSetting
     */
    public function setNstarrating($nstarrating)
    {
        $this->nstarrating = $nstarrating;

        return $this;
    }

    /**
     * Get nstarrating
     *
     * @return integer 
     */
    public function getNstarrating()
    {
        return $this->nstarrating;
    }

    /**
     * Set dcreatedat
     *
     * @param \DateTime $dcreatedat
     * @return ListingSetting
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
     * @param integer $dupdatedat
     * @return ListingSetting
     */
    public function setDupdatedat($dupdatedat)
    {
        $this->dupdatedat = $dupdatedat;

        return $this;
    }

    /**
     * Get dupdatedat
     *
     * @return integer 
     */
    public function getDupdatedat()
    {
        return $this->dupdatedat;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return ListingSetting
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
     * Set addressvisibilityid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Addressvisibility $addressvisibilityid
     * @return ListingSetting
     */
    public function setAddressvisibilityid(\Tracestay\Bundle\TracestayBundle\Entity\Addressvisibility $addressvisibilityid)
    {
        $this->addressvisibilityid = $addressvisibilityid;

        return $this;
    }

    /**
     * Get addressvisibilityid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Addressvisibility 
     */
    public function getAddressvisibilityid()
    {
        return $this->addressvisibilityid;
    }
}
