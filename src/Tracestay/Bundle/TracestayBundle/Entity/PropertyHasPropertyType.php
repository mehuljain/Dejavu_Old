<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-05-12 15:16:43.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\PropertyHasPropertyType
 *
 * @ORM\Entity(repositoryClass="PropertyHasPropertyTypeRepository")
 * @ORM\Table(name="propertyHasPropertyType", indexes={@ORM\Index(name="fk_property_has_property_type_property_type1_idx", columns={"propertyTypeId"}), @ORM\Index(name="fk_property_has_property_type_property1_idx", columns={"propertyId"})})
 */
class PropertyHasPropertyType
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
    protected $propertyTypeId;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Property", inversedBy="propertyHasPropertyTypes")
     * @ORM\JoinColumn(name="propertyId", referencedColumnName="id")
     */
    protected $property;

    /**
     * @ORM\ManyToOne(targetEntity="PropertyType", inversedBy="propertyHasPropertyTypes")
     * @ORM\JoinColumn(name="propertyTypeId", referencedColumnName="id")
     */
    protected $propertyType;

    public function __construct()
    {
    }

    /**
     * Set the value of propertyId.
     *
     * @param integer $propertyId
     * @return \Entity\PropertyHasPropertyType
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
     * Set the value of propertyTypeId.
     *
     * @param integer $propertyTypeId
     * @return \Entity\PropertyHasPropertyType
     */
    public function setPropertyTypeId($propertyTypeId)
    {
        $this->propertyTypeId = $propertyTypeId;

        return $this;
    }

    /**
     * Get the value of propertyTypeId.
     *
     * @return integer
     */
    public function getPropertyTypeId()
    {
        return $this->propertyTypeId;
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\PropertyHasPropertyType
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
     * @return \Entity\PropertyHasPropertyType
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
     * Set PropertyType entity (many to one).
     *
     * @param \Entity\PropertyType $propertyType
     * @return \Entity\PropertyHasPropertyType
     */
    public function setPropertyType(PropertyType $propertyType = null)
    {
        $this->propertyType = $propertyType;

        return $this;
    }

    /**
     * Get PropertyType entity (many to one).
     *
     * @return \Entity\PropertyType
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    public function __sleep()
    {
        return array('propertyId', 'propertyTypeId', 'id');
    }
}