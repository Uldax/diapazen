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
}

