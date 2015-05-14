<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-05-12 15:16:43.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */
namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\OwnershipStatusRecord
 *
 * @ORM\Entity(repositoryClass="OwnershipStatusRecordRepository")
 * @ORM\Table(name="ownershipStatusRecord", indexes={@ORM\Index(name="fk_ownershipStatusRecord_university1_idx", columns={"university_id"})})
 */
class OwnershipStatusRecord
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tOwnershipStatusValue;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $university_id;

    /**
     * @ORM\OneToMany(targetEntity="Property", mappedBy="ownershipStatusRecord")
     * @ORM\JoinColumn(name="id", referencedColumnName="ownershipStatusRecord_id")
     */
    protected $properties;

    /**
     * @ORM\ManyToOne(targetEntity="University", inversedBy="ownershipStatusRecords")
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
     * @return \Entity\OwnershipStatusRecord
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
     * Set the value of tOwnershipStatusValue.
     *
     * @param string $tOwnershipStatusValue
     * @return \Entity\OwnershipStatusRecord
     */
    public function setTOwnershipStatusValue($tOwnershipStatusValue)
    {
        $this->tOwnershipStatusValue = $tOwnershipStatusValue;

        return $this;
    }

    /**
     * Get the value of tOwnershipStatusValue.
     *
     * @return string
     */
    public function getTOwnershipStatusValue()
    {
        return $this->tOwnershipStatusValue;
    }

    /**
     * Set the value of university_id.
     *
     * @param integer $university_id
     * @return \Entity\OwnershipStatusRecord
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
     * @return \Entity\OwnershipStatusRecord
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
     * @return \Entity\OwnershipStatusRecord
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
     * @return \Entity\OwnershipStatusRecord
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
        return array('id', 'tOwnershipStatusValue', 'university_id');
    }
}