<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-05-12 15:16:43.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */
namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\PropertyHasRoomType
 *
 * @ORM\Entity(repositoryClass="PropertyHasRoomTypeRepository")
 * @ORM\Table(name="propertyHasRoomType", indexes={@ORM\Index(name="fk_property_has_room_type_room_type1_idx", columns={"room_type_id"}), @ORM\Index(name="fk_property_has_room_type_property1_idx", columns={"property_id"})})
 */
class PropertyHasRoomType
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $property_id;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $room_type_id;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Property", inversedBy="propertyHasRoomTypes")
     * @ORM\JoinColumn(name="property_id", referencedColumnName="id")
     */
    protected $property;

    /**
     * @ORM\ManyToOne(targetEntity="RoomType", inversedBy="propertyHasRoomTypes")
     * @ORM\JoinColumn(name="room_type_id", referencedColumnName="id")
     */
    protected $roomType;

    public function __construct()
    {
    }

    /**
     * Set the value of property_id.
     *
     * @param integer $property_id
     * @return \Entity\PropertyHasRoomType
     */
    public function setPropertyId($property_id)
    {
        $this->property_id = $property_id;

        return $this;
    }

    /**
     * Get the value of property_id.
     *
     * @return integer
     */
    public function getPropertyId()
    {
        return $this->property_id;
    }

    /**
     * Set the value of room_type_id.
     *
     * @param integer $room_type_id
     * @return \Entity\PropertyHasRoomType
     */
    public function setRoomTypeId($room_type_id)
    {
        $this->room_type_id = $room_type_id;

        return $this;
    }

    /**
     * Get the value of room_type_id.
     *
     * @return integer
     */
    public function getRoomTypeId()
    {
        return $this->room_type_id;
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\PropertyHasRoomType
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Property entity (many to one).
     *
     * @param \Entity\Property $property
     * @return \Entity\PropertyHasRoomType
     */
    public function setProperty(Property $property = null)
    {
        $this->property = $property;

        return $this;
    }

    /**
     * Get Property entity (many to one).
     *
     * @return \Entity\Property
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Set RoomType entity (many to one).
     *
     * @param \Entity\RoomType $roomType
     * @return \Entity\PropertyHasRoomType
     */
    public function setRoomType(RoomType $roomType = null)
    {
        $this->roomType = $roomType;

        return $this;
    }

    /**
     * Get RoomType entity (many to one).
     *
     * @return \Entity\RoomType
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    public function __sleep()
    {
        return array('property_id', 'room_type_id', 'id');
    }
}