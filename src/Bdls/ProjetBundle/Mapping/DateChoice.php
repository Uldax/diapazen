<?php

use Doctrine\ORM\Mapping as ORM;

namespace Bdls\ProjetBundle\Entity;

/** @ORM\Entity
    @ORM\Table(name="dpz_datechoice") */
class DateChoice
{
	/** @ORM\Id @Column(type="integer") @ORM\GeneratedValue */
	private $id;

	/** @ORM\Column(type="datetime") */
	private $date;

	/** @ORM\ManyToOne(targetEntity="DatePoll", inversedBy="choices")
	    @ORM\JoinColumn(nullable=false)
	 */
	private $poll;

	/** @ORM\OneToMany(targetEntity="DateVote", mappedBy="choice", orphanRemoval=true, cascade={"all"}) */
	private $votes;


	public function __construct()
	{
		$this->votes = new ArrayCollection();
	}
}

