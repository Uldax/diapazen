<?php

namespace Bdls\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Date_Choice
 */
class Date_Choice
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \Bdls\ProjetBundle\Entity\Date_Poll
     */
    private $poll;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $votes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->votes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set date
     *
     * @param \DateTime $date
     * @return Date_Choice
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set poll
     *
     * @param \Bdls\ProjetBundle\Entity\Date_Poll $poll
     * @return Date_Choice
     */
    public function setPoll(\Bdls\ProjetBundle\Entity\Date_Poll $poll)
    {
        $this->poll = $poll;
    
        return $this;
    }

    /**
     * Get poll
     *
     * @return \Bdls\ProjetBundle\Entity\Date_Poll 
     */
    public function getPoll()
    {
        return $this->poll;
    }

    /**
     * Add votes
     *
     * @param \Bdls\ProjetBundle\Entity\Date_Vote $votes
     * @return Date_Choice
     */
    public function addVote(\Bdls\ProjetBundle\Entity\Date_Vote $votes)
    {
        $this->votes[] = $votes;
    
        return $this;
    }

    /**
     * Remove votes
     *
     * @param \Bdls\ProjetBundle\Entity\Date_Vote $votes
     */
    public function removeVote(\Bdls\ProjetBundle\Entity\Date_Vote $votes)
    {
        $this->votes->removeElement($votes);
    }

    /**
     * Get votes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVotes()
    {
        return $this->votes;
    }
}
