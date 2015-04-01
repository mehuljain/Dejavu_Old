<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propertyhasbadge
 *
 * @ORM\Table(name="propertyHasBadge", indexes={@ORM\Index(name="fk_property_has_badge_badge1_idx", columns={"badgeId"}), @ORM\Index(name="fk_property_has_badge_property1_idx", columns={"propertyId"})})
 * @ORM\Entity
 */
class Propertyhasbadge
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
     * @var \Badge
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Badge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="badgeId", referencedColumnName="id")
     * })
     */
    private $badgeid;



    /**
     * Set id
     *
     * @param integer $id
     * @return Propertyhasbadge
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
     * Set badgeid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Badge $badgeid
     * @return Propertyhasbadge
     */
    public function setBadgeid(\Tracestay\Bundle\TracestayBundle\Entity\Badge $badgeid)
    {
        $this->badgeid = $badgeid;

        return $this;
    }

    /**
     * Get badgeid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Badge 
     */
    public function getBadgeid()
    {
        return $this->badgeid;
    }

    /**
     * Set propertyid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Property $propertyid
     * @return Propertyhasbadge
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
