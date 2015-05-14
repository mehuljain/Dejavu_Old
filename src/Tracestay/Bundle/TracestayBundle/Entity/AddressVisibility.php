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
 * Entity\AddressVisibility
 *
 * @ORM\Entity(repositoryClass="AddressVisibilityRepository")
 * @ORM\Table(name="addressVisibility")
 */
class AddressVisibility
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nShowDetails;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nHideDetails;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nUserDesides;

    /**
     * @ORM\OneToMany(targetEntity="ListingSetting", mappedBy="addressVisibility")
     * @ORM\JoinColumn(name="id", referencedColumnName="addressVisibilityId")
     */
    protected $listingSettings;

    public function __construct()
    {
        $this->listingSettings = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\AddressVisibility
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
     * Set the value of nShowDetails.
     *
     * @param integer $nShowDetails
     * @return \Entity\AddressVisibility
     */
    public function setNShowDetails($nShowDetails)
    {
        $this->nShowDetails = $nShowDetails;

        return $this;
    }

    /**
     * Get the value of nShowDetails.
     *
     * @return integer
     */
    public function getNShowDetails()
    {
        return $this->nShowDetails;
    }

    /**
     * Set the value of nHideDetails.
     *
     * @param integer $nHideDetails
     * @return \Entity\AddressVisibility
     */
    public function setNHideDetails($nHideDetails)
    {
        $this->nHideDetails = $nHideDetails;

        return $this;
    }

    /**
     * Get the value of nHideDetails.
     *
     * @return integer
     */
    public function getNHideDetails()
    {
        return $this->nHideDetails;
    }

    /**
     * Set the value of nUserDesides.
     *
     * @param integer $nUserDesides
     * @return \Entity\AddressVisibility
     */
    public function setNUserDesides($nUserDesides)
    {
        $this->nUserDesides = $nUserDesides;

        return $this;
    }

    /**
     * Get the value of nUserDesides.
     *
     * @return integer
     */
    public function getNUserDesides()
    {
        return $this->nUserDesides;
    }

    /**
     * Add ListingSetting entity to collection (one to many).
     *
     * @param \Entity\ListingSetting $listingSetting
     * @return \Entity\AddressVisibility
     */
    public function addListingSetting(ListingSetting $listingSetting)
    {
        $this->listingSettings[] = $listingSetting;

        return $this;
    }

    /**
     * Remove ListingSetting entity from collection (one to many).
     *
     * @param \Entity\ListingSetting $listingSetting
     * @return \Entity\AddressVisibility
     */
    public function removeListingSetting(ListingSetting $listingSetting)
    {
        $this->listingSettings->removeElement($listingSetting);

        return $this;
    }

    /**
     * Get ListingSetting entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListingSettings()
    {
        return $this->listingSettings;
    }

    public function __sleep()
    {
        return array('id', 'nShowDetails', 'nHideDetails', 'nUserDesides');
    }
}