<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * University
 *
 * @ORM\Table(name="university", indexes={@ORM\Index(name="fk_university_plan1_idx", columns={"planId"})})
 * @ORM\Entity
 */
class University
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
     * @ORM\Column(name="tUniversityName", type="string", length=255, nullable=true)
     */
    private $tuniversityname;

    /**
     * @var string
     *
     * @ORM\Column(name="tSubdomainName", type="string", length=255, nullable=true)
     */
    private $tsubdomainname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bAccountValidity", type="boolean", nullable=true)
     */
    private $baccountvalidity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bBlacklisted", type="boolean", nullable=true)
     */
    private $bblacklisted;

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
     * @var \Plan
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Plan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="planId", referencedColumnName="id")
     * })
     */
    private $planid;



    /**
     * Set tuniversityname
     *
     * @param string $tuniversityname
     * @return University
     */
    public function setTuniversityname($tuniversityname)
    {
        $this->tuniversityname = $tuniversityname;

        return $this;
    }

    /**
     * Get tuniversityname
     *
     * @return string 
     */
    public function getTuniversityname()
    {
        return $this->tuniversityname;
    }

    /**
     * Set tsubdomainname
     *
     * @param string $tsubdomainname
     * @return University
     */
    public function setTsubdomainname($tsubdomainname)
    {
        $this->tsubdomainname = $tsubdomainname;

        return $this;
    }

    /**
     * Get tsubdomainname
     *
     * @return string 
     */
    public function getTsubdomainname()
    {
        return $this->tsubdomainname;
    }

    /**
     * Set baccountvalidity
     *
     * @param boolean $baccountvalidity
     * @return University
     */
    public function setBaccountvalidity($baccountvalidity)
    {
        $this->baccountvalidity = $baccountvalidity;

        return $this;
    }

    /**
     * Get baccountvalidity
     *
     * @return boolean 
     */
    public function getBaccountvalidity()
    {
        return $this->baccountvalidity;
    }

    /**
     * Set bblacklisted
     *
     * @param boolean $bblacklisted
     * @return University
     */
    public function setBblacklisted($bblacklisted)
    {
        $this->bblacklisted = $bblacklisted;

        return $this;
    }

    /**
     * Get bblacklisted
     *
     * @return boolean 
     */
    public function getBblacklisted()
    {
        return $this->bblacklisted;
    }

    /**
     * Set dcreatedat
     *
     * @param \DateTime $dcreatedat
     * @return University
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
     * @return University
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
     * @return University
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
     * Set planid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Plan $planid
     * @return University
     */
    public function setPlanid(\Tracestay\Bundle\TracestayBundle\Entity\Plan $planid)
    {
        $this->planid = $planid;

        return $this;
    }

    /**
     * Get planid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Plan 
     */
    public function getPlanid()
    {
        return $this->planid;
    }
}
