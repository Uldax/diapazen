<?php
namespace Bdls\ProjetBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * TextChoice
 */
class TextChoice
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var \Bdls\ProjetBundle\Entity\TextPoll
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
     * Set text
     *
     * @param string $text
     * @return TextChoice
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set poll
     *
     * @param \Bdls\ProjetBundle\Entity\TextPoll $poll
     * @return TextChoice
     */
    public function setPoll(\Bdls\ProjetBundle\Entity\TextPoll $poll)
    {
        $this->poll = $poll;
    
        return $this;
    }

    /**
     * Get poll
     *
     * @return \Bdls\ProjetBundle\Entity\TextPoll 
     */
    public function getPoll()
    {
        return $this->poll;
    }

    /**
     * Add votes
     *
     * @param \Bdls\ProjetBundle\Entity\TextVote $votes
     * @return TextChoice
     */
    public function addVote(\Bdls\ProjetBundle\Entity\TextVote $votes)
    {
        $this->votes[] = $votes;
    
        return $this;
    }

    /**
     * Remove votes
     *
     * @param \Bdls\ProjetBundle\Entity\TextVote $votes
     */
    public function removeVote(\Bdls\ProjetBundle\Entity\TextVote $votes)
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
