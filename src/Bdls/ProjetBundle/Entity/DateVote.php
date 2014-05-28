<?php

namespace Bdls\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @param \Bdls\ProjetBundle\Entity\DateChoice $choice
     * @return DateVote
     */
    public function setChoice(\Bdls\ProjetBundle\Entity\DateChoice $choice)
    {
        $this->choice = $choice;

        return $this;
    }

    /**
     * Get choice
     *
     * @return \Bdls\ProjetBundle\Entity\DateChoice 
     */
    public function getChoice()
    {
        return $this->choice;
    }
}
