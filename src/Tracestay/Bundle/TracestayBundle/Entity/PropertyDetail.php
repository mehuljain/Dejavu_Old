<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-05-12 15:16:43.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\PropertyDetail
 *
 * @ORM\Entity(repositoryClass="PropertyDetailRepository")
 * @ORM\Table(name="propertyDetail", indexes={@ORM\Index(name="fk_propertyDetail_university1_idx", columns={"university_id"})})
 */
class PropertyDetail
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tPropertyDetailValue;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $university_id;

    /**
     * @ORM\OneToMany(targetEntity="Property", mappedBy="propertyDetail")
     * @ORM\JoinColumn(name="id", referencedColumnName="propertyDetail_id")
     */
    protected $properties;

    /**
     * @ORM\ManyToOne(targetEntity="University", inversedBy="propertyDetails")
     * @ORM\JoinColumn(name="university_id", referencedColumnName="id")
     */
    protected $university;

    public function __construct()
    {
        $this->properties = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\PropertyDetail
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
     * Set the value of tPropertyDetailValue.
     *
     * @param string $tPropertyDetailValue
     * @return \Entity\PropertyDetail
     */
    public function setTPropertyDetailValue($tPropertyDetailValue)
    {
        $this->tPropertyDetailValue = $tPropertyDetailValue;

        return $this;
    }

    /**
     * Get the value of tPropertyDetailValue.
     *
     * @return string
     */
    public function getTPropertyDetailValue()
    {
        return $this->tPropertyDetailValue;
    }

    /**
     * Set the value of university_id.
     *
     * @param integer $university_id
     * @return \Entity\PropertyDetail
     */
    public function setUniversityId($university_id)
    {
        $this->university_id = $university_id;

        return $this;
    }

    /**
     * Get the value of university_id.
     *
     * @return integer
     */
    public function getUniversityId()
    {
        return $this->university_id;
    }

    /**
     * Add Property entity to collection (one to many).
     *
     * @param \Entity\Property $property
     * @return \Entity\PropertyDetail
     */
    public function addProperty(Property $property)
    {
        $this->properties[] = $property;

        return $this;
    }

    /**
     * Remove Property entity from collection (one to many).
     *
     * @param \Entity\Property $property
     * @return \Entity\PropertyDetail
     */
    public function removeProperty(Property $property)
    {
        $this->properties->removeElement($property);

        return $this;
    }

    /**
     * Get Property entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Set University entity (many to one).
     *
     * @param \Entity\University $university
     * @return \Entity\PropertyDetail
     */
    public function setUniversity(University $university = null)
    {
        $this->university = $university;

        return $this;
    }

    /**
     * Get University entity (many to one).
     *
     * @return \Entity\University
     */
    public function getUniversity()
    {
        return $this->university;
    }

    public function __sleep()
    {
        return array('id', 'tPropertyDetailValue', 'university_id');
    }
}