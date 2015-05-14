<?php

namespace Tracestay\Bundle\TracestayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Client
 *
 * @ORM\Table(name="client", uniqueConstraints={@ORM\UniqueConstraint(name="university_id_UNIQUE", columns={"universityId"})})
 * @ORM\Entity
 */
class Client extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @Assert\Valid()
     * @ORM\ManyToOne(targetEntity="University", inversedBy="Client")
     * @ORM\JoinColumn(name="UniversityId", referencedColumnName="id")
     */
    private $university;
    
    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *                  min=3,
     *                  max=15,
     *                  minMessage= "First Name Field should contains at least 3 characters",
     *                  maxMessage = "First Name Field Cannot contain more than 15 characters"
     *               )
     * @Assert\Regex(pattern="/[^a-z\s-]/i", match=false , message="First name can only contain letters")
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *                  min = 3,
     *                  max = 15,
     *                  minMessage = "Last Name field must contain atleast 3 characters",
     *                  maxMessage = "Last Name Field Cannot contain more than 15 characters"
     *              )
     * @Assert\Regex(pattern="/[^a-z\s-]/i", match=false, message = "Last Name field can only contain letters")
     */
    private $lastName;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *                 min = 3,
     *                 max = 15,
     *                 minMessage = "User Name field must contain atleast 3 characters",
     *                 maxMessage = "User Name field cannot contain more than 15 characters"
     *              )
     * @Assert\Type(type="alnum", message="User Name can contain only alphabets and numbers")
     */
    protected $username;

    /**
     * @var string
     * @Assert\NotBlank
     * @Assert\Length(
     *                 min = 3,
     *                 minMessage = "Password must contain atleast 3 characters"
     *              )
     */
    protected $password;
    

    /**
     * @var string
     *
     * @Assert\NotBlank
     * @Assert\Email
     */
    //@Assert\Regex(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/)
    protected $email;

    /**
     * @ORM\Column(name="phone", type="string", length=255)
     * 
     * @Assert\NotBlank
     * @Assert\Length(
     *                 min = 6,
     *                 max = 15,
     *                 minMessage = "Phone number must contain atleast 6 characters",
     *                 maxMessage = "Phone numbers cannot contain more than 15 characters"
     *              )
     * @Assert\Type(type="int", message="Phone numbers only contain numbers")
     */
    private $phone;
    
     /**
     * @ORM\Column(name="altPhone", type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *                 min = 6,
     *                 max = 15,
     *                 minMessage = "Phone number must contain atleast 6 characters",
     *                 maxMessage = "Phone numbers cannot contain more than 15 characters"
     *              )
     * @Assert\Type(type="int", message="Pone numbers can only contain numbers")
     */
    private $altPhone;
    
    /**
     * @var string 
     * 
     * @ORM\Column(name="address", type="string", length=255)
     * 
     * @Assert\NotBlank
     * @Assert\Length(
     *                 min = 0,
     *                 max = 20,
     *                 maxMessage = "Address cannot contain more than 20 characters"
     *              )
     */
    private $address;
    
    /**
     * @var integer
     * @ORM\Column(name="Country", type="integer")
     */
    private $country;
    

    /**
     * Set id
     *
     * @param integer $id
     * @return Client
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
     * Set firstName
     *
     * @param string $firstName
     * @return Client
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Client
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set country
     *
     * @param integer $country
     * @return University
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return integer 
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    /**
     * Set university
     *
     * @param integer $university
     * @return Client
     */
    public function setUniversity($university)
    {
        $this->university = $university;

        return $this;
    }

    /**
     * Get university
     *
     * @return integer 
     */
    public function getUniversity()
    {
        return $this->university;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Client
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Client
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set altPhone
     *
     * @param string $altPhone
     * @return Client
     */
    public function setAltPhone($altPhone)
    {
        $this->altPhone = $altPhone;

        return $this;
    }

    /**
     * Get altPhone
     *
     * @return string 
     */
    public function getAltPhone()
    {
        return $this->altPhone;
    }
}
