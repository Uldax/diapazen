<?php

namespace Bdls\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Date_Poll
 */
class Date_Poll
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $created_on;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $choices;

    /**
     * @var \Bdls\ProjetBundle\Entity\User
     */
    private $created_by;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->choices = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set created_on
     *
     * @param \DateTime $createdOn
     * @return Date_Poll
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
     * @return Date_Poll
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
     * Add choices
     *
     * @param \Bdls\ProjetBundle\Entity\Date_Choice $choices
     * @return Date_Poll
     */
    public function addChoice(\Bdls\ProjetBundle\Entity\Date_Choice $choices)
    {
        $this->choices[] = $choices;
    
        return $this;
    }

    /**
     * Remove choices
     *
     * @param \Bdls\ProjetBundle\Entity\Date_Choice $choices
     */
    public function removeChoice(\Bdls\ProjetBundle\Entity\Date_Choice $choices)
    {
        $this->choices->removeElement($choices);
    }

    /**
     * Get choices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChoices()
    {
        return $this->choices;
    }

    /**
     * Set created_by
     *
     * @param \Bdls\ProjetBundle\Entity\User $createdBy
     * @return Date_Poll
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
}
