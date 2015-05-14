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
 * Entity\PropertyHasBadge
 *
 * @ORM\Entity(repositoryClass="PropertyHasBadgeRepository")
 * @ORM\Table(name="propertyHasBadge", indexes={@ORM\Index(name="fk_property_has_badge_badge1_idx", columns={"badgeId"}), @ORM\Index(name="fk_property_has_badge_property1_idx", columns={"propertyId"})})
 */
class PropertyHasBadge
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
    protected $badgeId;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Property", inversedBy="propertyHasBadges")
     * @ORM\JoinColumn(name="propertyId", referencedColumnName="id")
     */
    protected $property;

    /**
     * @ORM\ManyToOne(targetEntity="Badge", inversedBy="propertyHasBadges")
     * @ORM\JoinColumn(name="badgeId", referencedColumnName="id")
     */
    protected $badge;

    public function __construct()
    {
    }

    /**
     * Set the value of propertyId.
     *
     * @param integer $propertyId
     * @return \Entity\PropertyHasBadge
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
     * Set the value of badgeId.
     *
     * @param integer $badgeId
     * @return \Entity\PropertyHasBadge
     */
    public function setBadgeId($badgeId)
    {
        $this->badgeId = $badgeId;

        return $this;
    }

    /**
     * Get the value of badgeId.
     *
     * @return integer
     */
    public function getBadgeId()
    {
        return $this->badgeId;
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\PropertyHasBadge
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
     * @return \Entity\PropertyHasBadge
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
     * Set Badge entity (many to one).
     *
     * @param \Entity\Badge $badge
     * @return \Entity\PropertyHasBadge
     */
    public function setBadge(Badge $badge = null)
    {
        $this->badge = $badge;

        return $this;
    }

    /**
     * Get Badge entity (many to one).
     *
     * @return \Entity\Badge
     */
    public function getBadge()
    {
        return $this->badge;
    }

    public function __sleep()
    {
        return array('propertyId', 'badgeId', 'id');
    }
}