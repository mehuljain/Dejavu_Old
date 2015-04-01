<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plan
 *
 * @ORM\Table(name="plan", indexes={@ORM\Index(name="fk_plan_currencyCode1_idx", columns={"currencyCodeId"})})
 * @ORM\Entity
 */
class Plan
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
     * @ORM\Column(name="bSslSetup", type="boolean", nullable=true)
     */
    private $bsslsetup;

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
     * @return Plan
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
     * @return Plan
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
     * @return Plan
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
     * @return Plan
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
     * @return Plan
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
     * @return Plan
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
     * Set dcreatedat
     *
     * @param \DateTime $dcreatedat
     * @return Plan
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
     * @return Plan
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
     * @return Plan
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
     * @return Plan
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
}
