<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currencycode
 *
 * @ORM\Table(name="currencyCode")
 * @ORM\Entity
 */
class Currencycode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="nTotal", type="float", precision=10, scale=0, nullable=true)
     */
    private $ntotal;

    /**
     * @var float
     *
     * @ORM\Column(name="nTax", type="float", precision=10, scale=0, nullable=true)
     */
    private $ntax;

    /**
     * @var string
     *
     * @ORM\Column(name="tCurrency", type="string", length=255, nullable=true)
     */
    private $tcurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="nCountry", type="integer", nullable=true)
     */
    private $ncountry;



    /**
     * Set ntotal
     *
     * @param float $ntotal
     * @return Currencycode
     */
    public function setNtotal($ntotal)
    {
        $this->ntotal = $ntotal;

        return $this;
    }

    /**
     * Get ntotal
     *
     * @return float 
     */
    public function getNtotal()
    {
        return $this->ntotal;
    }

    /**
     * Set ntax
     *
     * @param float $ntax
     * @return Currencycode
     */
    public function setNtax($ntax)
    {
        $this->ntax = $ntax;

        return $this;
    }

    /**
     * Get ntax
     *
     * @return float 
     */
    public function getNtax()
    {
        return $this->ntax;
    }

    /**
     * Set tcurrency
     *
     * @param string $tcurrency
     * @return Currencycode
     */
    public function setTcurrency($tcurrency)
    {
        $this->tcurrency = $tcurrency;

        return $this;
    }

    /**
     * Get tcurrency
     *
     * @return string 
     */
    public function getTcurrency()
    {
        return $this->tcurrency;
    }

    /**
     * Set ncountry
     *
     * @param integer $ncountry
     * @return Currencycode
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
