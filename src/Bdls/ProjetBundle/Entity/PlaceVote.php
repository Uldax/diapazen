<?php

namespace Bdls\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @param \Bdls\ProjetBundle\Entity\PlaceChoice $choice
     * @return PlaceVote
     */
    public function setChoice(\Bdls\ProjetBundle\Entity\PlaceChoice $choice)
    {
        $this->choice = $choice;

        return $this;
    }

    /**
     * Get choice
     *
     * @return \Bdls\ProjetBundle\Entity\PlaceChoice 
     */
    public function getChoice()
    {
        return $this->choice;
    }
}
