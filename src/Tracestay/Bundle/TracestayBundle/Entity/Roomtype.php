<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roomtype
 *
 * @ORM\Table(name="roomType", uniqueConstraints={@ORM\UniqueConstraint(name="nUniversityId_UNIQUE", columns={"universityId"})})
 * @ORM\Entity
 */
class Roomtype
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
     * @ORM\Column(name="nRoomType", type="integer", nullable=false)
     */
    private $nroomtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="universityId", type="integer", nullable=false)
     */
    private $universityid;



    /**
     * Set nroomtype
     *
     * @param integer $nroomtype
     * @return Roomtype
     */
    public function setNroomtype($nroomtype)
    {
        $this->nroomtype = $nroomtype;

        return $this;
    }

    /**
     * Get nroomtype
     *
     * @return integer 
     */
    public function getNroomtype()
    {
        return $this->nroomtype;
    }

    /**
     * Set universityid
     *
     * @param integer $universityid
     * @return Roomtype
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
