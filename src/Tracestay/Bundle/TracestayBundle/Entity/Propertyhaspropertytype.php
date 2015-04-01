<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propertyhaspropertytype
 *
 * @ORM\Table(name="propertyHasPropertyType", indexes={@ORM\Index(name="fk_property_has_property_type_property_type1_idx", columns={"propertyTypeId"}), @ORM\Index(name="fk_property_has_property_type_property1_idx", columns={"propertyId"})})
 * @ORM\Entity
 */
class Propertyhaspropertytype
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
     * @var \Propertytype
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Propertytype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="propertyTypeId", referencedColumnName="id")
     * })
     */
    private $propertytypeid;



    /**
     * Set id
     *
     * @param integer $id
     * @return Propertyhaspropertytype
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
     * Set propertytypeid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Propertytype $propertytypeid
     * @return Propertyhaspropertytype
     */
    public function setPropertytypeid(\Tracestay\Bundle\TracestayBundle\Entity\Propertytype $propertytypeid)
    {
        $this->propertytypeid = $propertytypeid;

        return $this;
    }

    /**
     * Get propertytypeid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Propertytype 
     */
    public function getPropertytypeid()
    {
        return $this->propertytypeid;
    }

    /**
     * Set propertyid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Property $propertyid
     * @return Propertyhaspropertytype
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
