<?php

namespace Bdls\ProjetBundle\Entity;

use Bdls\ProjetBundle\Entity\User as User;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class Poll
{
	/** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue */
	private $id;

	/** @ORM\Column(type="datetime") */
	private $created_on;
        
	/** @ORM\Column(type="datetime") */
	private $closed_on;
        
        /** @ORM\ManyToOne(targetEntity="User")
	    @ORM\JoinColumn(nullable=false) 
         */
	private $created_by;

        /** @ORM\Column(type="text")*/
	private $name;

        /** @ORM\Column(type="text")*/
	private $description;

	/** @ORM\Column(type="boolean")*/
	private $is_open;

    /** @ORM\Column(type="string") */
    private $url;


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
     * Set created_on
     *
     * @param \DateTime $createdOn
     * @return Poll
     */
    public function setCreatedOn($createdOn)
    {
        $this->created_on = $createdOn;

        return $this;
    }

    /**
     * Get created_on
     *
     * @return \DateTime 
     */
    public function getCreatedOn()
    {
        return $this->created_on;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Poll
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set created_by
     *
     * @param \Bdls\ProjetBundle\Entity\User $createdBy
     * @return Poll
     */
    public function setCreatedBy(\Bdls\ProjetBundle\Entity\User $createdBy)
    {
        $this->created_by = $createdBy;

        return $this;
    }

    /**
     * Get created_by
     *
     * @return \Bdls\ProjetBundle\Entity\User 
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Set closed_on
     *
     * @param \DateTime $closedOn
     * @return Poll
     */
    public function setClosedOn($closedOn)
    {
        $this->closed_on = $closedOn;

        return $this;
    }

    /**
     * Get closed_on
     *
     * @return \DateTime 
     */
    public function getClosedOn()
    {
        return $this->closed_on;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Poll
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set is_open
     *
     * @param boolean $isOpen
     * @return Poll
     */
    public function setIsOpen($isOpen)
    {
        $this->is_open = $isOpen;

        return $this;
    }

    /**
     * Get is_open
     *
     * @return boolean 
     */
    public function getIsOpen()
    {
        return $this->is_open;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Poll
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }
}
