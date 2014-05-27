<?php

use Doctrine\ORM\Mapping as ORM;

namespace Bdls\ProjetBundle\Entity;

/** @Entity
    @Table(name="dpz_textchoice") */
class TextChoice
{
	/** @Id @Column(type="integer") @GeneratedValue */
	private $id;

	/** @Column(type="text") */
	private $text;

	/** @ManyToOne(targetEntity="TextPoll", inversedBy="choices")
	    @JoinColumn(nullable=false)
	 */
	private $poll;

	/** @OneToMany(targetEntity="TextVote", mappedBy="choice", orphanRemoval=true, cascade={"all"}) */
	private $votes;


	public function __construct()
	{
		$this->votes = new ArrayCollection();
	}
}

