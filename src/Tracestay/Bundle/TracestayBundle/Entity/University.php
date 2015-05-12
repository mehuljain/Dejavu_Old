<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-05-12 13:31:19.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\University
 *
 * @ORM\Entity(repositoryClass="UniversityRepository")
 * @ORM\Table(name="university")
 */
class University
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tUniversityName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tSubdomainName;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $bAccountValidity;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $bBlacklisted;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $dCreatedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $dUpdatedAt;

    /**
     * @ORM\OneToMany(targetEntity="Admin", mappedBy="university")
     * @ORM\JoinColumn(name="id", referencedColumnName="university_id")
     */
    protected $admins;

    /**
     * @ORM\OneToMany(targetEntity="Authentication", mappedBy="university")
     * @ORM\JoinColumn(name="id", referencedColumnName="university_id")
     */
    protected $authentications;

    /**
     * @ORM\OneToMany(targetEntity="Campus", mappedBy="university")
     * @ORM\JoinColumn(name="id", referencedColumnName="university_id")
     */
    protected $campuses;

    /**
     * @ORM\OneToMany(targetEntity="Client", mappedBy="university")
     * @ORM\JoinColumn(name="id", referencedColumnName="university_id")
     */
    protected $clients;

    /**
     * @ORM\OneToMany(targetEntity="EmailTemplate", mappedBy="university")
     * @ORM\JoinColumn(name="id", referencedColumnName="university_id")
     */
    protected $emailTemplates;

    /**
     * @ORM\OneToMany(targetEntity="Invoice", mappedBy="university")
     * @ORM\JoinColumn(name="id", referencedColumnName="universityId")
     */
    protected $invoices;

    /**
     * @ORM\OneToMany(targetEntity="ListingSetting", mappedBy="university")
     * @ORM\JoinColumn(name="id", referencedColumnName="university_id")
     */
    protected $listingSettings;

    /**
     * @ORM\OneToMany(targetEntity="OwnershipStatusRecord", mappedBy="university")
     * @ORM\JoinColumn(name="id", referencedColumnName="university_id")
     */
    protected $ownershipStatusRecords;

    /**
     * @ORM\OneToOne(targetEntity="Plan", mappedBy="university")
     */
    protected $plan;

    /**
     * @ORM\OneToMany(targetEntity="PlanHistory", mappedBy="university")
     * @ORM\JoinColumn(name="id", referencedColumnName="universityId")
     */
    protected $planHistories;

    /**
     * @ORM\OneToMany(targetEntity="PropertyDetail", mappedBy="university")
     * @ORM\JoinColumn(name="id", referencedColumnName="university_id")
     */
    protected $propertyDetails;

    /**
     * @ORM\OneToMany(targetEntity="StudentApproval", mappedBy="university")
     * @ORM\JoinColumn(name="id", referencedColumnName="university_id")
     */
    protected $studentApprovals;

    /**
     * @ORM\OneToMany(targetEntity="WebsiteSetting", mappedBy="university")
     * @ORM\JoinColumn(name="id", referencedColumnName="university_id")
     */
    protected $websiteSettings;

    public function __construct()
    {
        $this->admins = new ArrayCollection();
        $this->authentications = new ArrayCollection();
        $this->campuses = new ArrayCollection();
        $this->clients = new ArrayCollection();
        $this->emailTemplates = new ArrayCollection();
        $this->invoices = new ArrayCollection();
        $this->listingSettings = new ArrayCollection();
        $this->ownershipStatusRecords = new ArrayCollection();
        $this->plans = new ArrayCollection();
        $this->planHistories = new ArrayCollection();
        $this->propertyDetails = new ArrayCollection();
        $this->studentApprovals = new ArrayCollection();
        $this->websiteSettings = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\University
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
     * Set the value of tUniversityName.
     *
     * @param string $tUniversityName
     * @return \Entity\University
     */
    public function setTUniversityName($tUniversityName)
    {
        $this->tUniversityName = $tUniversityName;

        return $this;
    }

    /**
     * Get the value of tUniversityName.
     *
     * @return string
     */
    public function getTUniversityName()
    {
        return $this->tUniversityName;
    }

    /**
     * Set the value of tSubdomainName.
     *
     * @param string $tSubdomainName
     * @return \Entity\University
     */
    public function setTSubdomainName($tSubdomainName)
    {
        $this->tSubdomainName = $tSubdomainName;

        return $this;
    }

    /**
     * Get the value of tSubdomainName.
     *
     * @return string
     */
    public function getTSubdomainName()
    {
        return $this->tSubdomainName;
    }

    /**
     * Set the value of bAccountValidity.
     *
     * @param boolean $bAccountValidity
     * @return \Entity\University
     */
    public function setBAccountValidity($bAccountValidity)
    {
        $this->bAccountValidity = $bAccountValidity;

        return $this;
    }

    /**
     * Get the value of bAccountValidity.
     *
     * @return boolean
     */
    public function getBAccountValidity()
    {
        return $this->bAccountValidity;
    }

    /**
     * Set the value of bBlacklisted.
     *
     * @param boolean $bBlacklisted
     * @return \Entity\University
     */
    public function setBBlacklisted($bBlacklisted)
    {
        $this->bBlacklisted = $bBlacklisted;

        return $this;
    }

    /**
     * Get the value of bBlacklisted.
     *
     * @return boolean
     */
    public function getBBlacklisted()
    {
        return $this->bBlacklisted;
    }

    /**
     * Set the value of dCreatedAt.
     *
     * @param \DateTime $dCreatedAt
     * @return \Entity\University
     */
    public function setDCreatedAt($dCreatedAt)
    {
        $this->dCreatedAt = $dCreatedAt;

        return $this;
    }

    /**
     * Get the value of dCreatedAt.
     *
     * @return \DateTime
     */
    public function getDCreatedAt()
    {
        return $this->dCreatedAt;
    }

    /**
     * Set the value of dUpdatedAt.
     *
     * @param \DateTime $dUpdatedAt
     * @return \Entity\University
     */
    public function setDUpdatedAt($dUpdatedAt)
    {
        $this->dUpdatedAt = $dUpdatedAt;

        return $this;
    }

    /**
     * Get the value of dUpdatedAt.
     *
     * @return \DateTime
     */
    public function getDUpdatedAt()
    {
        return $this->dUpdatedAt;
    }

    /**
     * Add Admin entity to collection (one to many).
     *
     * @param \Entity\Admin $admin
     * @return \Entity\University
     */
    public function addAdmin(Admin $admin)
    {
        $this->admins[] = $admin;

        return $this;
    }

    /**
     * Remove Admin entity from collection (one to many).
     *
     * @param \Entity\Admin $admin
     * @return \Entity\University
     */
    public function removeAdmin(Admin $admin)
    {
        $this->admins->removeElement($admin);

        return $this;
    }

    /**
     * Get Admin entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdmins()
    {
        return $this->admins;
    }

    /**
     * Add Authentication entity to collection (one to many).
     *
     * @param \Entity\Authentication $authentication
     * @return \Entity\University
     */
    public function addAuthentication(Authentication $authentication)
    {
        $this->authentications[] = $authentication;

        return $this;
    }

    /**
     * Remove Authentication entity from collection (one to many).
     *
     * @param \Entity\Authentication $authentication
     * @return \Entity\University
     */
    public function removeAuthentication(Authentication $authentication)
    {
        $this->authentications->removeElement($authentication);

        return $this;
    }

    /**
     * Get Authentication entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuthentications()
    {
        return $this->authentications;
    }

    /**
     * Add Campus entity to collection (one to many).
     *
     * @param \Entity\Campus $campus
     * @return \Entity\University
     */
    public function addCampus(Campus $campus)
    {
        $this->campuses[] = $campus;

        return $this;
    }

    /**
     * Remove Campus entity from collection (one to many).
     *
     * @param \Entity\Campus $campus
     * @return \Entity\University
     */
    public function removeCampus(Campus $campus)
    {
        $this->campuses->removeElement($campus);

        return $this;
    }

    /**
     * Get Campus entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCampuses()
    {
        return $this->campuses;
    }

    /**
     * Add Client entity to collection (one to many).
     *
     * @param \Entity\Client $client
     * @return \Entity\University
     */
    public function addClient(Client $client)
    {
        $this->clients[] = $client;

        return $this;
    }

    /**
     * Remove Client entity from collection (one to many).
     *
     * @param \Entity\Client $client
     * @return \Entity\University
     */
    public function removeClient(Client $client)
    {
        $this->clients->removeElement($client);

        return $this;
    }

    /**
     * Get Client entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * Add EmailTemplate entity to collection (one to many).
     *
     * @param \Entity\EmailTemplate $emailTemplate
     * @return \Entity\University
     */
    public function addEmailTemplate(EmailTemplate $emailTemplate)
    {
        $this->emailTemplates[] = $emailTemplate;

        return $this;
    }

    /**
     * Remove EmailTemplate entity from collection (one to many).
     *
     * @param \Entity\EmailTemplate $emailTemplate
     * @return \Entity\University
     */
    public function removeEmailTemplate(EmailTemplate $emailTemplate)
    {
        $this->emailTemplates->removeElement($emailTemplate);

        return $this;
    }

    /**
     * Get EmailTemplate entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmailTemplates()
    {
        return $this->emailTemplates;
    }

    /**
     * Add Invoice entity to collection (one to many).
     *
     * @param \Entity\Invoice $invoice
     * @return \Entity\University
     */
    public function addInvoice(Invoice $invoice)
    {
        $this->invoices[] = $invoice;

        return $this;
    }

    /**
     * Remove Invoice entity from collection (one to many).
     *
     * @param \Entity\Invoice $invoice
     * @return \Entity\University
     */
    public function removeInvoice(Invoice $invoice)
    {
        $this->invoices->removeElement($invoice);

        return $this;
    }

    /**
     * Get Invoice entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvoices()
    {
        return $this->invoices;
    }

    /**
     * Add ListingSetting entity to collection (one to many).
     *
     * @param \Entity\ListingSetting $listingSetting
     * @return \Entity\University
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
     * @return \Entity\University
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

    /**
     * Add OwnershipStatusRecord entity to collection (one to many).
     *
     * @param \Entity\OwnershipStatusRecord $ownershipStatusRecord
     * @return \Entity\University
     */
    public function addOwnershipStatusRecord(OwnershipStatusRecord $ownershipStatusRecord)
    {
        $this->ownershipStatusRecords[] = $ownershipStatusRecord;

        return $this;
    }

    /**
     * Remove OwnershipStatusRecord entity from collection (one to many).
     *
     * @param \Entity\OwnershipStatusRecord $ownershipStatusRecord
     * @return \Entity\University
     */
    public function removeOwnershipStatusRecord(OwnershipStatusRecord $ownershipStatusRecord)
    {
        $this->ownershipStatusRecords->removeElement($ownershipStatusRecord);

        return $this;
    }

    /**
     * Get OwnershipStatusRecord entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOwnershipStatusRecords()
    {
        return $this->ownershipStatusRecords;
    }

    /**
     * Set Plan entity (one to one).
     *
     * @param \Entity\Plan $plan
     * @return \Entity\University
     */
    public function setPlan(Plan $plan = null)
    {
        $plan->setUniversity($this);
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get Plan entity (one to one).
     *
     * @return \Entity\Plan
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Add PlanHistory entity to collection (one to many).
     *
     * @param \Entity\PlanHistory $planHistory
     * @return \Entity\University
     */
    public function addPlanHistory(PlanHistory $planHistory)
    {
        $this->planHistories[] = $planHistory;

        return $this;
    }

    /**
     * Remove PlanHistory entity from collection (one to many).
     *
     * @param \Entity\PlanHistory $planHistory
     * @return \Entity\University
     */
    public function removePlanHistory(PlanHistory $planHistory)
    {
        $this->planHistories->removeElement($planHistory);

        return $this;
    }

    /**
     * Get PlanHistory entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlanHistories()
    {
        return $this->planHistories;
    }

    /**
     * Add PropertyDetail entity to collection (one to many).
     *
     * @param \Entity\PropertyDetail $propertyDetail
     * @return \Entity\University
     */
    public function addPropertyDetail(PropertyDetail $propertyDetail)
    {
        $this->propertyDetails[] = $propertyDetail;

        return $this;
    }

    /**
     * Remove PropertyDetail entity from collection (one to many).
     *
     * @param \Entity\PropertyDetail $propertyDetail
     * @return \Entity\University
     */
    public function removePropertyDetail(PropertyDetail $propertyDetail)
    {
        $this->propertyDetails->removeElement($propertyDetail);

        return $this;
    }

    /**
     * Get PropertyDetail entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPropertyDetails()
    {
        return $this->propertyDetails;
    }

    /**
     * Add StudentApproval entity to collection (one to many).
     *
     * @param \Entity\StudentApproval $studentApproval
     * @return \Entity\University
     */
    public function addStudentApproval(StudentApproval $studentApproval)
    {
        $this->studentApprovals[] = $studentApproval;

        return $this;
    }

    /**
     * Remove StudentApproval entity from collection (one to many).
     *
     * @param \Entity\StudentApproval $studentApproval
     * @return \Entity\University
     */
    public function removeStudentApproval(StudentApproval $studentApproval)
    {
        $this->studentApprovals->removeElement($studentApproval);

        return $this;
    }

    /**
     * Get StudentApproval entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudentApprovals()
    {
        return $this->studentApprovals;
    }

    /**
     * Add WebsiteSetting entity to collection (one to many).
     *
     * @param \Entity\WebsiteSetting $websiteSetting
     * @return \Entity\University
     */
    public function addWebsiteSetting(WebsiteSetting $websiteSetting)
    {
        $this->websiteSettings[] = $websiteSetting;

        return $this;
    }

    /**
     * Remove WebsiteSetting entity from collection (one to many).
     *
     * @param \Entity\WebsiteSetting $websiteSetting
     * @return \Entity\University
     */
    public function removeWebsiteSetting(WebsiteSetting $websiteSetting)
    {
        $this->websiteSettings->removeElement($websiteSetting);

        return $this;
    }

    /**
     * Get WebsiteSetting entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWebsiteSettings()
    {
        return $this->websiteSettings;
    }

    public function __sleep()
    {
        return array('id', 'tUniversityName', 'tSubdomainName', 'bAccountValidity', 'bBlacklisted', 'dCreatedAt', 'dUpdatedAt');
    }
}