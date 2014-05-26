<?php

namespace Bdls\ProjetBundle\Entity;

/** @Entity
    @Table(name="dpz_datechoice") */
class DateChoice
{
	/** @Id @Column(type="integer") @GeneratedValue */
	private $id;

	/** @Column(type="datetime") */
	private $date;

	/** @ManyToOne(targetEntity="DatePoll", inversedBy="choices")
	    @JoinColumn(nullable=false)
	 */
	private $poll;

	/** @OneToMany(targetEntity="DateVote", mappedBy="choice", orphanRemoval=true, cascade={"all"}) */
	private $votes;


	public function __construct()
	{
		$this->votes = new ArrayCollection();
	}
}

