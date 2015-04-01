<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propertyhaspropertystatus
 *
 * @ORM\Table(name="propertyHasPropertyStatus", indexes={@ORM\Index(name="fk_property_has_property_status_property_status1_idx", columns={"propertyStatusId"}), @ORM\Index(name="fk_property_has_property_status_property1_idx", columns={"propertyId"})})
 * @ORM\Entity
 */
class Propertyhaspropertystatus
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
     * @var \Propertystatus
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Propertystatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="propertyStatusId", referencedColumnName="id")
     * })
     */
    private $propertystatusid;



    /**
     * Set id
     *
     * @param integer $id
     * @return Propertyhaspropertystatus
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
     * Set propertystatusid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Propertystatus $propertystatusid
     * @return Propertyhaspropertystatus
     */
    public function setPropertystatusid(\Tracestay\Bundle\TracestayBundle\Entity\Propertystatus $propertystatusid)
    {
        $this->propertystatusid = $propertystatusid;

        return $this;
    }

    /**
     * Get propertystatusid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Propertystatus 
     */
    public function getPropertystatusid()
    {
        return $this->propertystatusid;
    }

    /**
     * Set propertyid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Property $propertyid
     * @return Propertyhaspropertystatus
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
}
