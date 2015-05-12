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
 * Entity\Amenity
 *
 * @ORM\Entity(repositoryClass="AmenityRepository")
 * @ORM\Table(name="amenity", indexes={@ORM\Index(name="fk_amenity_university1_idx", columns={"university_id"})})
 */
class Amenity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $nAmenity;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $university_id;

    /**
     * @ORM\OneToMany(targetEntity="PropertyHasAmenity", mappedBy="amenity")
     * @ORM\JoinColumn(name="id", referencedColumnName="amenityId")
     */
    protected $propertyHasAmenities;

    /**
     * @ORM\ManyToOne(targetEntity="University", inversedBy="amenities")
     * @ORM\JoinColumn(name="university_id", referencedColumnName="id")
     */
    protected $university;

    public function __construct()
    {
        $this->propertyHasAmenities = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\Amenity
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
     * Set the value of nAmenity.
     *
     * @param integer $nAmenity
     * @return \Entity\Amenity
     */
    public function setNAmenity($nAmenity)
    {
        $this->nAmenity = $nAmenity;

        return $this;
    }

    /**
     * Get the value of nAmenity.
     *
     * @return integer
     */
    public function getNAmenity()
    {
        return $this->nAmenity;
    }

    /**
     * Set the value of university_id.
     *
     * @param integer $university_id
     * @return \Entity\Amenity
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
     * Add PropertyHasAmenity entity to collection (one to many).
     *
     * @param \Entity\PropertyHasAmenity $propertyHasAmenity
     * @return \Entity\Amenity
     */
    public function addPropertyHasAmenity(PropertyHasAmenity $propertyHasAmenity)
    {
        $this->propertyHasAmenities[] = $propertyHasAmenity;

        return $this;
    }

    /**
     * Remove PropertyHasAmenity entity from collection (one to many).
     *
     * @param \Entity\PropertyHasAmenity $propertyHasAmenity
     * @return \Entity\Amenity
     */
    public function removePropertyHasAmenity(PropertyHasAmenity $propertyHasAmenity)
    {
        $this->propertyHasAmenities->removeElement($propertyHasAmenity);

        return $this;
    }

    /**
     * Get PropertyHasAmenity entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPropertyHasAmenities()
    {
        return $this->propertyHasAmenities;
    }

    /**
     * Set University entity (many to one).
     *
     * @param \Entity\University $university
     * @return \Entity\Amenity
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
        return array('id', 'nAmenity', 'university_id');
    }
}