<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment", indexes={@ORM\Index(name="fk_payment_invoice1_idx", columns={"invoiceId"})})
 * @ORM\Entity
 */
class Payment
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
     * @var float
     *
     * @ORM\Column(name="nInvoiceAmount", type="float", precision=10, scale=0, nullable=true)
     */
    private $ninvoiceamount;

    /**
     * @var float
     *
     * @ORM\Column(name="nAmountPaid", type="float", precision=10, scale=0, nullable=true)
     */
    private $namountpaid;

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
     * @var \Invoice
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Invoice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="invoiceId", referencedColumnName="id")
     * })
     */
    private $invoiceid;



    /**
     * Set ninvoiceamount
     *
     * @param float $ninvoiceamount
     * @return Payment
     */
    public function setNinvoiceamount($ninvoiceamount)
    {
        $this->ninvoiceamount = $ninvoiceamount;

        return $this;
    }

    /**
     * Get ninvoiceamount
     *
     * @return float 
     */
    public function getNinvoiceamount()
    {
        return $this->ninvoiceamount;
    }

    /**
     * Set namountpaid
     *
     * @param float $namountpaid
     * @return Payment
     */
    public function setNamountpaid($namountpaid)
    {
        $this->namountpaid = $namountpaid;

        return $this;
    }

    /**
     * Get namountpaid
     *
     * @return float 
     */
    public function getNamountpaid()
    {
        return $this->namountpaid;
    }

    /**
     * Set dcreatedat
     *
     * @param \DateTime $dcreatedat
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * Set invoiceid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Invoice $invoiceid
     * @return Payment
     */
    public function setInvoiceid(\Tracestay\Bundle\TracestayBundle\Entity\Invoice $invoiceid)
    {
        $this->invoiceid = $invoiceid;

        return $this;
    }

    /**
     * Get invoiceid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Invoice 
     */
    public function getInvoiceid()
    {
        return $this->invoiceid;
    }
}
