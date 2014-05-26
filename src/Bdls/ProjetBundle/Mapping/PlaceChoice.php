<?php

namespace Bdls\ProjetBundle\Entity;

/** @Entity
    @Table(name="dpz_placechoice") */
class PlaceChoice
{
	/** @Id @Column(type="integer") @GeneratedValue */
	private $id;

	/** @Column(type="float") */
	private $latitude;

	/** @Column(type="float") */
	private $longitude;

	/** @ManyToOne(targetEntity="PlacePoll", inversedBy="choices")
	    @JoinColumn(nullable=false)
	 */
	private $poll;

	/** @OneToMany(targetEntity="PlaceVote", mappedBy="choice", orphanRemoval=true, cascade={"all"}) */
	private $votes;


	public function __construct()
	{
		$this->votes = new ArrayCollection();
	}
}

