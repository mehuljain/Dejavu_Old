<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propertyhasownershipstatus
 *
 * @ORM\Table(name="propertyHasOwnershipStatus", indexes={@ORM\Index(name="fk_property_has_ownership_status_ownership_status1_idx", columns={"ownershipStatusId"}), @ORM\Index(name="fk_property_has_ownership_status_property1_idx", columns={"propertyId"})})
 * @ORM\Entity
 */
class Propertyhasownershipstatus
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
     * @var \Ownershipstatus
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Ownershipstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ownershipStatusId", referencedColumnName="id")
     * })
     */
    private $ownershipstatusid;



    /**
     * Set id
     *
     * @param integer $id
     * @return Propertyhasownershipstatus
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
     * Set ownershipstatusid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Ownershipstatus $ownershipstatusid
     * @return Propertyhasownershipstatus
     */
    public function setOwnershipstatusid(\Tracestay\Bundle\TracestayBundle\Entity\Ownershipstatus $ownershipstatusid)
    {
        $this->ownershipstatusid = $ownershipstatusid;

        return $this;
    }

    /**
     * Get ownershipstatusid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Ownershipstatus 
     */
    public function getOwnershipstatusid()
    {
        return $this->ownershipstatusid;
    }

    /**
     * Set propertyid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Property $propertyid
     * @return Propertyhasownershipstatus
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
