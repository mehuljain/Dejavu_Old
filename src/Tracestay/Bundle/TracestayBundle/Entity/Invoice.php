<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice
 *
 * @ORM\Table(name="invoice", indexes={@ORM\Index(name="fk_invoice_university1_idx", columns={"universityId"})})
 * @ORM\Entity
 */
class Invoice
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
     * @ORM\Column(name="tInvoiceReference", type="string", length=20, nullable=false)
     */
    private $tinvoicereference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dGeneratedDate", type="datetime", nullable=true)
     */
    private $dgenerateddate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dDueDate", type="date", nullable=true)
     */
    private $dduedate;

    /**
     * @var float
     *
     * @ORM\Column(name="nOverdueCharges", type="float", precision=10, scale=0, nullable=true)
     */
    private $noverduecharges;

    /**
     * @var float
     *
     * @ORM\Column(name="nTotalDue", type="float", precision=10, scale=0, nullable=true)
     */
    private $ntotaldue;

    /**
     * @var string
     *
     * @ORM\Column(name="tDescription", type="string", length=255, nullable=true)
     */
    private $tdescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="nPaymentMode", type="integer", nullable=true)
     */
    private $npaymentmode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bIsPaid", type="boolean", nullable=true)
     */
    private $bispaid;

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
     * Set tinvoicereference
     *
     * @param string $tinvoicereference
     * @return Invoice
     */
    public function setTinvoicereference($tinvoicereference)
    {
        $this->tinvoicereference = $tinvoicereference;

        return $this;
    }

    /**
     * Get tinvoicereference
     *
     * @return string 
     */
    public function getTinvoicereference()
    {
        return $this->tinvoicereference;
    }

    /**
     * Set dgenerateddate
     *
     * @param \DateTime $dgenerateddate
     * @return Invoice
     */
    public function setDgenerateddate($dgenerateddate)
    {
        $this->dgenerateddate = $dgenerateddate;

        return $this;
    }

    /**
     * Get dgenerateddate
     *
     * @return \DateTime 
     */
    public function getDgenerateddate()
    {
        return $this->dgenerateddate;
    }

    /**
     * Set dduedate
     *
     * @param \DateTime $dduedate
     * @return Invoice
     */
    public function setDduedate($dduedate)
    {
        $this->dduedate = $dduedate;

        return $this;
    }

    /**
     * Get dduedate
     *
     * @return \DateTime 
     */
    public function getDduedate()
    {
        return $this->dduedate;
    }

    /**
     * Set noverduecharges
     *
     * @param float $noverduecharges
     * @return Invoice
     */
    public function setNoverduecharges($noverduecharges)
    {
        $this->noverduecharges = $noverduecharges;

        return $this;
    }

    /**
     * Get noverduecharges
     *
     * @return float 
     */
    public function getNoverduecharges()
    {
        return $this->noverduecharges;
    }

    /**
     * Set ntotaldue
     *
     * @param float $ntotaldue
     * @return Invoice
     */
    public function setNtotaldue($ntotaldue)
    {
        $this->ntotaldue = $ntotaldue;

        return $this;
    }

    /**
     * Get ntotaldue
     *
     * @return float 
     */
    public function getNtotaldue()
    {
        return $this->ntotaldue;
    }

    /**
     * Set tdescription
     *
     * @param string $tdescription
     * @return Invoice
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
     * Set npaymentmode
     *
     * @param integer $npaymentmode
     * @return Invoice
     */
    public function setNpaymentmode($npaymentmode)
    {
        $this->npaymentmode = $npaymentmode;

        return $this;
    }

    /**
     * Get npaymentmode
     *
     * @return integer 
     */
    public function getNpaymentmode()
    {
        return $this->npaymentmode;
    }

    /**
     * Set bispaid
     *
     * @param boolean $bispaid
     * @return Invoice
     */
    public function setBispaid($bispaid)
    {
        $this->bispaid = $bispaid;

        return $this;
    }

    /**
     * Get bispaid
     *
     * @return boolean 
     */
    public function getBispaid()
    {
        return $this->bispaid;
    }

    /**
     * Set dcreatedat
     *
     * @param \DateTime $dcreatedat
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
