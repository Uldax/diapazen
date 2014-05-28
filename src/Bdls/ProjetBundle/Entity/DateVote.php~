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
}


