<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propertydetail
 *
 * @ORM\Table(name="propertyDetail")
 * @ORM\Entity
 */
class Propertydetail
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
     * @var string
     *
     * @ORM\Column(name="tPropertyDetailValue", type="string", length=255, nullable=true)
     */
    private $tpropertydetailvalue;

    /**
     * @var integer
     *
     * @ORM\Column(name="universityId", type="integer", nullable=false)
     */
    private $universityid;



    /**
     * Set tpropertydetailvalue
     *
     * @param string $tpropertydetailvalue
     * @return Propertydetail
     */
    public function setTpropertydetailvalue($tpropertydetailvalue)
    {
        $this->tpropertydetailvalue = $tpropertydetailvalue;

        return $this;
    }

    /**
     * Get tpropertydetailvalue
     *
     * @return string 
     */
    public function getTpropertydetailvalue()
    {
        return $this->tpropertydetailvalue;
    }

    /**
     * Set universityid
     *
     * @param integer $universityid
     * @return Propertydetail
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
