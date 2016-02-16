<?php

namespace PollBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/** @ORM\Entity
    @ORM\Table(name="dpz_datechoice") */
class DateChoice
{
	/** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue */
	private $id;

	/** @ORM\Column(type="datetime") */
	private $date;

	/** @ORM\ManyToOne(targetEntity="DatePoll", inversedBy="choices")
	    @ORM\JoinColumn(nullable=false)
	 */
	private $poll;

	/** @ORM\OneToMany(targetEntity="DateVote", mappedBy="choice", orphanRemoval=true, cascade={"all"}) */
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
     * Set date
     *
     * @param \DateTime $date
     * @return DateChoice
     */
    public function setDate($date)
    {
        $this->date = new \DateTime($date);

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
     * @param \PollBundle\Entity\DatePoll $poll
     * @return DateChoice
     */
    public function setPoll(\PollBundle\Entity\DatePoll $poll)
    {
        $this->poll = $poll;

        return $this;
    }

    /**
     * Get poll
     *
     * @return \PollBundle\Entity\DatePoll
     */
    public function getPoll()
    {
        return $this->poll;
    }

    /**
     * Add votes
     *
     * @param \PollBundle\Entity\DateVote $votes
     * @return DateChoice
     */
    public function addVote(\PollBundle\Entity\DateVote $votes)
    {
        $this->votes[] = $votes;

        return $this;
    }

    /**
     * Remove votes
     *
     * @param \PollBundle\Entity\DateVote $votes
     */
    public function removeVote(\PollBundle\Entity\DateVote $votes)
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