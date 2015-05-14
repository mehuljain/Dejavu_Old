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
 * Entity\PropertyHasPropertyStatus
 *
 * @ORM\Entity(repositoryClass="PropertyHasPropertyStatusRepository")
 * @ORM\Table(name="propertyHasPropertyStatus", indexes={@ORM\Index(name="fk_property_has_property_status_property_status1_idx", columns={"propertyStatusId"}), @ORM\Index(name="fk_property_has_property_status_property1_idx", columns={"propertyId"})})
 */
class PropertyHasPropertyStatus
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
    protected $propertyStatusId;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Property", inversedBy="propertyHasPropertyStatuses")
     * @ORM\JoinColumn(name="propertyId", referencedColumnName="id")
     */
    protected $property;

    /**
     * @ORM\ManyToOne(targetEntity="PropertyStatus", inversedBy="propertyHasPropertyStatuses")
     * @ORM\JoinColumn(name="propertyStatusId", referencedColumnName="id")
     */
    protected $propertyStatus;

    public function __construct()
    {
    }

    /**
     * Set the value of propertyId.
     *
     * @param integer $propertyId
     * @return \Entity\PropertyHasPropertyStatus
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
     * Set the value of propertyStatusId.
     *
     * @param integer $propertyStatusId
     * @return \Entity\PropertyHasPropertyStatus
     */
    public function setPropertyStatusId($propertyStatusId)
    {
        $this->propertyStatusId = $propertyStatusId;

        return $this;
    }

    /**
     * Get the value of propertyStatusId.
     *
     * @return integer
     */
    public function getPropertyStatusId()
    {
        return $this->propertyStatusId;
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\PropertyHasPropertyStatus
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
     * @return \Entity\PropertyHasPropertyStatus
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
     * Set PropertyStatus entity (many to one).
     *
     * @param \Entity\PropertyStatus $propertyStatus
     * @return \Entity\PropertyHasPropertyStatus
     */
    public function setPropertyStatus(PropertyStatus $propertyStatus = null)
    {
        $this->propertyStatus = $propertyStatus;

        return $this;
    }

    /**
     * Get PropertyStatus entity (many to one).
     *
     * @return \Entity\PropertyStatus
     */
    public function getPropertyStatus()
    {
        return $this->propertyStatus;
    }

    public function __sleep()
    {
        return array('propertyId', 'propertyStatusId', 'id');
    }
}