<?php

namespace PollBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/** @ORM\Entity
    @ORM\Table(name="dpz_datevote")
 */
class DateVote extends Vote
{
	/**
	  @ORM\ManyToOne(targetEntity="DateChoice", inversedBy="votes")
	  @ORM\JoinColumn(nullable=false)
	  */
	private $choice;


	public function __construct()
	{
		$this->choice = new ArrayCollection();
	}

    /**
     * Set choice
     *
     * @param \PollBundle\Entity\DateChoice $choice
     * @return DateVote
     */
    public function setChoice(\PollBundle\Entity\DateChoice $choice)
    {
        $this->choice = $choice;

        return $this;
    }

    /**
     * Get choice
     *
     * @return \PollBundle\Entity\DateChoice
     */
    public function getChoice()
    {
        return $this->choice;
    }
}
