<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Authenticationtype
 *
 * @ORM\Table(name="authenticationType")
 * @ORM\Entity
 */
class Authenticationtype
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
     * @ORM\Column(name="nNegotiate", type="integer", nullable=true)
     */
    private $nnegotiate;

    /**
     * @var integer
     *
     * @ORM\Column(name="nBasic", type="integer", nullable=true)
     */
    private $nbasic;



    /**
     * Set nnegotiate
     *
     * @param integer $nnegotiate
     * @return Authenticationtype
     */
    public function setNnegotiate($nnegotiate)
    {
        $this->nnegotiate = $nnegotiate;

        return $this;
    }

    /**
     * Get nnegotiate
     *
     * @return integer 
     */
    public function getNnegotiate()
    {
        return $this->nnegotiate;
    }

    /**
     * Set nbasic
     *
     * @param integer $nbasic
     * @return Authenticationtype
     */
    public function setNbasic($nbasic)
    {
        $this->nbasic = $nbasic;

        return $this;
    }

    /**
     * Get nbasic
     *
     * @return integer 
     */
    public function getNbasic()
    {
        return $this->nbasic;
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
