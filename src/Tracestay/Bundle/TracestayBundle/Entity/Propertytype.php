<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propertytype
 *
 * @ORM\Table(name="propertyType", uniqueConstraints={@ORM\UniqueConstraint(name="nUniversityId_UNIQUE", columns={"universityId"})})
 * @ORM\Entity
 */
class Propertytype
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
     * @ORM\Column(name="nPropertyType", type="integer", nullable=false)
     */
    private $npropertytype;

    /**
     * @var integer
     *
     * @ORM\Column(name="universityId", type="integer", nullable=false)
     */
    private $universityid;



    /**
     * Set npropertytype
     *
     * @param integer $npropertytype
     * @return Propertytype
     */
    public function setNpropertytype($npropertytype)
    {
        $this->npropertytype = $npropertytype;

        return $this;
    }

    /**
     * Get npropertytype
     *
     * @return integer 
     */
    public function getNpropertytype()
    {
        return $this->npropertytype;
    }

    /**
     * Set universityid
     *
     * @param integer $universityid
     * @return Propertytype
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
