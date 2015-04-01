<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propertyhasroomtype
 *
 * @ORM\Table(name="propertyHasRoomType", indexes={@ORM\Index(name="fk_property_has_room_type_room_type1_idx", columns={"room_type_id"}), @ORM\Index(name="fk_property_has_room_type_property1_idx", columns={"property_id"})})
 * @ORM\Entity
 */
class Propertyhasroomtype
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
     *   @ORM\JoinColumn(name="property_id", referencedColumnName="id")
     * })
     */
    private $property;

    /**
     * @var \Roomtype
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Roomtype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="room_type_id", referencedColumnName="id")
     * })
     */
    private $roomType;



    /**
     * Set id
     *
     * @param integer $id
     * @return Propertyhasroomtype
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
     * Set roomType
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Roomtype $roomType
     * @return Propertyhasroomtype
     */
    public function setRoomType(\Tracestay\Bundle\TracestayBundle\Entity\Roomtype $roomType)
    {
        $this->roomType = $roomType;

        return $this;
    }

    /**
     * Get roomType
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Roomtype 
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Set property
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Property $property
     * @return Propertyhasroomtype
     */
    public function setProperty(\Tracestay\Bundle\TracestayBundle\Entity\Property $property)
    {
        $this->property = $property;

        return $this;
    }

    /**
     * Get property
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Property 
     */
    public function getProperty()
    {
        return $this->property;
    }
}
