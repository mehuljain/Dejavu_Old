<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ownershipstatus
 *
 * @ORM\Table(name="ownershipStatus", uniqueConstraints={@ORM\UniqueConstraint(name="nUniversityId_UNIQUE", columns={"universityId"})})
 * @ORM\Entity
 */
class Ownershipstatus
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
     * @ORM\Column(name="nOwnershipStatus", type="integer", nullable=false)
     */
    private $nownershipstatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="universityId", type="integer", nullable=false)
     */
    private $universityid;



    /**
     * Set nownershipstatus
     *
     * @param integer $nownershipstatus
     * @return Ownershipstatus
     */
    public function setNownershipstatus($nownershipstatus)
    {
        $this->nownershipstatus = $nownershipstatus;

        return $this;
    }

    /**
     * Get nownershipstatus
     *
     * @return integer 
     */
    public function getNownershipstatus()
    {
        return $this->nownershipstatus;
    }

    /**
     * Set universityid
     *
     * @param integer $universityid
     * @return Ownershipstatus
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
