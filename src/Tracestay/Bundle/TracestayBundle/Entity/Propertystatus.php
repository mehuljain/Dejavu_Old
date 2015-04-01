<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propertystatus
 *
 * @ORM\Table(name="propertyStatus", uniqueConstraints={@ORM\UniqueConstraint(name="nUniversityId_UNIQUE", columns={"universityId"})})
 * @ORM\Entity
 */
class Propertystatus
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
     * @ORM\Column(name="nPropertyStatus", type="integer", nullable=false)
     */
    private $npropertystatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="universityId", type="integer", nullable=false)
     */
    private $universityid;



    /**
     * Set npropertystatus
     *
     * @param integer $npropertystatus
     * @return Propertystatus
     */
    public function setNpropertystatus($npropertystatus)
    {
        $this->npropertystatus = $npropertystatus;

        return $this;
    }

    /**
     * Get npropertystatus
     *
     * @return integer 
     */
    public function getNpropertystatus()
    {
        return $this->npropertystatus;
    }

    /**
     * Set universityid
     *
     * @param integer $universityid
     * @return Propertystatus
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
