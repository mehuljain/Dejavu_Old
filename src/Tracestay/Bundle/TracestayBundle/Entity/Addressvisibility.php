<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Addressvisibility
 *
 * @ORM\Table(name="addressVisibility")
 * @ORM\Entity
 */
class Addressvisibility
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
     * @var integer
     *
     * @ORM\Column(name="nShowDetails", type="integer", nullable=true)
     */
    private $nshowdetails;

    /**
     * @var integer
     *
     * @ORM\Column(name="nHideDetails", type="integer", nullable=true)
     */
    private $nhidedetails;

    /**
     * @var integer
     *
     * @ORM\Column(name="nUserDesides", type="integer", nullable=true)
     */
    private $nuserdesides;



    /**
     * Set nshowdetails
     *
     * @param integer $nshowdetails
     * @return Addressvisibility
     */
    public function setNshowdetails($nshowdetails)
    {
        $this->nshowdetails = $nshowdetails;

        return $this;
    }

    /**
     * Get nshowdetails
     *
     * @return integer 
     */
    public function getNshowdetails()
    {
        return $this->nshowdetails;
    }

    /**
     * Set nhidedetails
     *
     * @param integer $nhidedetails
     * @return Addressvisibility
     */
    public function setNhidedetails($nhidedetails)
    {
        $this->nhidedetails = $nhidedetails;

        return $this;
    }

    /**
     * Get nhidedetails
     *
     * @return integer 
     */
    public function getNhidedetails()
    {
        return $this->nhidedetails;
    }

    /**
     * Set nuserdesides
     *
     * @param integer $nuserdesides
     * @return Addressvisibility
     */
    public function setNuserdesides($nuserdesides)
    {
        $this->nuserdesides = $nuserdesides;

        return $this;
    }

    /**
     * Get nuserdesides
     *
     * @return integer 
     */
    public function getNuserdesides()
    {
        return $this->nuserdesides;
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
