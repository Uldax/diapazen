<?php

namespace Bdls\ProjetBundle\Entity;

/** @Entity
    @Table(name="dpz_datechoice") */
class Date_Choice
{
	/** @Id @Column(type="integer") @GeneratedValue */
	private $id;

	/** @Column(type="datetime") */
	private $date;

	/** @ManyToOne(targetEntity="Date_Poll", inversedBy="choices")
	    @JoinColumn(nullable=false)
	 */
	private $poll;

	/** @OneToMany(targetEntity="Date_Vote", mappedBy="choice", orphanRemoval=true, cascade={"all"}) */
	private $votes;


	public function __construct()
	{
		$this->votes = new ArrayCollection();
	}
}

