<?php

namespace Bdls\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity
    @ORM\Table(name="dpz_textpoll")
 */
class TextPoll extends Poll
{
	/**
	  @ORM\OneToMany(targetEntity="TextChoice", mappedBy="poll", orphanRemoval=true, cascade={"all"})
	  */
	private $choices;


	public function __construct()
	{
		$this->choices = new ArrayCollection();
	}
}


