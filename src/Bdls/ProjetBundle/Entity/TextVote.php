<?php

namespace Bdls\ProjetBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection; 
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity
    @ORM\Table(name="dpz_textvote")
 */
class TextVote extends Vote
{
	/**
	  @ORM\ManyToOne(targetEntity="TextChoice", inversedBy="votes")
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
     * @param \Bdls\ProjetBundle\Entity\TextChoice $choice
     * @return TextVote
     */
    public function setChoice(\Bdls\ProjetBundle\Entity\TextChoice $choice)
    {
        $this->choice = $choice;

        return $this;
    }

    /**
     * Get choice
     *
     * @return \Bdls\ProjetBundle\Entity\TextChoice 
     */
    public function getChoice()
    {
        return $this->choice;
    }
}
