<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emailtemplates
 *
 * @ORM\Table(name="emailTemplates")
 * @ORM\Entity
 */
class Emailtemplates
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
     * @ORM\Column(name="universityId", type="integer", nullable=false)
     */
    private $universityid;

    /**
     * @var string
     *
     * @ORM\Column(name="tTemplateName", type="string", length=255, nullable=true)
     */
    private $ttemplatename;

    /**
     * @var string
     *
     * @ORM\Column(name="tTemplateContent", type="text", nullable=true)
     */
    private $ttemplatecontent;

    /**
     * @var string
     *
     * @ORM\Column(name="tDefaultEmail", type="text", nullable=true)
     */
    private $tdefaultemail;

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
     * Set universityid
     *
     * @param integer $universityid
     * @return Emailtemplates
     */
    public function setUniversityid($universityid)
    {
        $this->universityid = $universityid;

        return $this;
    }

    /**
     * Get universityid
     *
     * @return integer 
     */
    public function getUniversityid()
    {
        return $this->universityid;
    }

    /**
     * Set ttemplatename
     *
     * @param string $ttemplatename
     * @return Emailtemplates
     */
    public function setTtemplatename($ttemplatename)
    {
        $this->ttemplatename = $ttemplatename;

        return $this;
    }

    /**
     * Get ttemplatename
     *
     * @return string 
     */
    public function getTtemplatename()
    {
        return $this->ttemplatename;
    }

    /**
     * Set ttemplatecontent
     *
     * @param string $ttemplatecontent
     * @return Emailtemplates
     */
    public function setTtemplatecontent($ttemplatecontent)
    {
        $this->ttemplatecontent = $ttemplatecontent;

        return $this;
    }

    /**
     * Get ttemplatecontent
     *
     * @return string 
     */
    public function getTtemplatecontent()
    {
        return $this->ttemplatecontent;
    }

    /**
     * Set tdefaultemail
     *
     * @param string $tdefaultemail
     * @return Emailtemplates
     */
    public function setTdefaultemail($tdefaultemail)
    {
        $this->tdefaultemail = $tdefaultemail;

        return $this;
    }

    /**
     * Get tdefaultemail
     *
     * @return string 
     */
    public function getTdefaultemail()
    {
        return $this->tdefaultemail;
    }

    /**
     * Set dcreatedat
     *
     * @param \DateTime $dcreatedat
     * @return Emailtemplates
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
     * @return Emailtemplates
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
