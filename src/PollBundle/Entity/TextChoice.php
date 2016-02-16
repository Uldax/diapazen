<?php

namespace PollBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity
    @ORM\Table(name="dpz_textchoice") */
class TextChoice
{
	/** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue */
	private $id;

	/** @ORM\Column(type="text") */
	private $text;

	/** @ORM\ManyToOne(targetEntity="TextPoll", inversedBy="choices")
	    @ORM\JoinColumn(nullable=false)
	 */
	private $poll;

	/** @ORM\OneToMany(targetEntity="TextVote", mappedBy="choice", orphanRemoval=true, cascade={"all"}) */
	private $votes;


	public function __construct()
	{
		$this->votes = new ArrayCollection();
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
     * @param \PollBundle\Entity\TextPoll $poll
     * @return TextChoice
     */
    public function setPoll(\PollBundle\Entity\TextPoll $poll)
    {
        $this->poll = $poll;

        return $this;
    }

    /**
     * Get poll
     *
     * @return \PollBundle\Entity\TextPoll
     */
    public function getPoll()
    {
        return $this->poll;
    }

    /**
     * Add votes
     *
     * @param \PollBundle\Entity\TextVote $votes
     * @return TextChoice
     */
    public function addVote(\PollBundle\Entity\TextVote $votes)
    {
        $this->votes[] = $votes;

        return $this;
    }

    /**
     * Remove votes
     *
     * @param \PollBundle\Entity\TextVote $votes
     */
    public function removeVote(\PollBundle\Entity\TextVote $votes)
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
