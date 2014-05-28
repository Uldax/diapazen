<?php

namespace Bdls\ProjetBundle\Entity;

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
}

