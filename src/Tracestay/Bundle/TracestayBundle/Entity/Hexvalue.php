<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hexvalue
 *
 * @ORM\Table(name="hexValue")
 * @ORM\Entity
 */
class Hexvalue
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
     * @ORM\Column(name="nHeaderColor", type="integer", nullable=true)
     */
    private $nheadercolor;

    /**
     * @var integer
     *
     * @ORM\Column(name="nFooterColor", type="integer", nullable=true)
     */
    private $nfootercolor;

    /**
     * @var integer
     *
     * @ORM\Column(name="nBackgroundColor", type="integer", nullable=true)
     */
    private $nbackgroundcolor;

    /**
     * @var integer
     *
     * @ORM\Column(name="nFontColor", type="integer", nullable=true)
     */
    private $nfontcolor;



    /**
     * Set nheadercolor
     *
     * @param integer $nheadercolor
     * @return Hexvalue
     */
    public function setNheadercolor($nheadercolor)
    {
        $this->nheadercolor = $nheadercolor;

        return $this;
    }

    /**
     * Get nheadercolor
     *
     * @return integer 
     */
    public function getNheadercolor()
    {
        return $this->nheadercolor;
    }

    /**
     * Set nfootercolor
     *
     * @param integer $nfootercolor
     * @return Hexvalue
     */
    public function setNfootercolor($nfootercolor)
    {
        $this->nfootercolor = $nfootercolor;

        return $this;
    }

    /**
     * Get nfootercolor
     *
     * @return integer 
     */
    public function getNfootercolor()
    {
        return $this->nfootercolor;
    }

    /**
     * Set nbackgroundcolor
     *
     * @param integer $nbackgroundcolor
     * @return Hexvalue
     */
    public function setNbackgroundcolor($nbackgroundcolor)
    {
        $this->nbackgroundcolor = $nbackgroundcolor;

        return $this;
    }

    /**
     * Get nbackgroundcolor
     *
     * @return integer 
     */
    public function getNbackgroundcolor()
    {
        return $this->nbackgroundcolor;
    }

    /**
     * Set nfontcolor
     *
     * @param integer $nfontcolor
     * @return Hexvalue
     */
    public function setNfontcolor($nfontcolor)
    {
        $this->nfontcolor = $nfontcolor;

        return $this;
    }

    /**
     * Get nfontcolor
     *
     * @return integer 
     */
    public function getNfontcolor()
    {
        return $this->nfontcolor;
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
