<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campushasproperty
 *
 * @ORM\Table(name="campusHasProperty", indexes={@ORM\Index(name="fk_campus_has_property_property1_idx", columns={"propertyId"}), @ORM\Index(name="fk_campus_has_property_campus1_idx", columns={"campusId"})})
 * @ORM\Entity
 */
class Campushasproperty
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \Campus
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Campus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campusId", referencedColumnName="id")
     * })
     */
    private $campusid;

    /**
     * @var \Property
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Property")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="propertyId", referencedColumnName="id")
     * })
     */
    private $propertyid;



    /**
     * Set id
     *
     * @param integer $id
     * @return Campushasproperty
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    /**
     * Set propertyid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Property $propertyid
     * @return Campushasproperty
     */
    public function setPropertyid(\Tracestay\Bundle\TracestayBundle\Entity\Property $propertyid)
    {
        $this->propertyid = $propertyid;

        return $this;
    }

    /**
     * Get propertyid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Property 
     */
    public function getPropertyid()
    {
        return $this->propertyid;
    }

    /**
     * Set campusid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Campus $campusid
     * @return Campushasproperty
     */
    public function setCampusid(\Tracestay\Bundle\TracestayBundle\Entity\Campus $campusid)
    {
        $this->campusid = $campusid;

        return $this;
    }

    /**
     * Get campusid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Campus 
     */
    public function getCampusid()
    {
        return $this->campusid;
    }
}
