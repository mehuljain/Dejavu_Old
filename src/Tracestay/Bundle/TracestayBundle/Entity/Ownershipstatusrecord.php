<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ownershipstatusrecord
 *
 * @ORM\Table(name="ownershipStatusRecord")
 * @ORM\Entity
 */
class Ownershipstatusrecord
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
     * @ORM\Column(name="tOwnershipStatusValue", type="string", length=255, nullable=true)
     */
    private $townershipstatusvalue;

    /**
     * @var integer
     *
     * @ORM\Column(name="universityId", type="integer", nullable=false)
     */
    private $universityid;



    /**
     * Set townershipstatusvalue
     *
     * @param string $townershipstatusvalue
     * @return Ownershipstatusrecord
     */
    public function setTownershipstatusvalue($townershipstatusvalue)
    {
        $this->townershipstatusvalue = $townershipstatusvalue;

        return $this;
    }

    /**
     * Get townershipstatusvalue
     *
     * @return string 
     */
    public function getTownershipstatusvalue()
    {
        return $this->townershipstatusvalue;
    }

    /**
     * Set universityid
     *
     * @param integer $universityid
     * @return Ownershipstatusrecord
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
