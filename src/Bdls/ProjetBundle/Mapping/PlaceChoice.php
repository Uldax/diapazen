<?php

use Doctrine\ORM\Mapping as ORM;

namespace Bdls\ProjetBundle\Entity;

/** @ORM\Entity
    @ORM\Table(name="dpz_placechoice") */
class PlaceChoice
{
	/** @ORM\Id @Column(type="integer") @ORM\GeneratedValue */
	private $id;

	/** @ORM\Column(type="float") */
	private $latitude;

	/** @ORM\Column(type="float") */
	private $longitude;

	/** @ORM\ManyToOne(targetEntity="PlacePoll", inversedBy="choices")
	    @ORM\JoinColumn(nullable=false)
	 */
	private $poll;

	/** @ORM\OneToMany(targetEntity="PlaceVote", mappedBy="choice", orphanRemoval=true, cascade={"all"}) */
	private $votes;


	public function __construct()
	{
		$this->votes = new ArrayCollection();
	}
}

