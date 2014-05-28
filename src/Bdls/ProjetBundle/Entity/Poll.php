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
        
        /** @ORM\ManyToOne(targetEntity="User")
	    @ORM\JoinColumn(nullable=false) 
         */
	private $created_by;

        /** @ORM\Column(type="text")*/
	private $name;

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
}
