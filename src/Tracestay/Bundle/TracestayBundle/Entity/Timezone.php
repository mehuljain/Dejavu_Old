<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timezone
 *
 * @ORM\Table(name="timeZone")
 * @ORM\Entity
 */
class Timezone
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="nTimeZone", type="integer", nullable=true)
     */
    private $ntimezone;



    /**
     * Set ntimezone
     *
     * @param integer $ntimezone
     * @return Timezone
     */
    public function setNtimezone($ntimezone)
    {
        $this->ntimezone = $ntimezone;

        return $this;
    }

    /**
     * Get ntimezone
     *
     * @return integer 
     */
    public function getNtimezone()
    {
        return $this->ntimezone;
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
}
