<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Badge
 *
 * @ORM\Table(name="badge", uniqueConstraints={@ORM\UniqueConstraint(name="universityId_UNIQUE", columns={"universityId"})})
 * @ORM\Entity
 */
class Badge
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
     * @ORM\Column(name="nBadgeValue", type="integer", nullable=false)
     */
    private $nbadgevalue;

    /**
     * @var integer
     *
     * @ORM\Column(name="universityId", type="integer", nullable=false)
     */
    private $universityid;



    /**
     * Set nbadgevalue
     *
     * @param integer $nbadgevalue
     * @return Badge
     */
    public function setNbadgevalue($nbadgevalue)
    {
        $this->nbadgevalue = $nbadgevalue;

        return $this;
    }

    /**
     * Get nbadgevalue
     *
     * @return integer 
     */
    public function getNbadgevalue()
    {
        return $this->nbadgevalue;
    }

    /**
     * Set universityid
     *
     * @param integer $universityid
     * @return Badge
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
