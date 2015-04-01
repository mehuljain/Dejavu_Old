<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propertyhastags
 *
 * @ORM\Table(name="propertyHasTags", indexes={@ORM\Index(name="fk_property_has_tag_tag1_idx", columns={"tagId"}), @ORM\Index(name="fk_property_has_tag_property1_idx", columns={"propertyId"})})
 * @ORM\Entity
 */
class Propertyhastags
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
     * @var \Tag
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Tag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tagId", referencedColumnName="id")
     * })
     */
    private $tagid;



    /**
     * Set id
     *
     * @param integer $id
     * @return Propertyhastags
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
     * Set tagid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Tag $tagid
     * @return Propertyhastags
     */
    public function setTagid(\Tracestay\Bundle\TracestayBundle\Entity\Tag $tagid)
    {
        $this->tagid = $tagid;

        return $this;
    }

    /**
     * Get tagid
     *
     * @return \Tracestay\Bundle\TracestayBundle\Entity\Tag 
     */
    public function getTagid()
    {
        return $this->tagid;
    }

    /**
     * Set propertyid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Property $propertyid
     * @return Propertyhastags
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
