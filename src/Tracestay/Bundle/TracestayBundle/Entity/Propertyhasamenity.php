<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propertyhasamenity
 *
 * @ORM\Table(name="propertyHasAmenity", indexes={@ORM\Index(name="fk_property_has_amenity_amenity1_idx", columns={"amenityId"}), @ORM\Index(name="fk_property_has_amenity_property1_idx", columns={"propertyId"})})
 * @ORM\Entity
 */
class Propertyhasamenity
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
     * @var \Amenity
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Amenity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="amenityId", referencedColumnName="id")
     * })
     */
    private $amenityid;



    /**
     * Set id
     *
     * @param integer $id
     * @return Propertyhasamenity
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
     * Set amenityid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Amenity $amenityid
     * @return Propertyhasamenity
     */
    public function setAmenityid(\Tracestay\Bundle\TracestayBundle\Entity\Amenity $amenityid)
    {
        $this->amenityid = $amenityid;

        return $this;
    }

    /**
     * Get amenityid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Amenity 
     */
    public function getAmenityid()
    {
        return $this->amenityid;
    }

    /**
     * Set propertyid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Property $propertyid
     * @return Propertyhasamenity
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
