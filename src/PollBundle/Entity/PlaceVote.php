<?php

namespace PollBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/** @ORM\Entity
    @ORM\Table(name="dpz_placevote")
 */
class PlaceVote extends Vote
{
	/**
	  @ORM\ManyToOne(targetEntity="PlaceChoice", inversedBy="votes")
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
     * @param \PollBundle\Entity\PlaceChoice $choice
     * @return PlaceVote
     */
    public function setChoice(\PollBundle\Entity\PlaceChoice $choice)
    {
        $this->choice = $choice;

        return $this;
    }

    /**
     * Get choice
     *
     * @return \PollBundle\Entity\PlaceChoice
     */
    public function getChoice()
    {
        return $this->choice;
    }
}
