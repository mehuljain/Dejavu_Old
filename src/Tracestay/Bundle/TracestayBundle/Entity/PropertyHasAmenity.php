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
 * Entity\PropertyHasAmenity
 *
 * @ORM\Entity(repositoryClass="PropertyHasAmenityRepository")
 * @ORM\Table(name="propertyHasAmenity", indexes={@ORM\Index(name="fk_property_has_amenity_amenity1_idx", columns={"amenityId"}), @ORM\Index(name="fk_property_has_amenity_property1_idx", columns={"propertyId"})})
 */
class PropertyHasAmenity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $propertyId;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $amenityId;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Property", inversedBy="propertyHasAmenities")
     * @ORM\JoinColumn(name="propertyId", referencedColumnName="id")
     */
    protected $property;

    /**
     * @ORM\ManyToOne(targetEntity="Amenity", inversedBy="propertyHasAmenities")
     * @ORM\JoinColumn(name="amenityId", referencedColumnName="id")
     */
    protected $amenity;

    public function __construct()
    {
    }

    /**
     * Set the value of propertyId.
     *
     * @param integer $propertyId
     * @return \Entity\PropertyHasAmenity
     */
    public function setPropertyId($propertyId)
    {
        $this->propertyId = $propertyId;

        return $this;
    }

    /**
     * Get the value of propertyId.
     *
     * @return integer
     */
    public function getPropertyId()
    {
        return $this->propertyId;
    }

    /**
     * Set the value of amenityId.
     *
     * @param integer $amenityId
     * @return \Entity\PropertyHasAmenity
     */
    public function setAmenityId($amenityId)
    {
        $this->amenityId = $amenityId;

        return $this;
    }

    /**
     * Get the value of amenityId.
     *
     * @return integer
     */
    public function getAmenityId()
    {
        return $this->amenityId;
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\PropertyHasAmenity
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
     * @return \Entity\PropertyHasAmenity
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
     * Set Amenity entity (many to one).
     *
     * @param \Entity\Amenity $amenity
     * @return \Entity\PropertyHasAmenity
     */
    public function setAmenity(Amenity $amenity = null)
    {
        $this->amenity = $amenity;

        return $this;
    }

    /**
     * Get Amenity entity (many to one).
     *
     * @return \Entity\Amenity
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    public function __sleep()
    {
        return array('propertyId', 'amenityId', 'id');
    }
}