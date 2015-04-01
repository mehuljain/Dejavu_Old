<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hostlanguage
 *
 * @ORM\Table(name="hostLanguage", indexes={@ORM\Index(name="fk_property_has_host_language_property1_idx", columns={"propertyId"})})
 * @ORM\Entity
 */
class Hostlanguage
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
     * @var integer
     *
     * @ORM\Column(name="hostLanguageId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $hostlanguageid;

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
     * Set id
     *
     * @param integer $id
     * @return Hostlanguage
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
     * Set hostlanguageid
     *
     * @param integer $hostlanguageid
     * @return Hostlanguage
     */
    public function setHostlanguageid($hostlanguageid)
    {
        $this->hostlanguageid = $hostlanguageid;

        return $this;
    }

    /**
     * Get hostlanguageid
     *
     * @return integer 
     */
    public function getHostlanguageid()
    {
        return $this->hostlanguageid;
    }

    /**
     * Set propertyid
     *
     * @param \Tracestay\Bundle\TracestayBundle\Entity\Property $propertyid
     * @return Hostlanguage
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
