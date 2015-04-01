<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Amenity
 *
 * @ORM\Table(name="amenity", uniqueConstraints={@ORM\UniqueConstraint(name="universityId_UNIQUE", columns={"universityId"})})
 * @ORM\Entity
 */
class Amenity
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
     * @ORM\Column(name="nAmenity", type="integer", nullable=false)
     */
    private $namenity;

    /**
     * @var integer
     *
     * @ORM\Column(name="universityId", type="integer", nullable=false)
     */
    private $universityid;



    /**
     * Set namenity
     *
     * @param integer $namenity
     * @return Amenity
     */
    public function setNamenity($namenity)
    {
        $this->namenity = $namenity;

        return $this;
    }

    /**
     * Get namenity
     *
     * @return integer 
     */
    public function getNamenity()
    {
        return $this->namenity;
    }

    /**
     * Set universityid
     *
     * @param integer $universityid
     * @return Amenity
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
