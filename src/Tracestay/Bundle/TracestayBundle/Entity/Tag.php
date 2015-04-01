<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity
 */
class Tag
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
     * @var string
     *
     * @ORM\Column(name="tTagName", type="string", length=255, nullable=true)
     */
    private $ttagname;

    /**
     * @var string
     *
     * @ORM\Column(name="tURL", type="string", length=255, nullable=true)
     */
    private $turl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dCreatedAt", type="datetime", nullable=true)
     */
    private $dcreatedat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dUpdatedAt", type="datetime", nullable=true)
     */
    private $dupdatedat;



    /**
     * Set ttagname
     *
     * @param string $ttagname
     * @return Tag
     */
    public function setTtagname($ttagname)
    {
        $this->ttagname = $ttagname;

        return $this;
    }

    /**
     * Get ttagname
     *
     * @return string 
     */
    public function getTtagname()
    {
        return $this->ttagname;
    }

    /**
     * Set turl
     *
     * @param string $turl
     * @return Tag
     */
    public function setTurl($turl)
    {
        $this->turl = $turl;

        return $this;
    }

    /**
     * Get turl
     *
     * @return string 
     */
    public function getTurl()
    {
        return $this->turl;
    }

    /**
     * Set dcreatedat
     *
     * @param \DateTime $dcreatedat
     * @return Tag
     */
    public function setDcreatedat($dcreatedat)
    {
        $this->dcreatedat = $dcreatedat;

        return $this;
    }

    /**
     * Get dcreatedat
     *
     * @return \DateTime 
     */
    public function getDcreatedat()
    {
        return $this->dcreatedat;
    }

    /**
     * Set dupdatedat
     *
     * @param \DateTime $dupdatedat
     * @return Tag
     */
    public function setDupdatedat($dupdatedat)
    {
        $this->dupdatedat = $dupdatedat;

        return $this;
    }

    /**
     * Get dupdatedat
     *
     * @return \DateTime 
     */
    public function getDupdatedat()
    {
        return $this->dupdatedat;
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
