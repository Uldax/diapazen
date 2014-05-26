<?php

namespace Bdls\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place_Choice
 */
class Place_Choice
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var \Bdls\ProjetBundle\Entity\Place_Poll
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
     * Set latitude
     *
     * @param float $latitude
     * @return Place_Choice
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Place_Choice
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set poll
     *
     * @param \Bdls\ProjetBundle\Entity\Place_Poll $poll
     * @return Place_Choice
     */
    public function setPoll(\Bdls\ProjetBundle\Entity\Place_Poll $poll)
    {
        $this->poll = $poll;
    
        return $this;
    }

    /**
     * Get poll
     *
     * @return \Bdls\ProjetBundle\Entity\Place_Poll 
     */
    public function getPoll()
    {
        return $this->poll;
    }

    /**
     * Add votes
     *
     * @param \Bdls\ProjetBundle\Entity\Place_Vote $votes
     * @return Place_Choice
     */
    public function addVote(\Bdls\ProjetBundle\Entity\Place_Vote $votes)
    {
        $this->votes[] = $votes;
    
        return $this;
    }

    /**
     * Remove votes
     *
     * @param \Bdls\ProjetBundle\Entity\Place_Vote $votes
     */
    public function removeVote(\Bdls\ProjetBundle\Entity\Place_Vote $votes)
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
